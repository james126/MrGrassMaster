<?php 
    require_once('../private/initialize.php');
    $header_variables = array(null, "fixed-top", "nav-item active", "nav-item", "nav-item", "nav-item");
    include('../private/shared/header.php');
?>

<!-- Current page content -->
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One -->
            <div class="carousel-item active" id="first-image">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Mr Grass Master</h3>
                    <p>East Auckland garden maintenance specialists</p>
                </div>
            </div>
            <!-- Slide Two -->
            <div class="carousel-item" id="second-image">
                <div class="carousel-caption d-none d-md-block">
                    <h3>We're here to help</h3>
                    <p>get your outdoor areas looking great</p>
                </div>
            </div>
            <!-- Slide Three -->
            <div class="carousel-item" id="third-image">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Giving you more time</h3>
                    <p>to enjoy doing what you love most</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php include('../private/shared/header.php');?>
