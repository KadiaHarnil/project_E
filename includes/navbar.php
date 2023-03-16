<?php session_start(); ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <a class="navbar-brand" href="#">Web Zone</a>
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
                    <a class="nav-link text-black" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <?php if (!isset($_SESSION['auth'])): ?>
        <a class="btn btn-outline-primary" href="login.php" role="button">Login</a>
        <a class="btn btn-primary mx-2" href="registration.php" role="button">Sign-up</a>
        <!-- Example split primary button -->
    <?php else: ?>
        <div class="btn-group">
            <button type="button" class="btn btn-outline-primary">
                <?= $_SESSION['auth_user']; ?>
            </button>
            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                data-mdb-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Your Order</a></li>
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