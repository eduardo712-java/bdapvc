<?php

/**
 * Template Name: Elementos > Contact
 */

get_header(); ?>


<!-- contact-2 -->
<section class="contact-2">
  <div class="container">
    <div class="row m-0">
      <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
        <div class="text-center mb-xl-7 mb-5">
          <small class="text-uppercase ls-md fw-semibold">modern tech stack</small>
          <h2 class="my-3">Onde nos encontrar</h2>
          <p class="mb-0 text-body">
            Etiam finibus auctor magna quis porta. Vivamus id ornare tellus. Nullam vitae metus felis.
          </p>
        </div>
      </div>
    </div>
    <div class="row position-relative">
      <div class="col-12">
        <div class="bg-white position-absolute rounded-4 box d-flex flex-row align-items-center">
          <div class="m-5">
            <h4>Contato</h4>
            <div><i class="fa-brands fa-whatsapp me-1 fs-5 text-body-tertiary"></i> <strong class="fw-bold text-primary">Celular / WhatsApp:</strong> <a href="https://wa.me/559133333333?text=Ol%C3%A1!%20Tenho%20interesse%20nos%20servi%C3%A7os." class="text-decoration-none" target="_blank" rel="noreferrer" aria-label="WhatsApp">(00) 0000-0000</a></div>
            <div><i class="fa-light fa-phone me-1 fs-5 text-body-tertiary"></i> <strong class="fw-bold text-primary">Fone:</strong> (00) 0000-0000</div>
            <div><i class="fa-light fa-envelope me-1 fs-5 text-body-tertiary"></i> <strong class="fw-bold text-primary">Email:</strong> mail@mail.com</div>
          </div>
        </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.495332012111!2d-46.68023144138155!3d-23.5865621824383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5744e0ebff5b%3A0x769bf4a32f914782!2sGoogle!5e0!3m2!1spt-BR!2sbr!4v1703706738644!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  class="rounded-4 overflow-hidden"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- contact-1 -->
<section class="contact-1">
  <div class="container">
    <div class="y-header">
      <h2 class="y-header-title">FALE CONOSCO</h2>
      <p class="y-header-text">Etiam posuere ullamcorper finibus. Aenean laoreet ligula feugiat laoreet accumsan.</p>
    </div>
    <div class="row">
      <div class="col-12 col-lg-7 text-center text-lg-start mt-5 mt-lg-0">
        <h3><i class="fa fa-envelope-o"></i> Envie sua mensagem</h3>
        <?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato 1"]'); ?>
      </div>
      <div class="col-12 col-lg-4 offset-lg-1 offset-0 text-center text-lg-start">
        <h3>Nosso endereço</h3>
        <p class="y-address">
          Rua XYZ, nº 123<br>
          Cidade - Estado - Brasil<br>
          CEP: 66060-000
        </p>

        <h3>Telefones</h3>
        <p class="y-phones">
          (91) 3232-3232<br>
          (91) 3232-3233
        </p>

        <h3>Siga-nos</h3>
        <p class="y-social">
          <a href="#" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
          <a href="#" title="Twitter"><i class="fab fa-twitter-square fa-2x"></i></a>
          <a href="#" title="Youtube"><i class="fab fa-youtube-square fa-2x"></i></a>
          <a href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="#" title="Linkedin"><i class="fab fa-linkedin-square fa-2x"></i></a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- map-1 -->
<section class="map-1">
  <div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
        <div class="text-center mb-xl-7 mb-5">
          <small class="text-uppercase ls-md fw-semibold">modern tech stack</small>
          <h2 class="my-3">Onde nos encontrar</h2>
          <p class="mb-0 text-body">
            Etiam finibus auctor magna quis porta. Vivamus id ornare tellus. Nullam vitae metus felis.
          </p>
        </div>
      </div>
      <div class="col-12 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4887567439782!2d-46.68472682369054!3d-23.586798162529064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5744e0ebff5b%3A0x769bf4a32f914782!2sGoogle!5e0!3m2!1spt-BR!2sbr!4v1703702038228!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>