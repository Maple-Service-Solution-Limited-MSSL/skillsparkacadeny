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
        <div class="hero border border-1">
            <div class="container py-5 hero-div">
                <div class="row flex-lg-row-reverse align-items-center py-5">
                    <div class="col-6 hero-img-div">
                        <!-- <img src="./assets/images/hero-img.png" class="img-fluid mb-2 hero-img" alt="Hero Image" width="100%" height="100%"> -->
                        <img src="./assets/images/hero-img.png" class="img-fluid d-none d-md-block hero-img" alt="Hero Image">
                        <img src="./assets/hero-img-mbl.png" class="img-fluid d-block d-md-none hero-img" alt="Hero Image">
                    </div>
                    <div class="col-6">
                        <h1 class="display-5 fw-bold lh-1 my-4 herstxt">Grow up your skills by online courses with Onlearning</h1>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">
                            <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 animate__animated animate__bounceIn animate__slower">Explore Path</button>
                            <button type="button" class="btn btn-success btn-lg px-4">Become Student</button>
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