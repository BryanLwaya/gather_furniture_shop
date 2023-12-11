<div class="navigation">
    <div class="logo">
        <h1>Gather</h1>
        <!-- <img src="./Images/gather logo.png"> -->
    </div>
    <nav>
        <ul id="MenuItems">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./products_page.php">Products</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>

    </nav>
    <ul class="account">
        <?php
        if (isset($_SESSION['Customer_ID'])) {
            echo '<a id="user-profile"><img src="' . $_SESSION['Cust_img'] . '"><br>' . $_SESSION['Cust_fname'] . '</a>';
        } else {
            echo '
            <a href="registration.php" id="reg-btn">Sign Up</a>
            <li><a href="./login.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Login</a></li>';
        }

        ?>

        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
        <li><img src="./Icons/menu-svgrepo-com.svg" class="menu-icon" onclick="menutoggle()"></li>

        <?php
        if (isset($_SESSION['Customer_ID'])) {
            echo '
        <a href="./logout.php" id="head-btn"><i class="fa fa-sign-out" aria-hidden="true"></i><br>Logout</a>';
        }
        ?>
    </ul>

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</div>