<?php
$path='/html/';
?>
<!-- content -->
<div class="pt-lg-5 pt-3 pb-2 text-lg-start text-center mt-lg-3 col-lg-2 pb-md-4 bg-primary bg-opacity-50 navbar-nav-scroll navbar-expand-lg navbar-dark">
    <div class="">
        <button class="navbar-toggler mb-2" data-bs-toggle="collapse" data-bs-target="#data">
            <span class="fa fa-home"></span></button>
    </div>
    <ul id="data" class="list-unstyled pb-3 mb-4 border border-end-0 border-top-0 border-start-0 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-0">
                    <div href="#day1" data-bs-toggle="collapse" data-parent="#data">
                        Day 1
                    </div>
                </h3>
            </div>

            <ul id="day1" class="collapse list-unstyled show">
                <li class="">
                    <div>
                        <h5>
                            <a class="text-white text-decoration-none" href="#pra11" data-bs-toggle="collapse">
                                practice
                            </a>
                        </h5>
                    </div>
                    <ul id="pra11" class="collapse list-unstyled show">
                        <li class="">
                            <a class="text-dark  text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/practicals/Report_card.php">
                                reportCard
                            </a>

                        </li>
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/practicals/HR.php">
                                hrReport
                            </a>

                        </li>
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/practicals/loginForm.php">
                                loginForm
                            </a>

                        </li>
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/practicals/latestNews.php">
                                latestNews
                            </a>

                        </li>
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/practicals/menubar.php">
                                menubar
                            </a>

                        </li>
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/practicals/nav_anchor.php">
                                navAnchor
                            </a>

                        </li>
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/practicals/task_from_video.php">
                                taskFromVideo
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <div>
                        <h5 class="">
                            <a class="text-white text-decoration-none" href="#ass11" data-bs-toggle="collapse">
                                Assignment
                            </a>
                        </h5>
                    </div>
                    <ul id="ass11" class="collapse list-unstyled show">
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day1/Assignment/employee.php">
                                employee
                            </a>

                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="data" class="collapse navbar-collapse pb-3 mb-4 border border-end-0 border-top-0 border-start-0 list-unstyled">
        <li class="">
            <div class="" id="day2">
                <h3 class="mb-0">
                    <div href="#collapse2" data-bs-toggle="collapse" data-parent="#data">
                        Day 2
                    </div>
                </h3>
            </div>

            <ul id="collapse2" class="collapse list-unstyled show">
                <li class="">
                    <h5>
                        <a class="text-white text-decoration-none" href="#pra21" data-bs-toggle="collapse" data-parent="#data">
                            Practicals
                        </a>
                    </h5>
                    <ul id="pra21" class="collapse list-unstyled show">
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day2/practice/video_task.php">
                                videoTask
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <h5>
                        <a class="text-white text-decoration-none" href="#ass21" data-bs-toggle="collapse" data-parent="#data">
                            Assignment
                        </a>
                    </h5>
                    <ul id="ass21" class="collapse list-unstyled show">
                        <li class="">
                            <a class="text-dark text-decoration-none" href="<?php echo SITE_URL; ?><?php echo $path ?>day2/assignment/resumeHtml.php">
                                resume
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>
    </ul>
</div>