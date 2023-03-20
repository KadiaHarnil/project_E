<?php
// session_start();
include("includes/header.php");
include("includes/navbar.php");
// print_r($_SESSION['cart']);
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Table Hover</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>>Product Image</th>
                            <th>Product Name</th>
                            <th>Item Price</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <?php if (isset($_SESSION['cart'])) {

                        foreach ($_SESSION['cart'] as $key => $value) {
                            $img = "images/" . $value['image'];

                            ?>
                            <tbody>
                                <tr>
                                    <th> <img src="<?= $img; ?>" class="book-img">
                                    </th>
                                    <td>
                                        <?= $value['name']; ?>
                                    </td>
                                    <td>
                                        <?= $value['price']; ?><input type="hidden" class="iprice"
                                            value="<?= $value['price']; ?>">
                                    </td>
                                    <td>
                                        <form action="cart.php" method="post">
                                            <span class="badge badge-primary"> 
                                                <input type="number" class="iquantity" name="txtqty"  onchange="this.form.submit()" value="<?= $value['quantity']; ?>">
                                                <input type="hidden" name="txtname"  value="<?= $value['name']; ?>">

                                            </span>
                                        </form>
                                    </td>
                                    <td class="itotal"></td>
                                    <td>
                                        <form action="cart.php" method="post">
                                            <div class="d-flex">
                                                <input type="hidden" name="txtname" value="<?= $value['name'] ?>">
                                                <button class="btn btn-round btn-danger mt-3" name="delete" type="submit"><i
                                                        class="fa fa-trash fa-lg"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        <?php }
                    }
                    ; ?>
                </table>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-4 mt-2">
                        <div class="row d-flex justify-content-between px-4">
                            <p class="mb-1 text-left">Subtotal</p>
                            <h6 class="mb-1 text-right" id="gtotal"></h6>
                        </div>
                        <button class="btn-block btn-blue">
                            <span>
                                <span id="checkout">Checkout</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>


</div>
<script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    const gtotal = document.getElementById('gtotal');
    function change() {
        gt = 0;
        for (let i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value);
        }
        console.log(gt);
        gtotal.innerText = gt;
    }

    change();
</script>
<?php
include("includes/scripts.php");
?>