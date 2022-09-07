<?php

include('frontHeader.php');
include('filepath.php');


?>

<section class="" id="showcase">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src='<?php echo NENSI."photos/hotel2.jpeg"; ?>' class="d-block w-100" alt="..." height="830">
            </div>
            <div class="carousel-item">
                <img src='<?php echo NENSI."photos/hotel5.jpeg" ; ?>' class="d-block w-100" alt="..." height="830">
            </div>
            <div class="carousel-item">
                <img src='<?php echo NENSI."photos/hotel3.jpeg" ; ?>' class="d-block w-100" alt="..." height="830">
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

<!-- Authors -->

<section class="py-5 text-center" id="author">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h1 class="text-white pb-3">
                        Meet the Developer
                    </h1>
                    <p class="lead pb-1">
                        A FullStack Developer.
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col d-flex justify-content-center">
                    <div class="card w-25 w-sm-100">
                        <div class="card-body picture">
                            <img src='<?php echo NENSI."photos/nensi.jpeg"; ?>' alt="person1" class="img-fluid rounded-circle w-50 mb-3">
                            <h5>Nensi Darji</h5>
                            <h5 class="text-muted">FullStack Developer</h5>
                            <p>Focused Developer.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-2">
                                    <a href="#">
                                        <span class="fa fa-brands fa-facebook"></span>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <a href="#">
                                        <span class="fa fa-brands fa-twitter"></span>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <a href="#">
                                        <span class="fa fa-brands fa-instagram"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include('mainFooter.php');
?>