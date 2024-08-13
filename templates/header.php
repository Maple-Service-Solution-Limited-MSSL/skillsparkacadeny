<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <title>SkillSpark Academy</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
      .area{
        background: #d2e6e4; 
        background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
        width: 100%;
        height: 100vh;
        z-index: 0;
        position: relative;
      }

      .hero {
          position: relative;
          z-index: 1; 
      }

      .circles{
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          overflow: hidden;
          z-index: 0;
      }

      .circles li{
          position: absolute;
          display: block;
          list-style: none;
          width: 20px;
          height: 20px;
          background: #28a745;
          animation: animate 25s linear infinite;
          bottom: -150px;
      }

      .circles li:nth-child(1){
          left: 25%;
          width: 80px;
          height: 80px;
          animation-delay: 0s;
      }

      .circles li:nth-child(2){
          left: 10%;
          width: 20px;
          height: 20px;
          animation-delay: 2s;
          animation-duration: 12s;
      }

      .circles li:nth-child(3){
          left: 70%;
          width: 20px;
          height: 20px;
          animation-delay: 4s;
      }

      .circles li:nth-child(4){
          left: 40%;
          width: 60px;
          height: 60px;
          animation-delay: 0s;
          animation-duration: 18s;
      }

      .circles li:nth-child(5){
          left: 65%;
          width: 20px;
          height: 20px;
          animation-delay: 0s;
      }

      .circles li:nth-child(6){
          left: 75%;
          width: 110px;
          height: 110px;
          animation-delay: 3s;
      }

      .circles li:nth-child(7){
          left: 35%;
          width: 150px;
          height: 150px;
          animation-delay: 7s;
      }

      .circles li:nth-child(8){
          left: 50%;
          width: 25px;
          height: 25px;
          animation-delay: 15s;
          animation-duration: 45s;
      }

      .circles li:nth-child(9){
          left: 20%;
          width: 15px;
          height: 15px;
          animation-delay: 2s;
          animation-duration: 35s;
      }

      .circles li:nth-child(10){
          left: 85%;
          width: 150px;
          height: 150px;
          animation-delay: 0s;
          animation-duration: 11s;
      }

      @keyframes animate {
          0%{
              transform: translateY(0) rotate(0deg);
              opacity: 1;
              border-radius: 0;
          }
          100%{
              transform: translateY(-1000px) rotate(720deg);
              opacity: 0;
              border-radius: 50%;
          }
      }

      .hero .container {
          position: relative;
          z-index: 1;
      }
</style>
  </head>
  <body class="">
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mx-4">
          <a class="navbar-brand col-5" href="#"><img src="./assets/images/logo4.png" alt="" class="navbar-brand" width="auto" height="60"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold ">
              <li class="nav-item">
                <a class="nav-link customhover active text-primary" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link customhover" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link customhover" href="#">Contact</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Course
        </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Web Development</a></li>
                  <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                  <li><a class="dropdown-item" href="#">SEO</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <input type="button" class="btn btn-success" value="Search">
              <!-- <button class="btn btn-success" type="submit">Search</button> -->
            </form>
          </div>
        </div>
      </nav>
    </header>
