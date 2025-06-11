/**
 * Scripts Ajax
 */

(function ($) {
  "use strict";

  //======================================================================
  // MÉTODOS INICIADOS AO CARREGAR A PÁGINA
  //======================================================================
  jQuery(document).ready(function ($) {

    //-----------------------------------------------------
    // AJAX: Modelo de consulta
    //-----------------------------------------------------
    //$('form#ajax-example-form').submit(function (e) {
    $(document).on("click", "#btn-ajax", function (e) {

      //e.preventDefault();
      $.confirm({
        title: "Confirma a ação?",
        content: 'Esta ação não pode ser desfeita.',
        icon: 'fa-light fa-triangle-exclamation fa-beat',
        type: 'orange', // red, green, orange
        theme: "material",
        buttons: {
          confirm: {
            text: 'SIM', // With spaces and symbols
            btnClass: 'btn btn-lg btn-success',
            action: function () {

              // Exibe a animação "carregando"
              $('#btn-ajax').html('<div id="ajax-example-load"><span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Buscando...</div>').addClass('disabled');

              var data = {
                'action': 'ajax_example_function', // Ação
                'data': $('form#ajax-example-form').serialize(), // Dados
                _ajax_nonce: ajax_object.nonce, // Nonce
              };

              $.post(ajax_object.ajax_url, data, function (response) { // Cacllback
                // Remove a animação "carregando"
                $("#btn-ajax").html('Buscar título').removeClass('disabled');
                // Exibe o alert com o resultado
                $("form#ajax-example-form .alert").removeClass('d-none');
                // Insere no div a mensagem de retorno
                $("#ajax-example-msg").html(response);
              });

              //return false;

            }
          },
          cancel: {
            text: 'NÃO', // With spaces and symbols
            btnClass: 'btn btn-danger btn-lg',
            // action: function () {
            //   $.alert("Estorno cancelado!");
            // }
          }
        }
      });
      return false;


    });


  });

})(jQuery);