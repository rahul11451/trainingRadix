<style>
    body {
        overflow-x: hidden;
    }

    .main {
        margin-top: 140px;
        padding-bottom: 500px !important;
    }

    .main #data h5 {
        font-size: 20px;
    }

    .main #data h6 {
        font-size: 20px;
    }

    .nav-item:hover {
        font-weight: bolder;
    }

    .margin_nen {
        margin-left: 15% !important;
        /* margin-top: 10% !important; */
    }

    @media (max-width: 576px) {
        .main .d-sm-flex {
            display: flex;
        }
    }
</style>


<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 m-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-5 module5
                </h4>
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Using Function Apply
                    pass employee object to a function defined in the function.</p>
                <label for="">
                    <input type="text" class="border border-solid rounded borderborder-2 border-primary" placeholder="Name" id="name">
                    <br>
                    <br>
                    <input type="text" class="border border-solid rounded borderborder-2 border-primary" placeholder="address" id="address">
                    <br>
                    <br>
                    <input type="text" class="border border-solid rounded borderborder-2 border-primary" placeholder="designation" id="designation">
                    <br>
                    <br>
                    <button type="submit" name="submit" onclick="myFunction()" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">click me to show
                        nensi's detail</button>
                </label>
                <br>
                <br>
                <span id="result"></span>
            </div>
            <script>
                function myFunction() {
                    var employee = {
                        detail: function() {
                            return "Employee Name: <strong>" + Name + "</strong> <br> Employee Address: <strong>" +
                                Address + "</strong> <br> Employee Designation: <strong>" + Designation + "</strong> <br>";
                        }
                    }
                    var Name = document.getElementById('name').value;
                    var Address = document.getElementById('address').value;
                    var Designation = document.getElementById('designation').value;
                    document.getElementById('result').innerHTML = employee.detail.apply([Name, Address, Designation]);
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>