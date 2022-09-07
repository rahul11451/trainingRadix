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
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-lg-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Picture verification
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <img src="../../Images/car.jpeg" alt="car" class="img-fluid">
                    <br>
                    <br>
                    <p>What is the name of above car brand?</p>
                    <form action="" method="POST">
                        <label for="" class="text-primary">
                            lamborghini: <input type="radio" name="car" value="lamborghini" class="me-3 border border-primary rounded form-check-input" <?php if($_POST['car']=='lamborghini') {echo 'checked';} ?> required>
                        </label>
                        <label for="" class="text-primary">
                            FERRARI: <input type="radio" name="car" value="ferrari" class="me-3 border border-primary rounded form-check-input" <?php if($_POST['car']=='ferrari') {echo 'checked';} ?> >
                        </label>
                        <label for="" class="text-primary">
                            Mastang: <input type="radio" name="car" value="mastang" class="me-3 border border-primary rounded form-check-input" <?php if($_POST['car']=='mastang') {echo 'checked';} ?> >
                        </label>
                        <label for="" class="text-primary">
                            Tesla : <input type="radio" name="car" value="tesla" class=" me-3 border border-primary rounded form-check-input" <?php if($_POST['car']=='tesla') {echo 'checked';} ?> >
                        </label>
                        <br><br>
                        <input value="submit" type="submit" name="submit" class="btn-outline-primary btn">
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $choice = $_POST['car'];
                        // (float)$height = $_POST['height'];
                        if ($choice == 'lamborghini') {
                            echo '<h1 class="mb-5 text-center text-primary"> Congratulation you are human </h4>';
                        } else {
                            echo '<h1 class="mb-5 text-center text-primary"> sorry! you may not human </h4>';
                        }
                    }
                    // $result =  $weight/($height**2);
                    // echo '<h1 class="mb-5 text-center text-primary"><span class="text-decoration-underline "> BMI of : </span>' . $result .  '</h1>';
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/bmi.html" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/getDate.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include("../../footer.php");
?>