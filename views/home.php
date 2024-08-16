<?php require("./templates/header.php") ?>
<div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="hero">
            <div class="container col-xxl-8 px-4 py-5 hero-div">
                <div class="row flex-lg-row-reverse align-items-center py-5">
                    <div class="col-10 col-6  col-sm-8 col-lg-6 v6">
                        <!-- <img src="./assets/images/hero-img.webp" class="img-fluid mb-2 hero-img" alt="Hero Image" width="100%" height="100%"> -->
                        <img src="./assets/images/hero-img.png" class="img-fluid d-none d-md-block hero-img mx-lg-auto" alt="Hero Image" width="700"
                        height="auto" loading="lazy" fetchpriority="high">
                        <img src="./assets/images/hero-img.png" class="img-fluid d-block d-md-none hero-img mx-md-auto" alt="Hero Image" loading="lazy" fetchpriority="high">  <!-- for-mobile-->
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 my-4 pb-2 herstxt">Spark Your Success in the Digital Age.</h1>
                        <p class="lead fw-normal">Empowering Minds, Igniting Digital Futures!</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">
                            <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 animate__animated animate__bounceIn animate__slower"><a href="#courses" class="link-underline link-underline-opacity-0 text-dark">Our Courses</a></button>
                            <button type="button" class="btn btn-success btn-lg px-4"><a href="https://skillspark.mapleitfirm.online/creatform/create-form.php" target="_blank" class="link-underline link-underline-opacity-0 text-light">Become Student</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero Section Ends -->
<main>
<?php require("./templates/card-work.php") ?>
<?php require("./templates/allcourses.php") ?>
<?php require("./templates/benefits.php") ?>
<?php require("./templates/card-interested.php") ?>
<?php require("./templates/card-free-seminer.php") ?>
</main>
<?php require("./templates/footer.php") ?>