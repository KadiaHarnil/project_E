<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>jQuery picZoomer Plugin Demo</title>
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
                                            <img src="images/bags1.png" height="320" width="320" alt="">
                                        </div>

                                        <ul class="piclist mx-5">
                                            <li><img src="images/bags1.png" alt=""></li>
                                            <li><img src="images/1.jpg" alt=""></li>
                                            <li><img src="images/2.jpg" alt=""></li>
                                            <li><img src="images/3.jpg" alt=""></li>
                                            <!-- <li><img src="images/4.jpg" alt=""></li>
                                            <li><img src="images/5.jpg" alt=""></li>
                                            <li><img src="images/6.jpg" alt=""></li>
                                            <li><img src="images/7.jpg" alt=""></li>
                                            <li><img src="images/8.jpg" alt=""></li> -->
                                        </ul>

                                    </div>
                                    <div class="col-md-6 col-xl-4 ">

                                        <h2 class="fw-bold">Sambar Pouches</h2>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, saepe esse
                                        exercitationem temporibus tempora perferendis a ducimus assumenda, optio nam
                                        nulla, fugit vero minima reiciendis libero id ipsam quasi pariatur!


                                        <hr>
                                        <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old"></span>
                                            <span class="pro-price">Rs:200/-</span>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-2">
                                            <label>Quantity</label>
                                            <input type="quantiy" placeholder="1" class="form-control quantity">
                                        </div>
                                        <hr>
                                        <p>
                                            <button class="btn btn-round btn-outline-primary" type="button"><i
                                                    class="fa fa-shopping-cart"></i>Buy Now</button>

                                            <button class="btn btn-round btn-outline-primary" type="button"><i
                                                    class="fa fa-shopping-cart"></i> Add to Cart</button>
                                        </p>
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