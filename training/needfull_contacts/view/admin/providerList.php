<?php
include '../layout/filepath.php';
include '../../controller/providerList.php';
include '../layout/header.php';

?>
<section class="pt-5 admin-dashboard">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-lg-10">
            <div class="mx-5 px-4">
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
                                <a href="index.php" class="btn btn-dark px-5">BACK</a>
                            </div>
                        </div>


                        <!-- Data Add Part - Form -->
                        <div class="bg-white bg-opacity-75 rounded fw-bolder adminServiceForm">

                            <table id="display" class="table table-hover border rounded-3 shadow">
                                <thead class="table-dark opacity-75">
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Thumbnail</th>
                                        <th>Large Photo</th>
                                        <th>Buisness Name</th>
                                        <th>Contact Details</th>                                    
                                        <th>Address</th>
                                        <th>Services</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    echo $tableRow;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../../js/provider.js"></script>


<?php
include '../layout/footer.php';
