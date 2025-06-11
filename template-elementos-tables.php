<?php

/**
 * Template Name: Elementos > Tables
 */

get_header(); ?>

<!-- plan-1 -->
<section class="table-1">
  <div class="container">
    <div class="y-header">
      <h2 class="y-header-title">TABELAS</h2>
      <p class="y-header-text">Etiam finibus auctor magna quis porta. Vivamus id ornare tellus. Nullam vitae metus felis.</p>
    </div>

    <div id="table-list">
      <div class="row justify-content-start align-items-center my-4 acoes">

        <div class="col-auto pe-0 small fw-bold d-none">Filtrar por nome:</div>
        <div class="col-auto" style="width: 300px;">
          <label for="list-search" class="form-label small mb-1">Filtrar por nome</label>
          <input class="search form-control form-control-sm fontAwesome" id="list-search" placeholder="&#xf002 Digite o nome de um inscrito" />
        </div>

        <div class="col-auto d-none2">
          <label for="filtro-jurados" class="form-label small mb-1">Filtrar inscritos</label>
          <select class="form-select form-select-sm filter" aria-label="Exibir" id="filtro-jurados">
            <option value="all" selected>Exibir todos os inscritos</option>
            <option value="opt-1">Mostrar apenas os que já votei</option>
            <option value="opt-0">Mostrar apenas os que ainda não votei</option>
          </select>
        </div>

      </div>

      <div class="rounded-3 overflow-hidden">
        <table class="table table-sortable table-condensed table-hover align-middle m-0">
          <thead class="bg-white">
            <tr>
              <th class="sort asc y-over" data-sort="name" data-default-order="desc">Nome do artista <i class="fa-light fa-circle-info me-1 y-over" data-bs-toggle="tooltip" data-bs-title="Clique no nome de um participante para votar nele."></i></th>
              <th class="text-center sort y-over" data-sort="obs" style="width: 170px;">Observações <i class="fa-light fa-circle-info me-1 y-over" data-bs-toggle="tooltip" data-bs-title="Você pode atribuir comentários aos seus votos, como um lembrete de algo que gostou no participante por exemplo."></i></th>
              <th class="sort text-end y-over pe-4" data-sort="vote" style="width: 150px;">Já votei? <i class="fa-light fa-circle-info me-1 y-over" data-bs-toggle="tooltip" data-bs-title="Indica se você já votou ou não no participante."></i></th>
            </tr>
          </thead>

          <tbody class="list">
            <tr class="opt-1">
              <td class="name">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/website.png" width="50" height="50" class="d-none">
                <a href="#">João Pedro</a>
              </td>
              <td class="text-center py-0 obs">
                <span class="d-none">0</span>
                <i class="fa-light fa-comment" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="..." data-bs-placement="top"></i>
              </td>
              <td class="py-0 vote text-end pe-4">
                <span class="d-none">1</span>
                <i class="fa-duotone fa-circle-check check" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Sim" data-bs-placement="top"></i>
              </td>
            </tr>
            <tr class="opt-0">
              <td class="name">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/website.png" width="50" height="50" class="d-none">
                <a href="#">Marina de Almeida</a>
              </td>
              <td class="text-center py-0 obs">
                <span class="d-none">1</span>
                <i class="fa-duotone fa-comment-dots check" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Minhas observações..." data-bs-placement="top"></i>
              </td>
              <td class="py-0 vote text-end pe-4">
                <span class="d-none">0</span>
                <i class="fa-light fa-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Não" data-bs-placement="top"></i>
              </td>
            </tr>
            <tr class="opt-0">
              <td class="name">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/website.png" width="50" height="50" class="d-none">
                <a href="#">Waleska Nunes</a>
              </td>
              <td class="text-center py-0 obs">
                <span class="d-none">0</span>
                <i class="fa-light fa-comment" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="..." data-bs-placement="top"></i>
              </td>
              <td class="py-0 vote text-end pe-4">
                <span class="d-none">0</span>
                <i class="fa-light fa-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Não" data-bs-placement="top"></i>
              </td>
            </tr>
            <tr class="opt-1">
              <td class="name">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/website.png" width="50" height="50" class="d-none">
                <a href="#">Américo da Silva</a>
              </td>
              <td class="text-center py-0 obs">
                <span class="d-none">0</span>
                <i class="fa-light fa-comment" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="..." data-bs-placement="top"></i>
              </td>
              <td class="py-0 vote text-end pe-4">
                <span class="d-none">1</span>
                <i class="fa-duotone fa-circle-check check" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Sim" data-bs-placement="top"></i>
              </td>
            </tr>
            <tr class="opt-0">
              <td class="name">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/website.png" width="50" height="50" class="d-none">
                <a href="#">Bruno da Costa</a>
              </td>
              <td class="text-center py-0 obs">
                <span class="d-none">1</span>
                <i class="fa-duotone fa-comment-dots check" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Minhas observações..." data-bs-placement="top"></i>
              </td>
              <td class="py-0 vote text-end pe-4">
                <span class="d-none">0</span>
                <i class="fa-light fa-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Não" data-bs-placement="top"></i>
              </td>
            </tr>
            <tr class="opt-0">
              <td class="name">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/website.png" width="50" height="50" class="d-none">
                <a href="#">Marcelo de Oliveira</a>
              </td>
              <td class="text-center py-0 obs">
                <span class="d-none">0</span>
                <i class="fa-light fa-comment" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="..." data-bs-placement="top"></i>
              </td>
              <td class="py-0 vote text-end pe-4">
                <span class="d-none">0</span>
                <i class="fa-light fa-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-title="Não" data-bs-placement="top"></i>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>

</section>

<?php get_footer(); ?>