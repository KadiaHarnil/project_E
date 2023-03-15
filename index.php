<?php
include('includes/header.php');
include('includes/navbar.php');
?>



<div id="carouselExampleInterval" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <div class="carousel-inner img-fluid">
        <div class="carousel-item active img-fluid" data-mdb-interval="3000">
            <img src="images\poster\poster.jpg" class="d-block w-100" alt="Wild Landscape" />
        </div>
        <div class="carousel-item" data-mdb-interval="3000">
            <img src="images\poster\poster3.jpg" class="d-block w-100" alt="Camera" />
        </div>
        <div class="carousel-item data-mdb-interval=" 3000"">
            <img src="images\poster\poster4.png" class="d-block w-100" alt="Exotic Fruits" />
        </div>
    </div>
    <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row row1">

    <div class="image1"><img src="./Images/Jaisalmer.jpg" alt="Something went wrong"></div>

    <div class="textbox">

        <h2 class="lg-heading FONT">Jaisalmer , Rajasthan</h2>
        <br>
        <p class="lg-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet molestias
            asperiores porro maiores, nisi quia. Doloribus saepe numquam nesciunt distinctio.</p>
        <br>
        <a href="./About.html" class=" button primary-button">MORE</a>

    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>