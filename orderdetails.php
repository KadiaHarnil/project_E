<?php
<<<<<<< HEAD
include("includes/header.php");
?>
<div class="container-fluid my-5 d-flex justify-content-center">
    <div class="card card-1">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <div class="col my-auto">
                    <h4 class="mb-0 text-center">Thanks for your Order,<span class="change-color">Anjali</span> !</h4>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-auto">
                    <h6 class="color-1 mb-0 change-color">Receipt</h6>
                </div>
                <div class="col-auto "> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-2">
                        <div class="card-body">
                            <div class="media">
                                <div class="sq align-self-center "> <img
                                        class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0"
                                        src="https://i.imgur.com/RJOW4BL.jpg" width="135" height="135" /> </div>
                                <div class="media-body my-auto text-right">
                                    <div class="row my-auto flex-column flex-md-row">
                                        <div class="col my-auto">
                                            <h6 class="mb-0"> Jack Jacs</h6>
                                        </div>
                                        <div class="col-auto my-auto"> <small>Golden Rim </small></div>
                                        <div class="col-auto my-auto"> <small>Golden Rim </small></div>
                                        <div class="col my-auto"> <small>Size : M</small></div>
                                        <div class="col my-auto"> <small>Qty : 1</small></div>
                                        <div class="col my-auto">
                                            <h6 class="mb-0">&#8377;3,600.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3 ">
                            <div class="row">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="card card-2">
                    <div class="card-body">
                        <div class="media">
                            <div class="sq align-self-center "> <img
                                    class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0"
                                    src="https://i.imgur.com/fUWWpRS.jpg" width="135" height="135" /> </div>
                            <div class="media-body my-auto text-right">
                                <div class="row my-auto flex-column flex-md-row">
                                    <div class="col-auto my-auto ">
                                        <h6 class="mb-0"> Michel Mark</h6>
                                    </div>
                                    <div class="col my-auto "> <small>Black Rim </small></div>
                                    <div class="col my-auto "> <small>Size : L</small></div>
                                    <div class="col my-auto "> <small>Qty : 1</small></div>
                                    <div class="col my-auto ">
                                        <h6 class="mb-0">&#8377;1,235.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-3 ">
                        <div class="row ">
                            <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh"
                                            aria-hidden="true"></i></span></small> </div>
                            <div class="col mt-auto">
                                <div class="progress">
                                    <div class="progress-bar progress-bar rounded" style="width: 18%" role="progressbar"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="media row justify-content-between ">
                                    <div class="col-auto text-right"><span> <small class="text-right mr-sm-2"></small>
                                            <i class="fa fa-circle active"></i> </span></div>
                                    <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for
                                                delivary</small><i class="fa fa-circle"></i></span></div>
                                    <div class="col-auto flex-col-auto">
                                        <smallclass="text-right mr-sm-2">Delivered</small><span> <i
                                                    class="fa fa-circle"></i></span>
                                    </div>
=======

include("includes/header.php");
include("includes/navbar.php");
include("admin/config/dbcon.php");
$uname = $_SESSION['auth_user'];
$qry = "SELECT pimage,item_name,price,qty,order_at FROM `orders`,`order_item` WHERE orders.order_id=order_item.order_id AND user_name='$uname'";
$result = $con->query($qry);
?>
<div class="container my-5 d-flex justify-content-center">
    <div class="card card-1">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <?php if (isset($_SESSION['cart'])): ?>
                    <div class="col my-auto">
                        <h4 class="mb-0 text-center">Thanks for your Order,<span class="change-color">
                                <?= $uname; ?>
                            </span> !</h4>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-between mb-3">
                    <div class="col-auto">
                        <h4 class="color-1 mb-0 change-color">Your Order</h4>
                    </div>
                <?php else: ?>
                    <h6>Looks Like You Have Not Order yet.... </h6>
                <?php endif; ?>
            </div>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="row">
                    <div class="col">
                        <div class="card card-2">
                            <div class="card-body">
                                <div class="media">
                                    <div class="sq align-self-center "> <img
                                            class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0"
                                            src="<?= 'images/' . $row['pimage']; ?>" width="135" height="135" /> </div>
                                    <div class="media-body my-auto text-right">
                                        <div class="row my-auto flex-column flex-md-row">
                                            <div class="col my-auto">
                                                <h6 class="mb-0">
                                                    <?= $row['item_name']; ?>
                                                </h6>
                                            </div>
                                            <div class="col my-auto"> <small>Qty :
                                                    <?= $row['qty']; ?>
                                                </small></div>
                                            <div class="col my-auto"> <small>Order At :
                                                    <?= $row['order_at']; ?>
                                                </small></div>
                                            <div class="col my-auto">
                                                <h6 class="mb-0">&#8377;
                                                    <?= $row['price']; ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-3 ">
                                <div class="row">


>>>>>>> e8cdb0a602a866881859c8954c775b96342b8ef5
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            </div>
        </div>
    </div>
</div>
</div>
=======
            <?php } ?>
        </div>
    </div>
</div>

</div>
<?php include("includes/scripts.php") ?>
>>>>>>> e8cdb0a602a866881859c8954c775b96342b8ef5
