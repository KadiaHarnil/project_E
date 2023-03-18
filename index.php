<?php
if (isset($_SESSION['auth1_user'])) {
    header('location:admin/index.php');
}
include('includes/header.php');
include('includes/navbar.php');
?>
<style>
    .carousel-inner {
        height: 100vh;
        /* min-height: 300px;    */
    }git
</style>
<div id="carouselExampleInterval" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-mdb-interval="3000">
            <img src="images\poster\poster.jpg" height="800px" class="d-block w-100" alt="Wild Landscape" />
        </div>
        <div class="carousel-item" data-mdb-interval="3000">
            <img src="images\poster\poster4.png" height="750px" class="d-block w-100" alt="Camera" />
        </div>
        <div class="carousel-item" data-mdb-interval="3000">
            <img src="images\poster\cupsposter.png" height="800px" class="d-block w-100" alt="Exotic Fruits" />
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
<div class="text-center m-3">
    <h1 class="mt-3">Why Biodegredable?</h1>

</div>

<article class="postcard container-fluid w-30 ">
    <a class="postcard__img_link"
        href="https://www.polystar.co.uk/news/seven-benefits-of-biodegradable-bags/#:~:text=As%20biodegradable%20products%20break%20down,will%20happen%20as%20a%20result.">
        <img class="postcard__img" height="400px" data-aos="fade-right" data-aos-offset="500"
            data-aos-easing="ease-in-sine" src="images\card images\img1.png" alt="Image Title" />
    </a>
    <div class="postcard__text mt-5">
        <h1 class="postcard__title yellow"><a href="#">1. Repurposing & Recycling </a></h1>


        <div class="postcard__preview-txt" style="color:black; letter-spacing: 2px;" data-aos="fade-left"
            data-aos-anchor="#example-anchor" data-aos-offset="1500" data-aos-duration="900">The oils that come from
            plants make bioplastics far superior
            materials compared to traditional plastic types. The oils make the surface of bioplastics more malleable and
            less brittle so that it’s easier to form new shapes and textures.

            They are just as moldable as traditional plastics and can be turned into various appealing ways to suit your
            requirements. In addition to this, they can also be recycled and repurposed multiple times in their life
            cycle.

            Compare this to some non-biodegradable plastics, they are not safe for repurposing because some materials
            can leak toxic, dangerous chemicals that may leak after the first use.

            <div class="mt-3">
                <a class="btn btn-outline-primary" href="login.php" role="button">Read More<i
                        class="fa-solid fa-angles-right mx-1"></i></a>
            </div>

        </div>


    </div>
</article>

<article class="postcard container-fluid w-30 ">
    <div class="postcard__text mt-5">
        <h1 class="postcard__title yellow"><a href="#">2. Non-Toxic</a></h1>
        <div class="postcard__preview-txt" style="color:black; letter-spacing: 2px;" data-aos="fade-left"
            data-aos-anchor="#example-anchor" data-aos-offset="1500" data-aos-duration="900">Biodegradable bags are made
            from natural materials which means that they are safer for users.

            Traditional plastics are made with harmful by-products and chemicals which are a threat to the environment
            and life as well. They are likely to emit these harmful substances during the breakdown process. What’s
            more, the plastic used for most standard water bottles, PET, can attract harmful bacteria or even leak
            chemicals.

            But this is not a case with biodegradable plastic, further supporting the case for biodegradable plastics.
            They are safe and don’t release toxins during their breakdown process. They are absorbed by the soil.

            <div class="mt-3">
                <a class="btn btn-outline-primary" href="login.php" role="button">Read More<i
                        class="fa-solid fa-angles-right mx-1"></i></a>
            </div>
        </div>
    </div>
    <a class="postcard__img_link"
        href="https://www.polystar.co.uk/news/seven-benefits-of-biodegradable-bags/#:~:text=As%20biodegradable%20products%20break%20down,will%20happen%20as%20a%20result.">
        <img class="postcard__img" height="400px" data-aos="fade-right" data-aos-offset="500"
            data-aos-easing="ease-in-sine" src="images\card images\img3.png" alt="Image Title" />
    </a>
</article>

