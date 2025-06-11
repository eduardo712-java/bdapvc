<?php

/**
 * Template Name: Elementos > Footers
 */

get_header(); ?>


<!-- #footer-4 -->
<section id="footer-4" class="bg-body-secondary py-4 my-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="container">
          <div class="row d-flex align-items-center small">
            <div class="col-12 col-lg-3 small text-center text-lg-start mb-3 mb-lg-0">
              <?php if (has_custom_logo()) : ?>
                <div class="navbar-brand"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
            </div>
            <div class="col-12 col-lg-7 small text-lg-start text-center mb-3 mb-lg-0">
              Razão Social Ltda - CNPJ: 00.000.000/0001-00<br>
              Rua XYZ, 1234, Bairro - Cidade-Estado CEP: 00000-000<br>
              Fone/Fax: (00) 0000-0000<br>
              &copy; <?php echo date('Y'); ?> Todos os Direitos Reservados.
            </div>
            <div class="col-12 col-lg-2 small text-center text-lg-end">
              <a href="#" title="Facebook" class="text-primary"><i class="fab fa-facebook-square fa-2x me-2"></i></a>
              <a href="#" title="Linkedin" class="text-primary"><i class="fab fa-linkedin fa-2x me-2"></i></a>
              <a href="#" title="Instagram" class="text-primary"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- #footer-3 -->
<section id="footer-3" class="px-4">
  <div class="container-fluid overflow-hidden rounded-3">
    <div class="row bg-body-tertiary">
      <div class="col-12">
        <div class="container">
          <div class="row small py-5">
            <div class="col-12 col-lg-4 small">
              <div class="h62 mb-0 fw-bold text-primary text-uppercase">Morbi placerat nibh ut risus ultricies ultricies</div>
              <div class="h62 fw-bold text-secondary text-uppercase">Nullam eget erat placerat</div>
              <p>Rua XYZ, 9876<br>
                Bairro - Cidade - ESTADO<br>
                (00) 0000-1111 / 2222-3333</p>

              <div class="h62 mb-0 fw-bold text-primary text-uppercase">Morbi placerat nibh ut risus ultricies ultricies</div>
              <div class="h62 fw-bold text-secondary text-uppercase">Nullam eget erat placerat</div>
              <p class="m-lg-0">Rua XYZ, 9876<br>
                Bairro - Cidade - ESTADO<br>
                (00) 0000-1111 / 2222-3333</p>
            </div>
            <div class="col-12 col-lg-4 small">
              <div class="h62 mb-0 fw-bold text-primary text-uppercase">Morbi placerat nibh ut risus ultricies ultricies</div>
              <div class="h62 fw-bold text-secondary text-uppercase">Nullam eget erat placerat</div>
              <p>Rua XYZ, 9876<br>
                Bairro - Cidade - ESTADO<br>
                (00) 0000-1111 / 2222-3333</p>

              <div class="h62 mb-0 fw-bold text-primary text-uppercase">Morbi placerat nibh ut risus ultricies ultricies</div>
              <div class="h62 fw-bold text-secondary text-uppercase">Nullam eget erat placerat</div>
              <p class="m-lg-0">Rua XYZ, 9876<br>
                Bairro - Cidade - ESTADO<br>
                (00) 0000-1111 / 2222-3333</p>
            </div>
            <div class="col-12 col-lg-4 small">
              <div class="h62 mb-0 fw-bold text-primary text-uppercase">Morbi placerat nibh ut risus ultricies ultricies</div>
              <div class="h62 fw-bold text-secondary text-uppercase">Nullam eget erat placerat</div>
              <p>Rua XYZ, 9876<br>
                Bairro - Cidade - ESTADO<br>
                (00) 0000-1111 / 2222-3333</p>

              <div class="h62 mb-0 fw-bold text-primary text-uppercase">Morbi placerat nibh ut risus ultricies ultricies</div>
              <div class="h62 fw-bold text-secondary text-uppercase">Nullam eget erat placerat</div>
              <p class="m-lg-0">Rua XYZ, 9876<br>
                Bairro - Cidade - ESTADO<br>
                (00) 0000-1111 / 2222-3333</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row bg-body-secondary">
      <div class="col-12 py-3">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'depth' => 1, // 1 = sem dropdowns, 2 = com dropdowns.
          'container' => 'div',
          //'container_class' => 'collapse navbar-collapse',
          'container_id' => 'yb-navbar-footer',
          'menu_class' => 'nav navbar-nav d-flex flex-column  flex-md-row justify-content-center',
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </div>
    </div>
    <div class="row bg-dark-subtle">
      <div class="col-12 py-4">
        <div class="container">
          <div class="row d-flex align-items-center small">
            <div class="col-12 col-lg-3 small text-center text-lg-start mb-3 mb-lg-0">
              <?php if (has_custom_logo()) : ?>
                <div class="navbar-brand"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6 small text-center mb-3 mb-lg-0">
              Cras finibus, est sed fermentum varius, quam arcu tincidunt ante, ut vulputate justo enim at urna.
            </div>
            <div class="col-12 col-lg-3 small text-center text-lg-end">
              <a href="#" title="Facebook"><i class="fab fa-facebook fa-2x me-2"></i></a>
              <a href="#" title="Linkedin"><i class="fab fa-linkedin fa-2x me-2"></i></a>
              <a href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /#footer-3 -->


