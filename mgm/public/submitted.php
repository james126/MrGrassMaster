<?php
    require_once('../private/initialize.php');
    $header_variables = array("<body class='d-flex flex-column h-100'>", "sticky-top", "nav-item", "nav-item", "nav-item", "nav-item active");
    include('../private/shared/header.php');
?>

<?php
    //ensures that user can't directly go to details.php without submitting form on contact.php
    if(is_post_request()){
        //values sent by contact.php
        (($_POST['last_name']) == "") ? $last_name='n/a' : $last_name = ($_POST['last_name']);
        (($_POST['phone']) == "") ? $phone='n/a' : $phone = ($_POST['phone']);

        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $address_line1 = $_POST['address_line1'];
        $address_line2 = $_POST['address_line2'];
        $message = $_POST['message'];

        $connection = pg_connect(getenv("DATABASE_URL"));

        $query = "INSERT INTO messages (first_name, last_name, email, phone, address_line1, address_line2, message) "
            . "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$address_line1}', '{$address_line2}', '{$message}');";

        $result = pg_query($connection, $query);
    } else {
        redirect_to('contact.php'); //prevents user from loading page without being redirected from contact.php
    }
?>

<div class="container d-inline-flex flex-column">
    <div class="jumbotron about-outer-jumbotron"  id="outer-jumbotron">
        <div class="container">
            <h1 class="text-center" id="main-title">Contact Mr Grass Master</h1>
            <hr class="my-4">
            <p class="text-center lead submitted-text">Thanks, we will be in touch shortly!<br></p>

            <form novalidate>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="<?php echo $_POST['first_name']; ?>" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="<?php echo $last_name ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Email</label>
                            <input type="email" class="form-control"  placeholder="<?php echo $_POST['email']; ?>" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label>Phone</label>
                            <input type="tel" class="form-control" placeholder="<?php echo $phone ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="<?php echo $_POST['address_line1']; ?>" disabled>
                            <small class="form-text text-muted">number and street</small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="<?php echo $_POST['address_line2']; ?>" disabled>
                            <small class="form-text text-muted">suburb</small>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Auckland" disabled>
                            <small class="form-text text-muted">city</small>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="5" type="text"  placeholder="<?php echo $_POST['message']; ?>" disabled></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../private/shared/header.php');?>
