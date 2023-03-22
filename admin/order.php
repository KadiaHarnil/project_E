<?php
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("config/dbcon.php");

?>
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Register</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>

                                    <th><strong>User Name</strong></th>
                                    <th><strong>Item Nmae</strong></th>
                                    <th><strong>Quantity</strong></th>
                                    <th><strong>Price</strong></th>
                                    <th><strong>Order At</strong></th>
                                </tr>
                            </thead>
                            <?php
                            $qry = "SELECT user_name,item_name,qty,price,order_at FROM `order_item`,`orders` WHERE orders.order_id=order_item.order_id";
                            $result = $con->query($qry); 
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><strong>
                                                <?= $row['user_name']; ?>
                                            </strong></td>
                                        <td>
                                            <div class="d-flex align-items-center"> <span class="w-space-no">
                                                    <?= $row['item_name']; ?>
                                                </span></div>
                                        </td>
                                        <td>
                                            <?= $row['qty']; ?>
                                        </td>
                                        <td>
                                            <?= $row['price']; ?>
                                        </td>
                                        <td>
                                            <?= $row['order_at']; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
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