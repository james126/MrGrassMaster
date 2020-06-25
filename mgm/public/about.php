<?php 
    require_once('../private/initialize.php'); 
    $header_variables = array("<body class='d-flex flex-column h-100'>", "sticky-top", "nav-item", "nav-item", "nav-item active", "nav-item"); 
    include('../private/shared/header.php');
?>

<!-- Page content -->
<!-- outer jumbotron -->
<div class="container d-inline-flex flex-column">
    <div class="jumbotron about-outer-jumbotron"  id="outer-jumbotron">
        <div class="container">
            <h1 class="text-center" id="main-title">About Mr Grass Master </h1>            
            <p class="text-center lead">Delivering high quality services at a competitive price</p>
            <hr class="my-4">
            <img src="images/guarantee.png" id="guarantee-image" alt="customer guarantee">
            <p class="text-justify">
                We service all suburbs in and around south east Auckland. We're so confident you'll be happy with our services that all work done comes with a
                100% customer satisfaction guarantee. For regular services if you have a current price we can probably beat it!<br>
            </p>
        </div>

        <!-- testimonials -->
        <div class="jumbotron d-flex justify-content-center" id="testimonial-container">
            <div class="d-inline-flex">
                <img src="images/quote1.png" alt="opening quote icon" class="d-flex align-self-start img-fluid" id="opening-quote-icon">
            </div>
            <div class="d-inline-flex">
                <div class="d-inline-flex flex-column" id="testimonial-text">
                    <p class="lead d-flex align-self-center">Aston and Mark did an great job cleaning up my overgrown lawn which hadn't been mowed for months.</p>
                    <p class="d-flex align-self-left">Billy Brown - Dannemora, Auckland</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../private/shared/footer.php');?>

