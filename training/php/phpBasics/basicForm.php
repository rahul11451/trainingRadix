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
                <h5 class="mb-3 text-center fw-bold text-decoration-underline text-primary">Basic Form</h5>
                <div class="ms-5">
                    <form method="post">
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text"><em class="fa fa-user"></em></span>
                                <input type="text" class="form-control" placeholder="Full name" id="name" name="name" <?php $name = $_POST['name']; echo "value='$name'"; ?>>
                            </div>
                            <span class="text-danger"><?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                    if (empty($_POST['name']) || !preg_match('/[a-zA-Z]/',$_POST['name'])) {
                                        echo 'enter text';
                                    }
                                } ?></span>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text"><em class="fa fa-user"></em></span>
                                <input type="text" class="form-control" placeholder="User Name" id="Uname" <?php $uName = $_POST['uName']; echo "value='$uName'"; ?> name="uName">
                            </div>
                                <span class="text-danger"><?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                    if (empty($_POST['uName']) || !preg_match('/[a-zA-Z]/',$_POST['uName'])) {
                                        echo 'enter text';
                                    }
                                } ?></span>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text"><em class="fa fa-envelope"></em></span>
                                <input type="email" class="form-control" name="email" placeholder="Email" id="email" <?php $email = $_POST['email'];echo "value='$email'"; ?>>
                            </div>
                                <span class="text-danger"><?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                    if (empty($_POST['email'])) {
                                        echo 'enter email';
                                    }
                                } ?></span>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="border p-3 w-100 rounded">
                                Gender:
                                <br>
                                Male<input type="radio" class="me-4 form-check-input" id="" value="male" name="gender" <?php if ($_POST['gender'] == 'male') { echo "checked";} ?>>
                                Female<input type="radio" class="me-4 form-check-input" id="" value="female" name="gender" <?php if ($_POST['gender'] == 'female') { echo "checked"; } ?>>
                                Other<input type="radio" class="me-4 form-check-input" id="" value="other" name="gender" <?php if ($_POST['gender'] == 'other') { echo "checked"; } ?>>
                            </label>
                                <span class="text-danger"><?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                    if (empty($_POST['gender'])) {
                                        echo 'select gender';
                                    }
                                } ?></span>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="border p-3 w-100 rounded">
                                Birth date:
                                <select name="date" id="" class="me-5 form-select mb-3">
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                    ?>
                                        <option <?php if ($_POST['date'] == $i) {
                                                    echo 'selected';
                                                } ?> value=<?php echo $i ?>><?php echo $i ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                                Birth Month:
                                <select name="month" id="" class="me-5 form-select mb-3">
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                    ?>
                                        <option <?php if ($_POST['month'] == $i) {
                                                    echo 'selected';
                                                } ?> value=<?php echo $i ?>><?php echo $i ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                Birth Year:
                                <select name="year" id="" class="me-5 form-select mb-3">
                                <?php
                                for ($i = 1900; $i <= 2022; $i++) {
                                ?>
                                    <option <?php if ($_POST['year'] == $i) {
                                                echo 'selected';
                                            } ?> value=<?php echo $i ?> name="nen"><?php echo $i ?></option>
                                <?php
                                }
                                ?>
                                </select>
                            </label>
                        </div>
                        <br>
                        <div class="d-grid text-center">
                            <input type="submit" value="submit" class="btn btn-primary btn-lg">
                        </div><br>
                        <div class="d-grid text-center">
                            <input type="reset" value="reset" class="btn btn-primary btn-lg">
                        </div>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $name = $_POST['name'];
                        $useName = $_POST['uName'];
                        $email = $_POST['email'];
                        $gender = $_POST['gender'];
                        $date = $_POST['date'];
                        $month = $_POST['month'];
                        $year = $_POST['year'];
                        if(!empty($name) && !empty($useName) && !empty($email) && !empty($gender) && !empty($date) && !empty($month) && !empty($year))
                        {
                        echo '<div class=" my-5">Name: <span class="text-primary">' . $name . '</span><br>User Name: <span class="text-primary">' . $useName . '</span><br>Email: <span class="text-primary">' . $email . '</span><br>Gender: <span class="text-primary">' . $gender . '</span><br>Birth Date: <span class="text-primary">' . $date . '</span><br>Birth Month: <span class="text-primary">' . $month . '</span><br>Birth Year: <span class="text-primary">' . $year . '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/reverseInteger.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/serverIpAddress.php" class="text-white">
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