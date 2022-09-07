<?php
session_start();
include '../layout/filepath.php';
include '../../controller/user/serviceList.php';
include '../layout/header.php';
?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0 mt-5 pt-3" style="background-image: url(../../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo SITE_URL ?>/index.php" class="text-danger">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<section class="container">
    <div class="d-md-flex justify-content-around ms-5">
        <!-- serach box -->
        <div class="input-group rounded mb-5 mx-lg-5 mx-1 ">
            <input type="search" class="form-control border border-1 border-dark rounded-start searchData searchClick" placeholder="Enter Service Name or address" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border border-1 border-dark rounded-end bg-dark" id="basic-addon1">
                <span class="fa-solid fa-magnifying-glass text-white"></span>
            </span>
        </div>
        <div class="input-group rounded mb-5 mx-1 ps-5">
            <form action="POST" class="form">
                <select name="" id="serSearch" class="form-select px-5 border-dark">
                    <option value="">-- Search Using Services -- </option>
                    <?php
                    echo $drop;
                    ?>
                </select>
            </form>
        </div>
    </div>
</section>

<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-danger text-uppercase">// Our Services //</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp searchResult" data-wow-delay="0.3s">
            <?php
            echo $result;
            ?>
        </div>
    </div>
</div>
<!-- Service End -->

<div class="container mb-3">
    <div class="d-flex justify-content-end pages">
        <?php
        echo $numbers;
        ?>
    </div>
</div>

<script src="../../js/services.js"></script>
<?php
include '../layout/footer.php';
?>