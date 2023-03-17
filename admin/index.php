<?php
session_start();
if(isset($_SESSION['auth_user']))
{
    header("location:../index.php");
}
if(!isset($_SESSION['auth1'])){
    header("location:../login.php");
}
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Widget</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Statistics</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-calendar-1"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Appointment</p>
                                <h3 class="text-white">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-calendar-1"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Appointment</p>
                                <h3 class="text-white">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-calendar-1"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Appointment</p>
                                <h3 class="text-white">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-calendar-1"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Appointment</p>
                                <h3 class="text-white">76</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");

?>