<form role="search" method="get" action="<?= home_url('/blog') ?>" class="search-form">
    <input type="search" class="form-control" value="<?= get_search_query() ?>" placeholder="Search" name="s" title="Search">
    <div class="input-group-append">
      <button class="btn" type="button" name="submit">
        <i class="fa fa-search"></i>
      </button>
    </div>
</form>