<form role="search" method="get" action="<?= home_url('/blog') ?>" class="search-form">
    <div class="input-group">
      <input type="search" class="form-control" value="<?= get_search_query() ?>" placeholder="Search" name="s" title="Search">
      <div class="input-group-append">
        <button class="btn btn-light" type="submit" name="submit">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
</form>