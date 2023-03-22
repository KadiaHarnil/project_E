<?php
session_start();
if (isset($_SESSION['auth_user'])) {
    header("location:../index.php");
}
if (!isset($_SESSION['auth1'])) {
    header("location:../alogin.php");
}
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("config/dbcon.php");
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
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Total Order</h4>
                            </div>
                            <div class="card-body">
                                <div id="smil-animations" class="ct-chart ct-golden-section chartlist-chart"></div>
                                <?php

                                $dataPoints = array(
                                    array("y" => 3373.64, "label" => "Germany"),
                                    array("y" => 2435.94, "label" => "France"),
                                    array("y" => 1842.55, "label" => "China"),
                                    array("y" => 1828.55, "label" => "Russia"),
                                    array("y" => 1039.99, "label" => "Switzerland"),
                                    array("y" => 765.215, "label" => "Japan"),
                                    array("y" => 612.453, "label" => "Netherlands")
                                );
                                $count=0;
                                $test=array();
                                $qry="select * from order_item";
                                $result=$con->query($qry);
                                while($row=$result->fetch_assoc())
                                {
                                    $test[$count]['label']=$row['item_name'];
                                    $test[$count]['y']=$row['order_id'];
                                    $count=$count+1;
                                }
                                ?>
                                <!DOCTYPE HTML>
                                <html>

                                <head>
                                    <script>
                                        window.onload = function () {

                                            var chart = new CanvasJS.Chart("chartContainer", {
                                                animationEnabled: true,
                                                theme: "light2",
                                                title: {
                                                    text: "Total Order"
                                                },
                                                axisY: {
                                                    title: "Gold Reserves (in tonnes)"
                                                },
                                                data: [{
                                                    type: "column",
                                                    yValueFormatString: "#,##0.## Order ID",
                                                    dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
                                                }]
                                            });
                                            chart.render();

                                        }
                                    </script>
                                </head>

                                <body>
                                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                </body>

                                </html>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
// include("includes/footer.php");
include("includes/scripts.php");

?>