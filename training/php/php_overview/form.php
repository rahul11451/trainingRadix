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
                <h5 class="mb-3 text-center fw-bold text-decoration-underline text-primary">Registration Form</h5>
                <div class="ms-5">
                    <form method="get">
                        <label class="mb-2 form-group">FirstName:</label>
                        <br>
                        <input type="text" class="mb-2 border-2 border-solid rounded border-primary form-control" placeholder="First Name" value="" id="fname" name="" required>
                        <br>
                        <label class="mb-2 form-group">LastName:</label>
                        <br>
                        <input type="text" class="mb-2 border-2 border-solid rounded border-primary form-control" placeholder="Last Name" value="" id="lname" name="">
                        <br>
                        <label class="mb-2 form-group">Password:</label>
                        <br>
                        <input type="password" class="mb-2 border-2 border-solid rounded border-primary form-control" placeholder="password" value="" id="pass" name="">
                        <br>
                        <label class="mb-2">Date of Birth:</label> 
                        <br>
                        <input class="mb-2 border-2 border-solid rounded border-primary form-control" type="text" value="" name=date1 placeholder="MM-DD-YYY" id="date1">
                        <br>
                        <label class="mb-2">Age: </label>
                        <br> 
                        <input class="mb-2 border-2 border-solid rounded border-primary form-control" type="number" placeholder="age" value="" id="age">
                        <br>
                        <label class="mb-2 form-group">Address:</label>
                        <br>
                        <input type="text" class="mb-2 border-2 border-solid rounded border-primary form-control" placeholder="Last Name" value="" id="add" name="">
                        <br>
                        <label class="mb-2">Zipcode/Postcode: </label>
                        <br>
                        <input class="mb-2 border-2 border-solid rounded border-primary form-control" type="text" value="" id="code" placeholder="pincode">
                        <br>
                        <label class="mb-2">City: </label>
                        <br>
                        <input class="mb-2 border-2 border-solid rounded border-primary form-control" type="text" value="" id="city" placeholder="city">
                        <br>
                        <label class="mb-2">State: </label>
                        <br>
                        <input class="mb-2 border-2 border-solid rounded border-primary form-control" type="text" value="" id="state" placeholder="state">
                        <br>
                        <label class="mb-2">Country: </label>
                        <br>
                        <input class="mb-2 border-2 border-solid rounded border-primary form-control" type="text" value="" id="country" placeholder="country">
                        <br>
                        <label class="mb-2">Email: </label>
                        <br>
                        <input class="mb-2 border-2 border-solid rounded border-primary form-control" type="email" value="" id="email" placeholder="email">
                        <br>
                        <label class="mb-2">Contact Number: </label>
                        <br>
                        
                        <input type="tel" value="" placeholder="phone no" id="number" class="mb-2 border-2 border-solid rounded border-primary form-control">
                        <br>
                        <label class="mb-2">Website: </label>
                        <br>
                        <input type="url" value="" placeholder="website url" id="website" class="mb-2 border-2 border-solid rounded border-primary form-control">
                        <br>
                        <button type="button" class="px-lg-5 py-lg-1 mt-3 rounded-pill btn-outline-primary btn-white" id="submit" onclick="validate()">submit</button>
                        <a href="login.php" class="text-decoration-none"><button type="button" class="px-lg-5 py-lg-1 mt-3 rounded-pill btn-outline-primary btn-white">
                        Already User? Click me</button></a>
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
<script src="valid.js"></script>

<?php
include("../../footer.php");
?>