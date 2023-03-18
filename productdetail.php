<?php
include('includes/header.php');
include('admin/config/dbcon.php');
$qry = "select * from product";
$result = $con->query($qry);
?>
<section style="background-color:whitesmoke;">
    <div class="text-center container py-5">
        <h1 class="mt-4 mb-5"><strong>Categories</strong></h1>
        <div class="row">
            <?php while ($row = $result->fetch_assoc()) {
                $img = "images/" . $row['pimg'];
                ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="<?= $img; ?>" class="w-100 " />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-danger ms-2">15% off</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h3 class="card-title mb-3" style="font-family: 'Labrada', serif; color:#3b71ca">
                                    <?= $row['pname']; ?>
                                </h3>
                            </a>
                            <p>Starting From:</p>
                            <h6 class="mb-3">
                                <?= $row['pprice']; ?>/-
                            </h6>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">Explore Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php
include('includes/scripts.php');
?>