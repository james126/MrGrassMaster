<?php require_once('../private/initialize.php'); ?>

<?php $header_variables = array("<body class='d-flex flex-column h-100'>", "sticky-top", "nav-item", "nav-item", "nav-item", "nav-item active"); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<!-- Page content -->
<!-- outer jumbotron -->
<div class="container d-inline-flex flex-column">
    <div class="jumbotron contact-outer-jumbotron"  id="outer-jumbotron">
        <div class="container">
            <h1 class="text-center" id="main-title">Contact Mr Grass Master</h1>
            <hr class="my-4">

            <!-- forms -->
            <!-- 'novalidate' disables browser validate check (bootstrap to validate)
                  action = where form data is submitted
                  method = post data to web server -->
            <form action="<?php echo url_for('public/submitted.php'); ?>" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>First name</label>
                            <input type="text" class="form-control" name="first_name" value="" maxlength="30" required> <!-- only required if it's not empty -->
                            <div class="invalid-feedback">please enter first name</div>
                        </div>
                        <div class="col-lg-6">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="last_name" value="" maxlength="30">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Email</label>
                            <input type="email" class="form-control"  name="email" value="" maxlength="40" required>
                            <div class="invalid-feedback">please enter email</div>
                        </div>
                        <div class="col-lg-6">
                            <label>Phone</label>
                            <input type="tel" class="form-control" name="phone" value="" maxlength="30">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address_line1" value="" maxlength="60" required>
                            <small class="form-text text-muted">number and street</small>
                            <div class="invalid-feedback">please enter name and street</div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="address_line2" value="" maxlength="30" required>
                            <small class="form-text text-muted">suburb</small>
                            <div class="invalid-feedback">please enter suburb</div>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Auckland" disabled>
                            <small class="form-text text-muted">city</small>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="5" type="text" name="message" value="" maxlength="400" required></textarea>
                    <div class="invalid-feedback">
                        please enter a message
                    </div>
                </div>

                <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg" role="button" style="margin-top: 0.5rem;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