<article class="postcard container-fluid w-30 ">
    <a class="postcard__img_link"
        href="https://www.polystar.co.uk/news/seven-benefits-of-biodegradable-bags/#:~:text=As%20biodegradable%20products%20break%20down,will%20happen%20as%20a%20result.">
        <img class="postcard__img" height="400px" data-aos="fade-right" data-aos-offset="500"
            data-aos-easing="ease-in-sine" src="images\card images\recycle.png" alt="Image Title" />
    </a>
    <div class="postcard__text mt-5">
        <h1 class="postcard__title yellow"><a href="#">3. Less Petroleum</a></h1>

        <div class="postcard__preview-txt" style="color:black; letter-spacing: 2px;" data-aos="fade-left"
            data-aos-anchor="#example-anchor" data-aos-offset="1500" data-aos-duration="900">Biodegradable plastics also
            minimises the use of petroleum supplies. Traditional plastic is manufactured by oil molecules being heated
            and treated to convert into polymers.

            Nearly 2.7 per cent of a country’s petroleum is used in the traditional plastic manufacturing processes.

            Biodegradable plastics, on the other hand, are made using natural materials such as sugar cane, corn, orange
            peels, starch, and plants. This process requires far less energy and usually does not involve the burning of
            fossil fuels.

            Therefore, this means that the amount of biodegradable plastics that can be manufactured is much higher
            while simultaneously using far less energy.

            <div class="mt-3">
                <a class="btn btn-outline-primary" href="login.php" role="button">Read More<i
                        class="fa-solid fa-angles-right mx-1"></i></a>
            </div>
        </div>
    </div>
</article>



<div class="container mt-4 mb-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Featured Products</h2>
        <a class="btn btn-outline-primary mt-2" href="login.php" role="button">Explore More<i
                class="fa-solid fa-angles-right mx-1"></i></a>

    </div>
    <div class="row">

        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1500">
            <div class="card">

                <div class="d-flex justify-content-between align-items-center">

                    <a href="#" class="badge badge-danger">10% off</a>
                </div>


                <div class="text-center">

                    <img src="images\plates\Eco soul dish.png" width="250">
                </div>

                <div class="text-center">
                    <h5>Biodegredable Bouls</h5>
                    <span>Starting at:</span>
                    <span class="text-success"> Rs:150/-</span>
                </div>
                <a class="btn btn-outline-primary mt-2" href="login.php" role="button">Explore More<i
                        class="fa-solid fa-angles-right mx-1"></i></a>

            </div>

        </div>
        <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500">

            <div class="card">

                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="badge badge-danger">15% off</a>
                </div>


                <div class="text-center">

                    <img src="images\bags\Carry Bags\main1.png" width="250">
                </div>

                <div class="text-center">
                    <h5>Bio Degredable Pouches</h5>
                    <span>Starting at:</span>
                    <span class="text-success">Rs:300/-</span>
                </div>
                <a class="btn btn-outline-primary mt-2" href="login.php" role="button">Explore More<i
                        class="fa-solid fa-angles-right mx-1"></i></a>
            </div>

        </div>

        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1500">

            <div class="card">

                <div class="d-flex justify-content-between align-items-center">


                    <a href="#" class="badge badge-danger">10% off</a>
                </div>
                <div class="text-center">
                    <img src="images\cups\cups2.png" width="250">
                </div>
                <div class="text-center">

                    <h5>Biodegredable cups</h5>
                    <span>Starting at:</span>
                    <span class="text-success"> Rs:120/-</span>
                </div>
                <a class="btn btn-outline-primary mt-2" href="login.php" role="button">Explore More<i
                        class="fa-solid fa-angles-right mx-1"></i></a>
            </div>

        </div>

    </div>
</div>

<!-- about us section  -->

<section id="about-section" class="pt-5 pb-5" style="background-color: #F5F5F5x;">
    <div class="container wrapabout">
        <div class="red"></div>
        <div class="row">
            <div class="col-lg-6 align-items-center justify-content-left d-flex mb-5 mb-lg-0">
                <div class="blockabout">
                    <div class="blockabout-inner text-center text-sm-start">
                        <div class="title-big pb-3 mb-3">
                            <h3>ABOUT ME</h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">
                        <h1>Hello</h1>everyone <h5><span class="text-success"> Future.E-water by NATURE </span></h5>is
                        here
                        we are here to change the world by providing all the biodegradable products.
                        </p>
                        <p class="description-p text-muted pe-0 pe-lg-0">Join us to change the world from the heart.</p>
                        <div class="sosmed-horizontal pt-3 pb-3">
                            <a href="#"><i class="fa fa-facebook fa-2x mx-1"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-2x mx-1"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-2x mx-1"></i></a>
                        </div>

                        <a href="https://catchfoundation.in/say-no-to-single-use-plastic-bag/"
                            class="btn rey-btn mt-3">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <figure class="potoaboutwrap">
                    <img src="images\poster\contentpick.jpg" alt="potoabout" />
                </figure>
            </div>
        </div>
    </div>
</section>

<a href="https://web.whatsapp.com/" class="float" target="_blank">
    <i class="fa fa-whatsapp fa-x my-float"></i>
</a>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>