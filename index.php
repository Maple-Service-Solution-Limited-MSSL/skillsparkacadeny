<?php require("./templates/header.php") ?>
<div class="hero ">
    <div class="container py-5 hero-div">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-6 hero-img">
                <img src="./assets/images/hero-img.png" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="col-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 herstxt">Grow up your skills by online courses with Onlearning</h1>
                <!-- <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">
                <button type="button" class="btn btn-primary1 btn-lg px-4 me-md-2">Explore Path</button>
                <button type="button" class="btn btn-success btn-lg px-4">Become Student</button>
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