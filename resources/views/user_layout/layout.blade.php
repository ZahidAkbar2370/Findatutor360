<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="user_layout/css/fontawesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="user_layout/css/app.css">

</head>

<body>
    <!-- Header -->
    <header class="header">
        <!-- Logo -->
        <div class="header--logo">
            <a href="home" title="Find Tutor 360"> <img src="user_layout/images/logo.png" alt="Find Tutor 360"> </a>
        </div>

        <div class="header--navbar-sm">
            <button class="btn btn-primary">Join For Free</button>
            <button class="btn btn-collapse"> <i class="fal fa-bars"></i> </button>
        </div>
        <!-- Header Navbar -->
        <div class="header--inner">
            <nav class="header--navbar">
                <ul>
                    <li class="nav-item"> <a href="home" class="nav-link active">Home</a></li>
                    <li class="nav-item"> <a href="student" class="nav-link">Student</a></li>
                    <li class="nav-item"> <a href="tutor" class="nav-link">Tutor</a></li>
                    <li class="nav-item"> <a href="institution" class="nav-link">Institution</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bookstore
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="buy-book" class="nav-link">Buy Books</a>
                            <a href="sell-book" class="nav-link">Sell Books</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- Header Right -->
            <div class="header--right">
                <ul>
                    <li><a href="#"> Help? </a></li>
                    <li><a href="login"> Sign In </a></li>
                </ul>
                <a href="register"><button class="btn btn-primary">Join For Free</button></a>
            </div>
        </div>
    </header>


        @yield('user_layout')

            <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer--card">
                        <h3>Let's have fun here</h3>
                        <div class="contact_info">
                            <ul>
                                <li><a href="tel:123456789"> <i class="fas fa-phone"></i> (00) 123 456 789</a></li>
                                <li><a href="mailto:hello@mail.com"> <i class="fas fa-envelope"></i>
                                        hello@findatutor360.com</a></li>
                            </ul>
                        </div>
                        <div class="social_icons">
                            <ul>
                                <li><a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a></li>
                                <li><a href="#" class="twitter"> <i class="fab fa-twitter"></i> </a></li>
                                <li><a href="#" class="instagram"> <i class="fab fa-instagram"></i> </a></li>
                                <li><a href="#" class="linkedin"> <i class="fab fa-linkedin-in"></i> </a></li>
                                <li><a href="#" class="youtube"> <i class="fab fa-youtube"></i> </a></li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="footer--card">
                                <h3>About Us</h3>
                                <ul>
                                    <li><a href="#">Our Team </a></li>
                                    <li><a href="#">Careers </a></li>
                                    <li><a href="#">Partners </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="footer--card">
                                <h3>Customer Service </h3>
                                <ul>
                                    <li><a href="#"> FAQ's </a></li>
                                    <li><a href="#"> How it works </a></li>
                                    <li><a href="#"> Contact info </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="footer--card">
                                <h3>Our Terms </h3>
                                <ul>
                                    <li><a href="#">Cookie Policy </a></li>
                                    <li><a href="#">Privacy Policy </a></li>
                                    <li><a href="#">Review Policy </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-6">
                            <div class="footer--payment">
                                <h3>We Accept</h3>
                                <div class="payments">
                                    <div class="payments--card">
                                        <img src="user_layout/images/credit-card.png" alt="credit-card">
                                        <h4>Debit Card</h4>
                                    </div>
                                    <div class="payments--card">
                                        <img src="user_layout/images/bank.png" alt="transfer">
                                        <h4>Bank Transfer</h4>
                                    </div>

                                    <div class="payments--card">
                                        <img src="user_layout/images/mobile-payment.png" alt="MTN-Mobile">
                                        <h4>Mobile Money</h4>
                                    </div>
                                </div>

                                <h3>Courier Partner</h3>
                                <div class="courier">
                                    <img src="user_layout/images/courier.png" alt="courier">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>


    </footer>
    <div class="footer--copyright">
        <p>Copyright © 2020 - Developed By Peges Inc </p>
    </div>





    <!-- jQuery Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="user_layout/js/plugins.js"></script>
    <script src="user_layout/js/script.js"></script>
</body>

</html>