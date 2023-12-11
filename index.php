<?php
require("connect.php");
if(!isset($_SESSION))
{
    session_start();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gather | The Shop of Choice</title>
    <link rel="stylesheet" href="./Css_files/style.css">
    <link rel="stylesheet" href="./Css_files/main-header.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"> -->
    
</head>

<body>

    <div class="header">
        <main>
            <?php 
                include("./main-header.php");
            ?>

            <div class="headline">
                <div class="content">
                    <h1>Make Your Dream Home</h1>
                    <p>We provide beautiful designs and great quality furniture to style your home<br>
                        Order now, from our extensive collection and get ready to design the perfect Home.
                    </p>
                    <a href="#" class="btn_1">Shop Now ➜</a>
                </div>
            </div>

        </main>
    </div>

    <!-- Features -->

    <div class="featured">
        <div class="mini-container">
            <div class="row">
                <div class="col-3">
                    <div class="feat-item">
                        <img src="./Icons/stairs-svgrepo-com.svg" width="50px" height="50px">
                        <h3>Interior Decor</h3>
                    </div>

                    <p>Try Out our material</p>
                    <p>Try Out our material</p>
                    <p>Try Out our material</p>

                </div>
                <div class="col-3">
                    <div class="feat-item">
                        <img src="./Icons/vase-svgrepo-com.svg" width="50px" height="50px">
                        <h3>Furniture</h3>
                    </div>
                    <p>Try Out our material</p>
                    <p>Try Out our material</p>
                    <p>Try Out our material</p>
                </div>
                <div class="col-3">
                    <div class="feat-item">
                        <img src="./Icons/lamp-svgrepo-com.svg" width="50px" height="50px">
                        <h3>Lighting</h3>
                    </div>
                    <p>Try Out our material</p>
                    <p>Try Out our material</p>
                    <p>Try Out our material</p>
                </div>

            </div>
        </div>

        <h2 class="title">Featured Products</h2>
    </div>

    <!-- Featured Products -->
    <div class="ft-products">
        <div class="mini-container">
            <div class="row">
                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 1</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <p>Ksh. 5000.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 2</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <p>Ksh. 5000.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 3</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>Ksh. 5000.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 4</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>Ksh. 5000.00</p>
                </div>

            </div>
        </div>

        <!-- ----------- OFFERS ------------- -->

        <h2 class="title" id="offers">Offers</h2>
        <div class="mini-container">
            <div class="row">
                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 1</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4300.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 2</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4300.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 3</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4700.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 4</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4300.00</p>
                </div>

            </div>
        </div>

        <div class="mini-container">
            <div class="row">
                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 5</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4300.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 6</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4100.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 7</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4000.00</p>
                </div>

                <div class="col-4">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                    <h4>Product 8</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p><del>Ksh. 5000.00</del> Ksh. 4300.00</p>
                </div>

            </div>
        </div>
    </div>

    <!-- ------------ EXCLUSIVE --------------- -->
    <div class="exclusive">
        <div class="mini-container">
            <div class="row">
                <div class="col-2">
                    <img src="./Images/amazon-rivet-furniture-1533048038.jpg" alt="">
                </div>
                <div class="col-2">
                    <h6>Today's Special</h6>
                    <h2>Luxury Couches</h2>
                    <p>See our AMAZING sofas in a range of high end designer finishes and materials. Our designs range from eye catching sculptural to the sumptuous and luxurious.</p>
                    <a href="#" class="btn_1">Shop More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------- TESTIMONIALS --------------- -->
    <div class="testimonial">
        <h2 class="title">Testimonials</h2>
        <div class="mini-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quis animi quae eius quos alias
                        ut temporibus, excepturi aperiam minima unde eaque magnam earum quod repellat! Magni nisi
                        aspernatur ipsum?</p>

                    <img src="./User_images/person (1).jpg">
                    <h3>User 1</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quis animi quae eius quos alias
                        ut temporibus, excepturi aperiam minima unde eaque magnam earum quod repellat! Magni nisi
                        aspernatur ipsum?</p>

                    <img src="./User_images/person (2).jpg">
                    <h3>User 2</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quis animi quae eius quos alias
                        ut temporibus, excepturi aperiam minima unde eaque magnam earum quod repellat! Magni nisi
                        aspernatur ipsum?</p>

                    <img src="./User_images/person (3).jpg">
                    <h3>User 3</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------- Brands --------------- -->

    <div class="brands">
        <h2>Our Partners</h2>
        <div class="mini-container">
            <div class="row">                
                    <img src="./Images/brands.png">                
            </div>
        </div>
    </div>

    <!-- --------------- Footer ------------- -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col1">
                    <h2>Get In Touch</h2>
                    <h6>WE CAN ENSURE RELIABILITY,<br>
                        LOW COST PRODUCTS,<br>
                        AND MOST IMPORTANT,<br>
                        COMFORT
                    </h6>
                    <p>Reach out to us on Social Media</p>
                    <ul>
                        <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                        <li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                    </ul>
                </div>

                <div class="footer-col2">
                    <h3>Call us</h3>
                    <p>+254 783 697123</p>
                    <p>+254 783 697123</p>
                    <br>

                    <h3>Email</h3>
                    <p>gather@info.org</p>
                    
                    
                </div>

                <div class="footer-col3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Home</li>
                        <li>Products</li>
                        <li>About</li>
                        <li>Contact us</li>
                        <li>Privacy Policy</li>
                    </ul><br>&nbsp;
                    
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        &copy; Gather Works Ltd, All Rights Reserved, 2022
    </div>
</body>

</html>