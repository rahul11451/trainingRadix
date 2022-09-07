<?php
// include '../layout/filepath.php';
include '../../controller/service.php';
include '../layout/header.php';

?>
<section class="mt-5 pt-3 admin-dashboard">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-lg-10">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-12 lg:ps-5 pt-3 column10">
                        <!-- Success Message -->
                         <?php echo $result; 
                        ?>
                        <div class="d-flex justify-content-between  mt-3">
                            <!-- heading -->
                            <div class="h1 py-2 mx-5">
                                <h1 class="modal-title"><?php echo $heading; ?></h1>
                            </div>
                            <div class=" py-2 mx-5">
                                <a href="<?php if (isset($id)) {
                                                echo SITE_URL . "/view/admin/serviceList.php";
                                            } else {
                                                echo "index.php";
                                            } ?>" class="btn btn-outline-danger px-3"><i class="fa fa-arrow-left me-3"></i>BACK</a>
                            </div>
                        </div>
                        <!-- Data Add Part - Form -->
                        <div class="p-5 bg-white shadow-lg bg-opacity-75 rounded fw-bolder border border-2 border-danger adminServiceForm wow fadeInUp" data-wow-delay="0.1s">
                            <h3 class="text-center text-decoration-underline mb-5 text-danger">Services</h3>
                            <form method="POST" enctype="multipart/form-data" id="addServiceForm">
                                <div class="row mb-5">
                                    <div class=" form-group">
                                        <label for="titl" class='h4'>Service Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="" placeholder="Service Name" class="form-control border border-dark border-1" value="<?php if (isset($id)) {echo $editAr[0]['sServiceName'];} else { echo $nameVal; } ?>">
                                        <span class="text-danger"><?php echo $erName; ?></span>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col form-group">
                                        <label for="titl" class='h4'>Description <span class="text-danger">*</span></label>
                                        <textarea name="desc" placeholder="Description" id="" class="form-control border border-dark border-1" cols="30" rows="5"><?php if (isset($id)) { echo $editAr[0]['sDescription']; } else { echo $descVal; } ?></textarea>
                                        <span class="text-danger"><?php echo $erDesc; ?></span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center mb-4 mt-5 pt-3">

                                    <?php
                                    if (!isset($id)) {
                                    ?>
                                        <div class="form-group mb-3 me-3">
                                            <input type="submit" value="Save Data" class="btn btn-danger w-100 fw-bolder  mb-4" name="saveService">
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-group mb-3">
                                        <input type="submit" value="Save And Back" class="btn btn-danger mb-4 fw-bolder w-100 " name="save&back">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../../js/validation.js"></script>
<script src="../../js/services.js"></script>

<?php
include '../layout/footer.php';