<hr class="my-5">


<!-- #footer-2 -->
<footer id="footer-2">
  <section class="footer-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-12 col-12 text-center text-lg-start mb-5 mb-lg-0">
          <?php if (has_custom_logo()) : ?>
            <div class="custom-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center text-lg-start">
          <p>Dom Romualdo de Seixas, 963<br>
            Umarizal – Belém – Pará<br>
            Cep: 66050-110<br><br>
            <a href="#" title="Facebook"><i class="fab fa-facebook fa-2x me-2"></i></a>
            <a href="#" title="Linkedin"><i class="fab fa-linkedin fa-2x me-2"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
          </p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center text-lg-start mt-5 mt-md-0">
          <p><strong class="mb-3 d-block">FALE CONOSCO</strong>
            (91) 3230-1124<br>
            contato@e-mail.com<br>
            Atendimento de 10:00hs às 20:00hs<br>
            De Segunda à Sexta-feira.
          </p>
        </div>
        <div class="col-lg-3 col-md-12 text-center text-lg-start mt-5 mt-md-0 shortcuts">
          <p><strong class="mb-3 d-block">ATALHOS</strong>
            <a href="#" title="Link 1">But I must explain</a>
            <a href="#" title="Link 1">To you how all this mistaken</a>
            <a href="#" title="Link 1">Idea of denouncing</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 text-center text-lg-start">
          <a href="<?php echo home_url(); ?>"><?php bloginfo('title'); ?></a> &copy; <?php echo date('Y'); ?> Todos os direitos reservados. <?php echo bloginfo('description') ?>
        </div>
        <!--/.col-sm-6 -->
        <div class="col-12 col-lg-6 text-center text-lg-start">

          <!-- yeti lab -->
          <div id="yeti">
            <span class="texto">Desenvolvido por <span class="blue">yeti</span> <span class="black">lab</span></span>
            <a href="http://www.yetilab.net" target="_blank" title="Desenvolvido por yeti lab"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yetilab.png" width="22" height="22" alt="Desenvolvido por yeti lab" /></a>
          </div>
          <!-- /.yeti lab -->

        </div>
      </div>
    </div>
  </section>
</footer>
<!-- /#footer-2 -->


<hr class="my-5">


<!-- #footer-1 -->
<footer id="footer-1">
  <section class="footer-content text-center text-lg-start">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4">
          <p><strong>LOCALIZAÇÃO</strong><br>
            Dom Romualdo de Seixas, 963<br>
            Umarizal – Belém – Pará<br>
            Cep: 66050-110<br>
            (91) 3230-1124
          </p>
        </div>
        <div class="col-12 col-lg-4 mt-4 mt-lg-0">
          <p><strong>ATENDIMENTO</strong><br>
            Funcionamento de 10:00hs às 20:00hs<br>
            De Segunda à Sexta-feira.
          </p>
        </div>
        <div class="col-12 col-lg-4 mt-4 mt-lg-0 y-social">
          <p><strong>FIQUE POR DENTRO</strong><br>
            <a href="#" title="Linkedin"><i class="fab fa-linkedin fa-3x"></i></a>
            <a href="#" title="Email"><i class="fas fa-envelope fa-3x"></i></a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 text-center text-lg-start">
          <a href="<?php echo home_url(); ?>"><?php bloginfo('title'); ?></a> &copy; <?php echo date('Y'); ?> Todos os direitos reservados.<br>
          <?php echo bloginfo('description') ?>
        </div>
        <!--/.col-sm-6 -->
        <div class="col-lg-6 col-12">

          <!-- yeti lab -->
          <div id="yeti">
            <span class="texto">Desenvolvido por <span class="blue">yeti</span> <span class="black">lab</span></span>
            <a href="http://www.yetilab.net" target="_blank" title="Desenvolvido por yeti lab"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yetilab.png" width="22" height="22" alt="Desenvolvido por yeti lab" /></a>
          </div>
          <!-- /.yeti lab -->

        </div>
      </div>
    </div>
  </section>
</footer>
<!-- /#footer-1 -->


<?php get_footer(); ?>