<?php
include("../admin/config/dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Product</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-picZoomer.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <style type="text/css">
        html {
            background-color: #7891bc;
        }

        body {
            margin: 0 auto;
        }

        .piclist {
            margin-top: 30px;
        }

        .piclist li {
            display: inline-block;
            width: 50px;
            height: 50px;
        }

        .piclist li img {
            width: 100%;
            height: auto;
        }

        /* custom style */
        .picZoomer-pic-wp,
        .picZoomer-zoom-wp {
            border: 1px solid #fff;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="src/jquery.picZoomer.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.picZoomer').picZoomer();


            //切换图片
            $('.piclist li').on('click', function (event) {
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src', $pic.attr('src'));
            });
        });
    </script>
</head>
<?php
$id = $_GET['id'];
$qry = "SELECT * FROM `image` WHERE pid='$id'";
$qry1 = "select * from product where pid='$id'";
$result = $con->query($qry);
$result1 = $con->query($qry1);
?>

<body>
    <section class="intro">
        <div class="mask d-flex align-items-center h-100 gradient-custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-6 col-xl-7">

                                        <div class="text-center" style="padding-right: 24px;">
                                            <i class="fas fa-laptop" style="color: #D6D6D6;"></i>
                                        </div>

                                        <div class="picZoomer mx-5">
                                            <?php while ($row = $result1->fetch_assoc()) {
                                                $img1 = "../images/" . $row['pimg'];
                                                ?>
                                                <img src="<?= $img1; ?>" height="320" width="320" alt="">
                                            </div>
                                            <ul class="piclist mx-5">

                                                <li><img src="<?= $img1; ?>" height="320" width="320" alt=""></li>
                                            <?php }
                                            ?>

                                            <?php while ($row = $result->fetch_assoc()) {
                                                $img = "../images/" . $row['iname'];
                                                ?>
                                                <li><img src="<?= $img; ?>" alt=""></li>
                                            <?php }
                                            ?>
                                        </ul>

                                    </div>
                                    <div class="col-md-6 col-xl-4 ">
                                        <?php
                                        $qry2 = "select * from product where pid='$id'";
                                        $result2 = $con->query($qry2);
                                        while ($row2 = $result2->fetch_assoc()) { ?>

                                            <h2 class="fw-bold">
                                                <?= $row2['pname']; ?>
                                            </h2>
                                            <?= $row2['pdetails']; ?>

                                            <hr>
                                            <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old"></span>
                                                <span class="pro-price">
                                                    <?= $row2['pprice']; ?>
                                                </span>
                                            </div>
                                            <hr>
                                            <form action="../cart.php" method="post">
                                                <input type="hidden" name="txtid" value="<?= $row2['pid']; ?>">
                                                <input type="hidden" name="txtname" value="<?= $row2['pname']; ?>">
                                                <input type="hidden" name="txtprice" value="<?= $row2['pprice']; ?>">
                                                <input type="hidden" name="txtimg" value="<?= $row2['pimg']; ?>">
                                                <label>Quantity</label>
                                                <input type="quantiy" class="form-control quantity" value="1" name="txtqty">
                                                <button class="btn btn-round btn-outline-primary mt-3" name="addtocart"
                                                    type="submit"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                            </form>
                                        <?php }
                                        ; ?>





                                        <style>
                                            .btn:hover {
                                                background-color: #3b71ca;
                                                color: white;
                                            }
                                        </style>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</html>