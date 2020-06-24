<?php require_once('../private/initialize.php'); ?>

<?php $header_variables = array("<body class='d-flex flex-column h-100'>", "sticky-top", "nav-item", "nav-item active", "nav-item", "nav-item"); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<!-- Page content -->
<!-- outer jumbotron -->
<div class="container d-inline-flex flex-column">
    <div class="jumbotron services-outer-jumbotron"  id="outer-jumbotron">
        <div class="container">
            <h1 class="text-center" id="main-title">Mr Grass Master Services</h1>
            <hr class="my-4" id="services-hr">
            <div class="row">
                <div class="card-deck">
                    <div class="card mt-4 ml-4 mr-4">
                        <h5 class="card-header  text-center">Lawn Mowing</h5>
                        <img src="images/mower.jpg" class="card-img-top" id="lawnmower" alt="lawn mower">
                        <div class="card-body">
                            <p class="card-text">A professional service that includes trimming edges and sweeping adjacent paths to keep your property looking tidy.</p>
                        </div>
                    </div>
                    <div class="card mt-4 ml-4 mr-4">
                        <h5 class="card-header  text-center">Hedge Trimming</h5>
                        <img src="images/hedge.jpg" class="card-img-top" alt="trimmed hedges">
                        <div class="card-body">
                            <p class="card-text">A well maintained hedge has a full and neat appearance.  We offer a range of hedge trimming services to keep you hedges looking smart.</p>
                        </div>
                    </div>
                    <div class="card mt-4 ml-4 mr-4">
                        <h5 class="card-header  text-center">Weeding</h5>
                        <img src="images/rake.jpg" class="card-img-top" alt="weed removal">
                        <div class="card-body">
                            <p class="card-text">Whether it's weed matting, spraying or removal we can get rid of pesky weeds and prevent them from returning.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW1 -->

            <!-- ROW2 -->
            <div class="row">
                <div class="card-deck">
                    <div class="card m-4">
                        <h5 class="card-header  text-center">Gutter Cleaning</h5>
                        <img src="images/gutter.jpg" class="card-img-top" alt="cleaning gutter">
                        <div class="card-body">
                            <p class="card-text">Clogged gutters are unsightly and can cause water damage.  We can get your gutters clean and functioning to ensure water drains readily from your roof.</p>
                        </div>
                    </div>
                    <div class="card m-4">
                        <h5 class="card-header  text-center">Rubbish Removal</h5>
                        <img src="images/gardenwaste.jpg" class="card-img-top" id="rubbish-removal" alt="trimmed hedges">
                        <div class="card-body">
                            <p class="card-text">We remove all types of rubbish from compost and foliage to building materials and everything in between.</p>
                        </div>
                    </div>
                    <div class="card m-4">
                        <h5 class="card-header  text-center">Water Blasting</h5>
                        <img src="images/waterblasting.jpg" class="card-img-top" alt="waterblasting timer">
                        <div class="card-body">
                            <p class="card-text">Water blasting removes moss and mould leaving surfaces looking clean and new again.  We also provide soft washing services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
