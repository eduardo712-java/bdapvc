/**
 * Scripts do yeti-bootstrap
 */

(function ($) {
  "use strict";


  //======================================================================
  // MÉTODOS INICIADOS AO CARREGAR A PÁGINA
  //======================================================================
  jQuery(document).ready(function ($) {

    //======================================================================
    // INCLUIR AQUI OS SCRIPTS PERSONALIZADOS
    //======================================================================

    //-----------------------------------------------------
    // Soma os valores dos produtos do pedido
    //-----------------------------------------------------
    $(function () {

      // Detecta quando a linha do produto é alterada para alterar as informações do pedido
      $(document).on('blur', '.ui-sortable .acf-row', function () {

        let soma = 0;

        // Percorre por todos os produtos para somar os valores
        $('.ui-sortable .acf-row').each(function (input) {

          let linha = $(this);
          let index = $(".ui-sortable .acf-row").index(this); // Recupera a linha que foi alterada
          let titulo = linha.find('span[id^=select2-acf-field_6732a84bd4133]').attr("title"); // Pega o título deste produto
          let qtd = linha.find('input[type="number"][id$=6732a875d4134]').val(); // Pega a quantidade deste produto
          let pacotes = linha.find('input[type="number"][id$=6776cfa15513c]').val(); // Pega a quantidade de pacotes deste produto
          //let unidade = linha.find('select[id$=6732a8cfd4135]').val(); // Pega a unidade usada deste produto
          let valor = parseFloat(linha.find('input[type="number"][id$=674636e72c50f]').val()) || 0; // Pega o valor deste produto
          let proximoInteiro = "";

          // Desabilita os campos QTD e Unidade para edição
          linha.find('input[type="number"][id$=6732a875d4134]').prop("readonly", true);
          linha.find('input[type="number"][id$=6732a875d4134]').css('background-color', '#f5f5f5');
          linha.find('select[id$=6732a8cfd4135]').css('background-color', '#f5f5f5');

          //-----------------------------------------------------
          // Calcula a quantidade de pacotes com base na metragem solicitada no orçamento
          //-----------------------------------------------------

          // Verifica se um produto foi selecionado
          if (titulo) {

            // Executa a consulta via AJAX para resgatar as informações do produto
            var data = {
              'action': 'ajax_get_metragem_function', // Ação
              'data': titulo, // Dados
              _ajax_nonce: ajax_object.nonce, // Nonce
            };

            $.post(ajax_object.ajax_url, data, function (responde) { // Cacllback

              // Verifica se o produto possui informações sobre a metragem de pacote em suas configurações
              if (responde) {

                var json = $.parseJSON(responde); // Cria o objeto com chave do vetor

                // Verifica se o produto possui unidade em PEÇAS ou MTS, com base em sua categoria
                if (
                  json.categoria.startsWith("perfil-") ||
                  json.categoria.startsWith("acessorio") ||
                  json.categoria.startsWith("clipe") ||
                  json.categoria.startsWith("painel-ripado")
                ) {
                  linha.find('select[id$=6732a8cfd4135]').val("PEÇAS"); // Altera o valor do campo da Unidade

                } else {
                  linha.find('select[id$=6732a8cfd4135]').val("MTS"); // Altera o valor do campo da Unidade
                }

                let qtd = (pacotes * json.metragem) || ""; // Calcula a quantidade através dos pacotes informados
                let valor_final = valor * qtd; // Calcula o valor final do produto
                soma += valor_final; // Soma os valores

                //linha.find('input[type="number"][id$=6776cfa15513c]').val(proximoInteiro); // Altera o valor do campo de pacotes
                linha.find('input[type="number"][id$=6732a875d4134]').val(qtd); // Altera o valor do campo QTD
                linha.find('input[type="text"][id$=6732a8e0d4136]').val(json.referencia); // Altera o valor do campo da referência

                // Atualiza o valor total do pedido
                var soma_final = parseFloat(soma).toLocaleString("pt-BR", { style: "currency", currency: "BRL" }); // Converte o valor para Reais
                $('.pedido-total-valor').html(soma_final); // Altera o HTML do total

              }

            });
          }
        });

      });
    });



    //======================================================================
    // NÃO ALTERAR NADA A PARTIR DESTA LINHA
    //======================================================================

    //-----------------------------------------------------
    // Tabelas
    //-----------------------------------------------------
    var options = {
      valueNames: ['name', 'obs', 'vote']
    };
    var userList = new List('table-list', options);

    $("#table-list select.filter").change(function () {
      var selectedOption = $(this).children("option:selected").val();
      if (selectedOption == 'all') {
        $(".opt-1").removeClass('d-none');
        $(".opt-0").removeClass('d-none');
      } else if (selectedOption == 'opt-1') {
        $(".opt-1").removeClass('d-none');
        $(".opt-0").addClass('d-none');
      } else if (selectedOption == 'opt-0') {
        $(".opt-1").addClass('d-none');
        $(".opt-0").removeClass('d-none');
      }
    });


    //-----------------------------------------------------
    // Tooltips
    //-----------------------------------------------------
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl, {
      container: 'body',
      boundary: 'window'
    }));


    //-----------------------------------------------------
    // Inicia a galeria de imagens
    //-----------------------------------------------------

    /* Galeria padrão yeti lab */
    var gallery = new SimpleLightbox('.y-gallery a', {
      className: 'y-lightbox'
    });

    /* Galeria padrão do WP */
    var galleryWP = new SimpleLightbox('.blocks-gallery-grid a', {
      className: 'y-lightbox'
    });

    /* Galeria padrão do WP 6 >*/
    var galleryWP = new SimpleLightbox('.wp-block-gallery a', {
      className: 'y-lightbox'
    });

    //-----------------------------------------------------
    // Inicia os botões com ação de confirmação
    //-----------------------------------------------------    
    // $('[data-toggle=confirmation]').confirmation({
    //   rootSelector: '[data-toggle=confirmation]',
    //   title: 'Deseja continuar?',
    //   btnOkLabel: 'Sim',
    //   btnOkClass: 'btn btn-sm btn-success',
    //   btnCancelLabel: 'Não',
    //   btnCancelClass: 'btn btn-sm btn-danger'
    //   // other options
    // });


    //-----------------------------------------------------
    // Ajusta o tamanho do menu
    //-----------------------------------------------------

    /* Quando a página foi atualizada com o scroll baixo  */
    if ($(this).scrollTop() > 100) {
      $("#menu-1").addClass("resize");
    }

    /* Diminui o tamanho do menu ao descer a barra de rolagem */
    $(document).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $("#menu-1").addClass("resize");
      } else {
        $("#menu-1").removeClass("resize");
      };
    });

    //-----------------------------------------------------
    // Inicia as animações com scroll
    //-----------------------------------------------------
    AOS.init({
      // Quando quisermos usar usar a biblioteca Animate.css
      //useClassNames: true,
      //initClassName: false,
      //animatedClassName: 'animated',
    });




    //-----------------------------------------------------
    // Inicia e fecha o vídeo do modal ao abrí-lo
    // ou fechá-lo
    //-----------------------------------------------------
    var $videoSrc;
    $('.btn-open-modal').click(function () {
      $videoSrc = $(this).data("bs-src");
    });

    // Quando o modal é aberto o vídeo é iniciado automaticamente
    $('#content-7-modal').on('shown.bs.modal', function (e) {
      // Configura a origem do vídeo para tocá-lo e não mostra os vídeos relacioandos.
      $("#content-7-video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    });

    // Para o vídeo quando o modal é fechado
    $('#content-7-modal').on('hide.bs.modal', function (e) {
      $("#content-7-video").attr('src', $videoSrc);
    });


    //-----------------------------------------------------
    // Verificador de abas abertas
    //-----------------------------------------------------
    //var hash = document.location.hash;
    //if (hash) {
    //  $('.nav-tabs a[href=' + hash + ']').tab('show');
    //}


    //-----------------------------------------------------
    // Carousels e Sliders
    //-----------------------------------------------------

    // ------------------
    // banner-1
    // ------------------
    var banner1 = $('.banner-1 .slider');
    banner1.css("display", "block");

    banner1.owlCarousel({
      loop: true,
      // animateOut: 'fadeOutDownBig',
      // animateIn: 'fadeInDown',
      smartSpeed: 450,
      margin: 0,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        600: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    });


    // ------------------
    // carousel-1
    // ------------------
    var carousel1 = $('.carousel-1 .itens');
    carousel1.owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true
        }
      }
    });


    // ------------------
    // carousel-2 // Três elementos por carrosel
    // ------------------
    var carousel2 = $('.carousel-2 .itens');
    carousel2.owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      stagePadding: 22,
      autoplay: false,
      mergeFit: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      navText: ["<i class='fa-light fa-chevron-left'></i>", "<i class='fa-light fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          nav: false,
          dots: false
        },
        767: {
          items: 1,
          nav: true,
          dots: false
        },
        1000: {
          items: 1,
          nav: true,
          dots: false
        }
      }
    });

    // ------------------
    // carousel-2 3-elementos // Três elementos por carrosel
    // ------------------
    var carousel_produtos = $('.carousel-produtos .itens');
    carousel_produtos.owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      stagePadding: 20,
      autoplay: false,
      mergeFit: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      navText: ["<i class='fa-light fa-chevron-left'></i>", "<i class='fa-light fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          dots: false,
          nav: true
        },
        767: {
          items: 3,
          dots: false,
          nav: true
        },
        1000: {
          items: 4,
          dots: false,
          nav: true
        }
      }
    });

    // ------------------
    // carousel-3 // Dois elementos por carrosel
    // ------------------
    var carousel3 = $('.carousel-3 .itens');
    carousel3.owlCarousel({
      loop: true,
      margin: 25,
      responsiveClass: true,
      stagePadding: 50,
      autoplay: false,
      mergeFit: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      navText: ["<i class='fa-light fa-chevron-left'></i>", "<i class='fa-light fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          nav: false,
          dots: false
        },
        991: {
          items: 1,
          nav: true,
          dots: false
        },
        1280: {
          items: 2,
          nav: true,
          dots: false
        }
      }
    });

    // ------------------
    // carousel-4 // 1 elemento por carrosel
    // ------------------
    var carousel4 = $('.carousel-4 .itens');
    carousel4.owlCarousel({
      loop: true,
      margin: 25,
      responsiveClass: true,
      stagePadding: 50,
      autoplay: false,
      mergeFit: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      navText: ["<i class='fa-light fa-chevron-left'></i>", "<i class='fa-light fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          nav: false,
          dots: false
        },
        991: {
          items: 1,
          nav: true,
          dots: false
        },
        1280: {
          items: 1,
          nav: true,
          dots: false
        }
      }
    });



    // ------------------
    // slider-1
    // ------------------
    var slider1 = $('.slider-1 .slider');
    slider1.css("display", "block");

    // Quando inicia os eventos do slider
    slider1.on('initialize.owl.carousel drag.owl.carousel translate.owl.carousel', function (event) {
      $('.slider-1 [data-aos]').hide(0);
      $('.slider-1 [data-aos]').removeClass('aos-init').removeClass('aos-animate');
    });

    // Quando termina os eventos do slider
    slider1.on('initialized.owl.carousel translated.owl.carousel', function (event) {
      $('.slider-1 [data-aos]').show(0);
      AOS.init();
    });


    slider1.owlCarousel({
      loop: true,
      // animateOut: 'fadeOutDownBig',
      // animateIn: 'fadeInDown',
      smartSpeed: 450,
      dots: false,
      margin: 0,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      navText: ["<i class='fa fa-chevron-left fa-light'></i>", "<i class='fa fa-chevron-right fa-light'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    });



    // ------------------
    // slider-news
    // ------------------
    var slider_news = $('.slider-news .slider');
    slider_news.css("display", "block");

    // Quando inicia os eventos do slider
    slider_news.on('initialize.owl.carousel drag.owl.carousel translate.owl.carousel', function (e) {
      $('.slider-news [data-aos]').hide(0);
      $('.slider-news [data-aos]').removeClass('aos-init').removeClass('aos-animate');
    });

    // Quando termina os eventos do slider
    slider_news.on('initialized.owl.carousel translated.owl.carousel', function (e) {
      var atual = e.item.index - 2; // O valor do indice no menu personalizado é menor em 2 em comparação ao indice do item ativo no slider
      $(".slider-nav").find('.ativo').removeClass("ativo"); // Remove a classe ativa dos demais itens do menu
      $(".slider-nav a[data-index='" + (atual) + "']").addClass("ativo"); // Inclui a classe ativa ao item clicado

      $('.slider-news [data-aos]').show(0);
      AOS.init();
    });

    // Navegação personalizada
    $(".slider-nav a").click(function (e) {
      var posicao = $(this).data("index"); // Posição do item clicado
      slider_news.trigger('to.owl', posicao); // Move o slider para posição do item capturado
      $(".slider-nav").find('.ativo').removeClass("ativo"); // Remove a classe ativa dos demais itens do menu
      $(this).addClass("ativo"); // Inclui a classe ativa ao item clicado
      e.preventDefault();
    })

    slider_news.owlCarousel({
      loop: true,
      // animateOut: 'fadeOutDownBig',
      // animateIn: 'fadeInDown',
      smartSpeed: 450,
      margin: 0,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          dots: false,
          nav: true
        },
        991: {
          items: 1,
          dots: false,
          nav: false
        },
        1000: {
          items: 1,
          dots: false,
          nav: false
        }
      }
    });


    // ------------------
    // content-5
    // ------------------
    var content5 = $('.content-5 .slider');
    content5.owlCarousel({
      loop: true,
      animateOut: 'fadeOut',
      //animateIn: 'fadeInDown',
      smartSpeed: 450,
      margin: 0,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
      lazyLoad: true,
      responsive: {
        0: {
          items: 1,
          dots: false,
          nav: true
        },
        768: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    });


    /**
     * ----------------------------------------------------------
     * Método para confirmação de dados
     * ----------------------------------------------------------
     */
    $('[data-bb="confirm"]').on('click', function () {

      var me = $(this);
      var url = me.attr('href');
      var exec = window[me.data('confirm')];
      var args = me.data('args');

      bootbox.confirm("Você deseja continuar com esta operação?", function (result) {

        if (result === true) {

          if (!exec) {
            window.location.href = url;
          } else {

            if (typeof exec === 'function') {
              args ? exec(args) : exec();
            } else {
              console.log('a função de callback não existe: ' + exec);
            }
          }
        }
      });

      return false;

    });


    //-----------------------------------------------------
    // Fixa o menu no topo ao rolar a barra
    //-----------------------------------------------------
    //    $(window).bind('scroll', function () {
    //
    //      if ($(window).scrollTop() > 0) {
    //        $('#header').addClass('navbar-fixed-top');
    //      } else {
    //        $('#header').removeClass('navbar-fixed-top');
    //
    //      }
    //    });


    //-----------------------------------------------------
    // Método que ativa a rolagem suave em sites de
    // página única
    //-----------------------------------------------------
    //var scroll = new SmoothScroll('a[href*="#"]', {
    //	header: '#menu-1',
    //  speed: 1000, // tempo da animação
    //  speedAsDuration: true // padroniza o tempo das animações para sempre durar o mesmo valor
    //});


    //-----------------------------------------------------
    // Fecha o menu assim que um link é clicado, evitando
    // ficar aberto por cima do conteúdo da página
    //-----------------------------------------------------
    $('.navbar-collapse a').click(function () {
      $('.navbar-collapse').css('height', 'auto');
      $('.navbar-collapse').removeClass('show');
    });

    //-----------------------------------------------------
    // Evita que um link com submenu feche o menu
    //-----------------------------------------------------
    $('.navbar-collapse a.dropdown-toggle').click(function (e) {
      e.preventDefault();
      $('.navbar-collapse').css('height', 'auto');
      $('.navbar-collapse').addClass('show');
    });


    //-----------------------------------------------------
    // HERO Block
    //-----------------------------------------------------

    var StickyHero = function (element) {
      this.element = element;
      this.content = this.element.getElementsByClassName('sticky-hero__content')[0];
      initStickyHero(this);

    };

    function initStickyHero(hero) {
      var observer = new IntersectionObserver(stickyCallback.bind(hero), {
        threshold: [0, 0.1, 1]
      });
      observer.observe(hero.content);
    };

    function stickyCallback(entries) {
      // entries[0].target, entries[0].intersectionRatio
      // this is hero
      var bool = entries[0].intersectionRatio > 0;
      //toggleClass(this.element, '.sticky-hero--media-is-fixed', bool);
      $(this.element).toggleClass('sticky-hero--media-is-fixed', bool);
    }
    var stickyHeros = document.getElementsByClassName('js-sticky-hero');
    if (stickyHeros.length > 0) {
      for (var i = 0; i < stickyHeros.length; i++) {
        new StickyHero(stickyHeros[i]);
      }
    }


    //-----------------------------------------------------
    // DIVIDER WAVES
    //-----------------------------------------------------
    var e = {
      init: function () {
        e.waveCanvas()
      },
      isVariableDefined: function (el) {
        return typeof !!el && (el) != 'undefined' && el != null;
      },


      // START: 15 wave
      waveCanvas: function () {
        var canvas = document.getElementById('waveCanvas')
        if (e.isVariableDefined(canvas)) {
          var ctx = canvas.getContext('2d')
          canvas.width = canvas.parentNode.offsetWidth
          canvas.height = canvas.parentNode.offsetHeight

          let step = 0
          const lines = 4

          function loop() {
            ctx.clearRect(0, 0, canvas.width, canvas.height)
            step++
            for (let i = 0; i < lines; i++) {
              ctx.fillStyle = 'rgba(255,255,255,.8)'
              var angle = (step + i * 180 / lines) * Math.PI / 180
              var deltaHeight = Math.sin(angle) * 90
              var deltaHeightRight = Math.cos(angle) * 50
              ctx.beginPath()
              ctx.moveTo(0, canvas.height / 2 + deltaHeight)
              ctx.bezierCurveTo(canvas.width / 2, canvas.height / 2 + deltaHeight - 50, canvas.width / 2, canvas.height / 2 + deltaHeightRight - 50, canvas.width, canvas.height / 2 + deltaHeightRight)
              ctx.lineTo(canvas.width, canvas.height)
              ctx.lineTo(0, canvas.height)
              ctx.lineTo(0, canvas.height / 2 + deltaHeight)
              ctx.closePath()
              ctx.fill()
            }

            requestAnimationFrame(loop)
          }
          loop()
        }
      },
      // END: wave

    };
    e.init();



    //-----------------------------------------------------
    // Detecta os dispositivos e sistemas operacionais
    //-----------------------------------------------------
    if (navigator.userAgent.match(/iPad/i)) {
      //code for iPad here
    }

    if (navigator.userAgent.match(/iPhone/i)) {
      //code for iPhone here
    }


    if (navigator.userAgent.match(/Android/i)) {
      //code for Android here
    }


    if (navigator.userAgent.match(/BlackBerry/i)) {
      //code for BlackBerry here
    }


    if (navigator.userAgent.match(/webOS/i)) {
      //code for webOS
    }

    AOS.refresh();

  });

})(jQuery);