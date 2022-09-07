<?php
session_start();
include 'view/layout/header.php';
include 'controller/index.php';
?>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Demo styles -->
<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>

<section class="bg-dark" id="showcase">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active text-center">
        <img src='<?php echo NENSI . "/slideshow1.webp"; ?>' class="w-75 frontPhoto" alt="..." height="600">
      </div>
      <div class="carousel-item text-center">
        <img src='<?php echo NENSI . "/slideshow2.webp"; ?>' class="w-75 frontPhoto" alt="..." height="600">
      </div>
      <div class="carousel-item text-center">
        <img src='<?php echo NENSI . "/slideshow3.webp"; ?>' class="w-75 frontPhoto" alt="..." height="600">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<div class="container-fluid">
  <div class="container my-4">
    <h1 class="text-center text-decoration-underline mb-4">Services</h1>
    <div class="swiper mySwiper fadeInUp">
      <div class="swiper-wrapper">

        <?php
        echo $slider;
        ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>


  </div>
  <!-- 
  <div class="container my-4">
    <section class="" id="showcase1">
      <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex">
              <img src='<?php echo NENSI . "/slideshow1.webp"; ?>' class="d-block" alt="..." height="300">
              <img src='<?php echo NENSI . "/slideshow1.webp"; ?>' class="d-block" alt="..." height="300">
              <img src='<?php echo NENSI . "/slideshow1.webp"; ?>' class="d-block" alt="..." height="300">
            </div>
          </div>
          <div class="carousel-item">
            <img src='<?php echo NENSI . "/slideshow2.webp"; ?>' class="d-block w-100" alt="..." height="300">
          </div>
          <div class="carousel-item">
            <img src='<?php echo NENSI . "/slideshow3.webp"; ?>' class="d-block w-100" alt="..." height="300">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </div> -->


</div>

<?php
include 'view/layout/footer.php';
?>