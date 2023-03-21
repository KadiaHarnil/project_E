<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="javascript:void()" href="index.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Details</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="productdetail.php">Products</a></li>
                </ul>

            </li>
        </ul>
        <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-left mb-3">
                <div class="side-bar-profile-img">
                    <img src="<?= 'images/avatar/' . $_SESSION['auth1_img']; ?>" alt="">
                </div>
                <div class="profile-info1">
                    <h4 class="fs-18 font-w500">Welcome</h4>
                    <h2>
                        <?= $_SESSION['auth1_user']; ?>
                    </h2>
                </div>

            </div>

        </div>

        <div class="copyright">
            <p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
        </div>
    </div>
</div>