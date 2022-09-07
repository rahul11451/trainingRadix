<?php
include("../../header.php");
$paths = '/php/';
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Find number is power of 2 or not
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <?php
                    $nen = $_SERVER['SERVER_ADDR'];
                    echo '<h4 class="mb-5 text-center text-primary"><span class="text-decoration-underline ">Server Ip Address: </span>' . $nen .  '</h4>';
                    ?>
                    <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                        browser detection
                    </h4>
                    <?php
                    $browser = $_SERVER['HTTP_USER_AGENT'];
                    echo '<h4 class="mb-5 text-center text-primary"><span class="text-decoration-underline text-black">Server Ip Address:  </span> ' . $browser .  '</h4>';
                    ?>

                    <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                        get the current file name
                    </h4>
                    <?php
                    $file_name = $_SERVER['SCRIPT_NAME'];
                    echo '<h4 class="mb-5 text-center text-primary"><span class="text-decoration-underline text-black">Current file Address:  </span> ' . $file_name .  '</h4>';
                    ?>

                    <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                        check whether the page is called from https or http.
                    </h4>
                    <?php
                    if (isset($_SERVER['HTTPS'])) {
                        echo '<h4 class="mb-5 text-center text-primary">Page is called from https.</h4>';
                    } else {
                        echo '<h4 class="mb-5 text-center text-primary">Page is called from http.</h4>';
                    }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/basicForm.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/checkStringPattern.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
    <?php
    include("../../footer.php");
    ?>