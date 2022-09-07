<?php
session_start();
include '../layout/filepath.php';
include '../../controller/user/serviceList.php';
include '../layout/header.php';
?>

<section class="container shadow mt-5 pt-5">
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
        <div class="rounded mb-5 mx-lg-5 mx-1 pe-5">
            <a href="<?php echo SITE_URL; ?>/index.php" class="btn btn-dark px-5">BACK</a>
        </div>
    </div>
    <div class="row mb-3 pt-2 searchResult">
        <?php
        echo $result;
        ?>
    </div>
</section>
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