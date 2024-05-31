<?php
ob_start();
session_start();
include 'header.php';
include '../function.php';
include '../mail.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>superzonic</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">


        </div>
        <div class="humberger__menu__widget">

            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <!-- <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li> -->
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <!-- <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li class="active"><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->




    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container" style="border:solid; width:50%; height:50%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
            <?php
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    extract($_POST);
                    $first_name = dataClean($first_name);
                    $last_name = dataClean($last_name);
                    $address_line1 = dataClean($address_line1);
                    $address_line2 = dataClean($address_line2);
                    $address_line3 = dataClean($address_line3);

                    $message = array();
                    //Required validation-----------------------------------------------
                    if (empty($first_name)) {
                        $message['first_name'] = "The first name should not be blank...!";
                    }
                    if (empty($last_name)) {
                        $message['last_name'] = "The last name should not be blank...!";
                    }
                    if (!isset($gender)) {
                        $message['gender'] = "Gender is required";
                    }
                    if (empty($user_name)) {
                        $message['user_name'] = "User Name is required";
                    }
                    if (empty($password)) {
                        $message['password'] = "Password is required";
                    }


                    //Advance validation------------------------------------------------
                    if (ctype_alpha(str_replace(' ', '', $first_name)) === false) {
                        $message['first_name'] = "Only letters and white space allowed";
                    }
                    if (ctype_alpha(str_replace(' ', '', $last_name)) === false) {
                        $message['last_name'] = "Only letters and white space allowed";
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $message['email'] = "Invalid Email Address...!";
                    } else {
                        $db = dbConn();
                        $sql = "SELECT * FROM customers WHERE Email='$email'";
                        $result = $db->query($sql);

                        if ($result->num_rows > 0) {
                            $message['email'] = "This Email address already exist...!";
                        }
                    }
                    
                    if(!empty($user_name)){
                        $db = dbConn();
                        $sql = "SELECT * FROM users WHERE UserName='$user_name'";
                        $result = $db->query($sql);

                        if ($result->num_rows > 0) {
                            $message['user_name'] = "This User Name already exist...!";
                        }
                    }
                    
                    if(!empty($password)){
                        if(strlen($password)<8){
                            $message['password']="The password should be 8 characters more";
                        }
                    }

                    if (empty($message)) {
                        //Use bcrypt hasing algorithem
                        $pw= password_hash($password,PASSWORD_DEFAULT);
                        $db = dbConn();
                        $sql = "INSERT INTO `users`(`UserName`,`Password`,`FirstName`,`LastName`,`UserType`,`status`) VALUES ('$user_name','$pw','$first_name','$last_name','customer','1')";
                        $db->query($sql);

                        $user_id = $db->insert_id;
                        
                        $reg_number=date('Y').date('m').date('d').$user_id;
                        $_SESSION['RNO']=$reg_number;
                        $sql = "INSERT INTO `customers`(`FirstName`, `LastName`, `Email`, `AddressLine1`, `AddressLine2`, `AddressLine3`, `TelNo`, `MobileNo`, `Gender`, `DistrictId`,`RegNo`,`UserId`) VALUES ('$first_name','$last_name','$email','$address_line1','$address_line2','$address_line3','$telno','$mobile_no','$gender','$district','$reg_number','$user_id')";
                        $db->query($sql);
                        $msg="<h1>SUCCESS</h1>";
                        $msg.="<h2>Congratulations</h2>";
                        $msg.="<p>Your account has been successfully created</p>";
                        $msg="<a href='http://localhost/SIRMS/verify.php'>Click here to verify your account</a>";
                        sendEmail($email,$first_name,"Account Verification",$msg);
                        
                        header("Location:register_success.php");
                        
                    }
                }
                  ?>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" role="form"
                class="php-email-form" novalidate>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="form-control border border-1 border-dark "
                            id="first_name" value="<?= @$first_name ?>" placeholder="First Name" required>
                        <span class="text-danger"><?= @$message['first_name'] ?></span>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control border border-1 border-dark" name="last_name"
                            id="last_name" placeholder="Last Name" required>
                        <span class="text-danger"><?= @$message['last_name'] ?></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control border border-1 border-dark" name="email" id="email"
                            placeholder="Email" required>
                        <span class="text-danger"><?= @$message['email'] ?></span>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="telno">Tel. No.(Home)</label>
                        <input type="text" class="form-control border border-1 border-dark" name="telno" id="telno"
                            placeholder="Tel. No." required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="address_line1">Address Line 1</label>
                        <input type="text" class="form-control border border-1 border-dark" name="address_line1"
                            id="address_line1" placeholder="Address Line 1" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="telno">Mobile No.</label>
                        <input type="text" class="form-control border border-1 border-dark" name="mobile_no"
                            id="mobile_no" placeholder="Mobile No" required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="address_line2">Address Line 2</label>
                        <input type="text" class="form-control border border-1 border-dark" name="address_line2"
                            id="address_line2" placeholder="Address Line 2" required>
                    </div>
                    <div class="col-lg-6 col-md-6">

                        <label>Select Gender</label>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="radio" name="gender" id="male"
                                value="male">
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark" type="radio" name="gender" id="female"
                                value="female">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="text-danger mt-4"><?= @$message['gender'] ?></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="address_line3">City</label>
                        <input type="text" class="form-control border border-1 border-dark" name="address_line3"
                            id="address_line3" placeholder="city" required>
                    </div>
                    <div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <?php
                              $db= dbConn ();
                              $sql= "SELECT * FROM districts";
                              $result=$db->query($sql);
                              ?>
                        <label for="telno">District</label>
                        <select name="district" id="district"
                            class="form-select form-select-lg mb-3 border border-1 border-dark"
                            aria-label="Large select example">
                            <option value="">--</option>
                            <?php
                                 while ($row= $result->fetch_assoc()){
                                  
                                 ?>
                            <option value="<?= $row['Id'] ?>"><?= $row['Name'] ?></option>
                            <?php
                                 }
                                
                                ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control border border-1 border-dark" name="user_name"
                            id="user_name" placeholder="Username" required>
                        <span class="text-danger"><?= @$message['user_name'] ?></span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control border border-1 border-dark" name="password"
                            id="password" placeholder="Password" required>
                        <span class="text-danger"><?= @$message['password'] ?></span>

                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control border border-1 border-dark" name="password"
                            id="password" placeholder="Confirm Password" required>
                        <span class="text-danger"><?= @$message['password'] ?></span>

                    </div> -->
                </div>

                <div class="row justify-content-center">
                    <button type="submit" style="border:solid; width:50%; height:50%; align:center" class="btn btn-dark"
                        width="50">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <!-- Contact Form End -->


    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+01-3-8888-6868</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>60-49 Road 11378 New York</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>hello@colorlib.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <?php
include 'footer.php';
ob_end_flush();
?>