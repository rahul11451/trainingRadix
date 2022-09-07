<?php
include '../../controller/user/contact.php';
include '../layout/header.php';
?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0 mt-5 pt-3" style="background-image: url(../../img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo SITE_URL ?>/index.php" class="text-danger">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-danger text-uppercase">// Contact Us //</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Booking //</h5>
                            <?php
                                echo $emailData;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <!-- https://www.google.com/maps/embed/v1/place?key=AIzaSyCm_-ALV_hDqY5ufRqMuT6cnGNHrihwISE&q=Eiffel+Tower,Paris+France -->
                <?php echo $mapResult ; 
                ?>
                <!-- <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.25791640033!2d72.43965888455183!3d23.020181765638945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1655732303097!5m2!1sen!2sin" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <?php echo $successresult; ?>

                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" value="<?php echo $nameVal; ?>">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" value="<?php echo $emailVal; ?>">
                                    <label for="email">Your Email</label>
                                    <span class="text-danger"><?php echo $erEmail; ?></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="<?php echo $subVal; ?>">
                                    <label for="subject">Subject</label>
                                    <span class="text-danger"><?php echo $erSubject; ?></span>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="text" id="message" style="height: 100px"><?php echo $textVal; ?></textarea>
                                    <label for="message">Message</label>
                                    <span class="text-danger"><?php echo $erText; ?></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="btn btn-danger w-100 py-3" type="submit" name="send" value="Send Message" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php
include '../layout/footer.php';
?>