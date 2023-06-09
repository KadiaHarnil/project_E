<?php
session_start();
if (isset($_SESSION['auth'])) {
    header('location:index.php');
}

include("includes/header.php");
?>
<section class="intro">
    <div class="mask d-flex align-items-center h-100 gradient-custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="card">
                        <div class="card-body p-5">

                            <div class="row d-flex align-items-center">
                                <div class="col-md-6 col-xl-7">

                                    <div class="text-center pt-md-5 pb-5 my-md-5" style="padding-right: 24px;">
                                        <img src="images/future-water-low-resolution-color-logo.png" alt="alert"
                                            height="400px">
                                    </div>

                                </div>

                                <div class="col-md-6 col-xl-4 text-center">

                                    <h2 class="fw-bold mb-4 pb-2">Login</h2>
                                    <form action="logincode.php" method="post">
                                        <div class="form-outline mb-3">
                                            <input type="email" id="typeEmail" name="txtemail"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="typeEmail">Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="typePassword" name="txtpass"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="typePassword">Password</label>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-info btn-block btn-lg" type="submit"
                                                name="btnlogin">Login</button>
                                            <p class="small mt-3 mb-4 text-muted">Forgot <span class="fw-bold"><a
                                                        href="#!" class="text-muted">Username</a> / <a href=""
                                                        class="text-muted">Password</a>?</span></p>
                                            <a href="registration.php" class="link-info">Create your Account <i
                                                    class="fas fa-long-arrow-alt-right"></i></a><br>
                                            <a href="alogin.php" class="link-info">Login As Admin <i
                                                    class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("includes/scripts.php");
?>