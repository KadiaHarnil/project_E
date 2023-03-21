<?php
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("config/dbcon.php");
$qry = "select * from product";
$result = $con->query($qry);
?>
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Datatable</h4>
                        <a class="btn btn-primary" href="add.php" role="button">Add</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Images</th>
                                        <th>Product Name</th>
                                        <th>Product Details</th>
                                        <th>Product Details</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><img src="<?= '../images/' . $row['pimg']; ?>" height="200px" width="200px" alt=""></td>
                                            <td>
                                                <?= $row['pname']; ?>
                                            </td>
                                            <td>
                                                <?= $row['pdetails']; ?>
                                            </td>
                                            <td>
                                                <?= $row['pprice']; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Product Details</th>
                                    <th>Product Details</th>
                                </tr>
                                </tfoot>
                            </table>
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