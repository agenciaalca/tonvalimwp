<form action="/" method="get" accept-charset="utf-8" id="searchform" role="search">
	<div class="searchform">
		<div class="input col-md-10">
			 <input class="form-control" type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
		</div>
		<div class="button col-md-2">
			 <button class="btn btn-custom" type="submit" id="searchsubmit" value=""><i class='fa fa-search'></i></button>
		</div>
	</div>
</form>