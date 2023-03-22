<?php session_start(); 
if(isset($_SESSION['auth_id'])){
    $id= $_SESSION['auth_id'];
    echo $id;
}
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="background-color:white;">
    <div class="container">
        <img src="images\logo1.png" height="40px" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mx-2" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#about-section">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="productdetail.php">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Contact Us</a>
                </li>
            </ul>
            <a href="addtocart.php">
                <i class="fas fa-shopping-cart fa-lg"></i>
                <?php if (isset($_SESSION['cart'])) { ?>
                    <span class="badge rounded-pill badge-notification bg-danger">
                        <?= count($_SESSION['cart']); ?>
                    </span>
                <?php } ?>
            </a>
        </div>
    </div>
    <?php if (!isset($_SESSION['auth'])): ?>
        <a class="btn btn-outline-primary" href="login.php" role="button">Login</a>
        <a class="btn btn-primary mx-2" href="registration.php" role="button">Signup</a>
        <!-- Example split primary button -->
    <?php else: ?>
        <div class="btn-group">
            <button type="button" class="btn btn-outline-primary">
                <?php echo $_SESSION['auth_user'];?>
            </button>
            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                data-mdb-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="orderdetails.php">Your Order</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <!-- <form action="" method="post"> -->
                <li><a class="dropdown-item" role="button" name="btnlogout" href="logout.php">Logout</a></li>
                <!-- </form> -->
            </ul>
        </div>
    <?php endif; ?>
    <style>
        .btn:hover {
            background-color: #3b71ca;
            color: white;
        }
    </style>
</nav>