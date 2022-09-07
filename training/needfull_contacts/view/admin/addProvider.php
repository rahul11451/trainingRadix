<?php
include '../layout/filepath.php';
include '../../controller/servcieProvider.php';
include '../layout/header.php';
?>

<section class="pt-5 admin-dashboard">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-lg-10">
            <div class="container ">
                <div class="row mb-3">
                    <div class="col-lg-12 lg:ps-5 pt-2 column10">

                        <!-- Success Message -->
                        <h1 class=" text-decoration-underline text-center mess"><?php echo $result; ?></h1>
                        <div class="d-flex justify-content-between  mt-3">
                            <!-- heading -->
                            <div class="h1 py-2 mx-5">
                                <h1 class="modal-title"><?php echo $heading; ?></h1>
                            </div>
                            <div class=" py-2 mx-5">
                                <a href="<?php if (isset($id)) {
                                                echo SITE_URL . "/view/admin/providerList.php";
                                            } else {
                                                echo "index.php";
                                            } ?>" class="btn btn-dark px-5">BACK</a>
                            </div>
                        </div>


                        <!-- Data Add Part - Form -->
                        <div class="px-5 pt-5 pb-3 bg-white bg-opacity-75 rounded fw-bolder border border-dark">
                            <h3 class="text-center text-decoration-underline mb-5">Service Provider</h3>
                            <form method="POST" enctype="multipart/form-data" id="addProviderForm">
                                <div class="row mb-4">
                                    <div class="col-6 form-group">
                                        <label for="titl" class='h4'>Business Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="" placeholder="Name" class="form-control border border-dark border-1" value="<?php if (isset($id)) {
                                                                                                                                                                    echo $editAr[0]['sName'];
                                                                                                                                                                } ?>">
                                        <span class="text-danger"><?php echo $erName; ?></span>
                                    </div>

                                    <div class="col-6 form-group">
                                        <label for="" class='h4'>Email </label>
                                        <input type="email" name="email" id="" class="form-control border border-dark border-1" value="<?php if (isset($id)) { echo $editAr[0]['sEmail']; } ?>" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-6 form-group">
                                        <label for="titl" class='h4'>Phone Number<span class="text-danger">*</span></label>
                                        <input type="tel" name="phoneNumber" id="" placeholder="Phone Number" class="form-control border border-dark border-1" value="<?php if (isset($id)) { echo $editAr[0]['nPhoneNumber']; } ?>">
                                        <span class="text-danger"><?php echo $erNo; ?></span>
                                    </div>

                                    <div class="col-6 form-group">
                                        <span class="me-3">Status: </span>
                                        <div class="flex-fill mb-0 form-check form-switch ">
                                            <input class="form-check-input h2 ms-1" name="switch" type="checkbox" id="flexSwitchCheckChecked" <?php if (isset($hotel_edit_id)) {
                                                                                                                                                    if ($status == '1') {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    }
                                                                                                                                                } else {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-4">
                                    <div class="col form-group">
                                        <label for="titl" class='h4'>Address <span class="text-danger">*</span></label>
                                        <textarea name="address" placeholder="Address" id="" class="form-control border border-dark border-1" cols="30" rows="5"><?php if (isset($id)) { echo $editAr[0]['sAddress']; } ?></textarea>
                                        <span class="text-danger"><?php echo $erAdd; ?></span>
                                    </div>

                                </div>

                                <div class="row mb-4">

                                    <div class="col-6 form-group">
                                        <label for="titl" class='h4'>City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" id="" placeholder="city" class="form-control border border-dark border-1" value="<?php if (isset($id)) { echo $editAr[0]['sCity']; } ?>">
                                        <span class="text-danger"><?php echo $erCity; ?></span>
                                    </div>

                                    <div class="col-6 form-group">
                                        <label for="titl" class='h4'>Pincode <span class="text-danger">*</span></label>
                                        <input type="text" name="pincode" id="" placeholder="Pincode" class="form-control border border-dark border-1" value="<?php if (isset($id)) { echo $editAr[0]['nPincode']; } ?>">
                                        <span class="text-danger"><?php echo $erPin; ?></span>
                                    </div>

                                </div>

                                <div class="row mb-4">

                                    <div class="col-6 form-group">
                                        <label for="titl" class='h4'>Thumbnail Photo <span class="text-danger">*</span></label><br>
                                        <?php
                                            echo $smallPhotoImg;
                                        ?>
                                        <input type="file" name="smPic" id="" class="form-control border border-dark border-1">
                                        <span class="text-danger"><?php echo $erSmPic; ?></span>
                                    </div>

                                    <div class="col-6 form-group">
                                        <label for="titl" class='h4'>Large Photo <span class="text-danger">*</span></label><br>
                                        <?php echo $largePhotoImg; ?>
                                        <input type="file" name="lgPic" id="" class="form-control border border-dark border-1">
                                        <span class="text-danger"><?php echo $erLgPic; ?></span>
                                    </div>

                                </div>

                                <div class="row mb-4 ">

                                    <div class=" form-group">
                                        <label for="star" class='h4'>Services <span class="text-danger">*</span></label><br>
                                        <?php
                                        echo $check;
                                        ?>
                                    </div>
                                    <span class="text-danger stars"><?php echo $erService; ?></span>

                                </div>

                                <div class="modal-footer">
                                    <input type="reset" value="Reset" class="btn btn-secondary">
                                    <?php
                                        if(!isset($id)) {
                                    ?>
                                        <input type="submit" value="Save Changes" class="btn btn-outline-dark addHotelForm" name="saveProvider">
                                    <?php    
                                        } 
                                    ?>
                                    <input type="submit" value="Save And Back" class="btn btn-dark addHotelForm" name="save&back">
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
<?php
include '../layout/footer.php';
