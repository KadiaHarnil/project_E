<?php
session_start();

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
                                        <i class="fas fa-laptop" style="color: #D6D6D6;"></i>
                                    </div>

                                </div>

                                <div class="col-md-6 col-xl-4 text-center">
                                    

                                    <h2 class="fw-bold mb-4 pb-2">Admin Login</h2>
                                    <form action="logincode.php" method="post">
                                        <div class="form-outline mb-3">
                                            <input type="text" id="typeEmail" name="txtemail" class="form-control form-control-lg" />
                                            <label class="form-label" for="typeEmail">UserName</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="typePassword" name="txtpass"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="typePassword">Password</label>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-info btn-block btn-lg" type="submit" name="btnlogin">Login</button>
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