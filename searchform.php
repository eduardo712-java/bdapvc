<div class="search-form mb-4">
  <h3>Pesquisar</h3>
  <form method="get" role="search" action="/" class="form-inline">
    <div class="input-group">
      <label class="sr-only" for="blog-search">Pesquisar</label>
      <input class="form-control" name="s" id="blog-search" type="text" placeholder="Buscar..." autocomplete="off" required value="<?php the_search_query(); ?>"/>
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
    <input type="hidden" name="post_type" value="post" />
  </form>
</div>