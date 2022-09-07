<?php
    include 'filepath.php';
?>

<footer id="main-footer" class="py-1 bg-black text-white">
    <div class="container mb-5 pt-4">
        <div class="d-flex justify-content-around">
            <div class="">
                <h5>Pages</h5>
                <ul class="">
                    <li class="">
                        <a class="text-decoration-none text-white" href="<?php echo SITE_URL; ?>/index.php">Home</a>
                    </li>
                    <li class="">
                        <a class="text-decoration-none text-white" href="<?php echo SITE_URL; ?>/view/user/contact.php" target="_blank">Contact Us</a>
                    </li>
                    <li class="">
                        <a class="text-decoration-none text-white" href="<?php echo SITE_URL; ?>/view/user/aboutUs.php" target="_blank">About Us</a>
                    </li>
                    <li class="">
                        <a class="text-decoration-none text-white" href="<?php echo SITE_URL; ?>/view/user/team.php" target="_blank">Team</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <h5>Follow Us</h5>
                <ul class="list-unstyled">
                    <!-- Icons -->
                    <li class="">
                        <a class="text-white text-decoration-none px-2" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" target="_blank">
                            <i class="fab fa-youtube"></i> - YouTube
                        </a>
                    </li>
                    <li class="">
                        <a class="text-white text-decoration-none px-2" href="https://www.facebook.com/mdbootstrap" target="_blank">
                            <i class="fab fa-facebook-f"></i> - Facebook
                        </a>
                    </li>
                    <li class="">
                        <a class="text-white text-decoration-none px-2" href="https://twitter.com/MDBootstrap" target="_blank">
                            <i class="fab fa-twitter"></i> - Twitter
                        </a>
                    </li>
                    <li class="">
                        <a class="text-white text-decoration-none ps-2" href="https://github.com/mdbootstrap/mdb-ui-kit" target="_blank">
                            <i class="fab fa-github"></i> - Github
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <p class="lead">
                    <span class="fw-bold">Design by Nensi Darji, </span> Copyright &copy; 2022
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
</body>

</html>