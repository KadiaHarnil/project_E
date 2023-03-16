<?php
if (isset($_SESSION['message'])) {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey
            <?= $_SESSION['message']; ?>
        </strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    unset($_SESSION['message']);
}
if (isset($_SESSION['message1'])) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey
            <?= $_SESSION['message1']; ?>
        </strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    unset($_SESSION['message1']);
}
?>

<?php include('includes/scripts.php'); ?>