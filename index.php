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
            <div class="container py-5 hero-div">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-6 hero-img">
                        <img src="./assets/images/hero-img.png" class="img-fluid" alt="Hero Image" loading="lazy">
                    </div>
                    <div class="col-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3 herstxt">Grow up your skills by online courses with Onlearning</h1>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">
                            <button type="button" class="btn btn-primary1 btn-lg px-4 me-md-2 animate__animated animate__bounceIn animate__slower">Explore Path</button>
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