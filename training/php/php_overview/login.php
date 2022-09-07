<?php
include("../../header.php");
$paths = '/php/';
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 ps-lg-5 pt-3 column10">
            <div class="p-md-2 bg-white border rounded shadow-lg border-primary">
                <h5 class="mb-3 text-center fw-bold text-decoration-underline text-primary">Login</h5>
                <div class="ms-5">
                <form>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text"><em class="fa fa-envelope"></em></span>
                            <input type="email" class="form-control" placeholder="Email" id="email" value="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text"><em class="fa fa-pencil"></em></span>
                            <input type="password" class="form-control" placeholder="Password" id="pass" value="">
                        </div>
                    </div>
                    <br>
                    <div class="d-grid text-center">
                        <input type="submit" value="submit" class="btn btn-secondary btn-lg" onclick="validate()">
                        <a href="form.php" class="text-decoration-none"><button type="button" class="px-lg-5 py-lg-1 mt-3 rounded-pill btn-outline-primary btn-white">
                        Already User? Click me</button></a>
                    </div>
                </form>
                </div>
            </div>
            <div class="d-sm-flex justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_overview/detail.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-5">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/calculater.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-5">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="validLogin.js"></script>

<?php
include("../../footer.php");
?>