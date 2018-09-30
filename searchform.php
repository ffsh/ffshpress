<div class="row">
    <div class="col-12" id="custom-search-input">
        <form class="card card-sm" action="<?php bloginfo('url'); ?>/" method="get">
            <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="fas fa-search h4 text-body"></i>
                </div>
                <!--end of col-->
                <div class="col">
                    <input id="s" name="s" class="form-control form-control-lg form-control-borderless" type="search" placeholder=<?php _e("Search")?> />
                </div>
                <!--end of col-->
                <div class="col-auto">
                    <button class="btn btn-lg" type="submit">
                        <i class="dashicons dashicons-search"></i>
                    </button>
                </div>
                <!--end of col-->
            </div>
        </form>
    </div>
    <!--end of col-->
</div>