<?php 
    require_once('../private/initialize.php');
    $header_variables = array("<body class='d-flex flex-column h-100'>", "sticky-top", "nav-item", "nav-item", "nav-item", "nav-item active");
    include('../private/shared/header.php');
?>

<?php
    //ensures that user can't directly go to details.php without submitting form on contact.php
    if(is_post_request()){
        //values sent by contact.php
        $first_name = 'First name: ' . $_POST['first_name'];
        $last_name = 'Last name: ' . $_POST['last_name'];
        $email = 'Email: ' . $_POST['email'];
        $phone = 'Phone: ' . $_POST['phone'];
        $address_line1 = 'Number and street: ' . $_POST['address_line1'];
        $address_line2 = 'Suburb: ' . $_POST['address_line2'];
        $message = 'Message: ' . wordwrap($_POST['message'], 50, "\r\n");

        ($last_name=='Last name: ') ? $last_name='Last name: n/a' : null;
        ($phone=='Phone: ') ? $phone='Phone: n/a' : null;

        //email
        $to = 'scoobydoo_126@hotmail.com';
        $subject = 'New contact form submission';
        $email_message = $first_name . "\r\n" . $last_name . "\r\n" . $email  . "\r\n" .  $phone  . "\r\n" .
        $address_line1 . "\r\n" . $address_line2 . "\r\n" . $message;

        //test email functionality
        function custom_error($errno, $errstr, $errfile, $errline){
            //echo "<b>Error submitting form</b><br>";
            //echo "Custom error: [$errno] $errstr<br>";
            //echo "Error on line $errline in $errfile<br><br>";
        }

        set_error_handler("custom_error", E_ALL);
        $email_submitted = mail($to, $subject, $email_message);
        restore_error_handler();
    } else {
        redirect_to('contact.php'); //prevents user from loading page without being redirected from contact.php
    }
?>

<?php
    (($_POST['last_name']) == "") ? $last_name='n/a' : $last_name = ($_POST['last_name']);

    (($_POST['phone']) == "") ? $phone='n/a' : $phone = ($_POST['phone']);
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
