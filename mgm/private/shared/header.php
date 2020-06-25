
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/lawnmower.png">
    <title>Mr Grass Master</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrapjquery.js" defer></script>
    <script src="js/popper.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/javascript.js" defer></script>
</head>
<?php echo $header_variables[0]; ?> <!-- includes body tag for all pages except index.html -->

<!-- Navbar fixed collapsable -->
<header>
    <nav class="navbar <?php echo $header_variables[1]; ?> navbar-expand-md navbar-dark fixed-top bg-dark">
        <span class="navbar-brand">
            <img src="images/man.png" width="35" class="d-inline-block align-top" alt="">
            MGM
        </span>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="<?php echo $header_variables[2]; ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="<?php echo $header_variables[3]; ?>">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="<?php echo$header_variables[4]; ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="<?php echo $header_variables[5]; ?>">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>