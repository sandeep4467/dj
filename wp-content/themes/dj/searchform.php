<form  method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
        <!--<span class="blinker"></span>-->
        <input required class="search form-control" placeholder="Search" type="text" value="<?php echo get_search_query(); ?>" name="s">
        <span class="input-group-btn">
            <button class=" submit"  type="submit"><span class="fa fa-search" aria-hidden="true"></span></button> 
        </span>
    </div>
</form>