<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard Light</a></li>
                    <li><a href="index-2.html">Dashboard Dark</a></li>
                    <li><a href="project-page.html">Project</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="kanban.html">Kanban</a></li>
                    <li><a href="calendar-page.html">Calendar</a></li>
                    <li><a href="message.html">Messages</a></li>
                </ul>

            </li>

        <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-left mb-3">
                <div class="side-bar-profile-img">
                    <img src="<?= 'images/avatar/'.$_SESSION['auth1_img']; ?>" alt="">
                </div>
                <div class="profile-info1">
                    <h4 class="fs-18 font-w500">Welcome</h4>
                    <h2><?= $_SESSION['auth1_user']; ?></h2>
                </div>
               
            </div>
            
        </div>

        <div class="copyright">
            <p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
        </div>
    </div>
</div>