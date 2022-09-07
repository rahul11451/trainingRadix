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
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-1 module4
                </h4>
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Define a function
                    called callback which receives an argument and prints the square of that number</p>
                <input type="number" id="square" placeholder="type number" value="" name="square" class="mb-2 border border-solid rounded borderborder-2 border-primary">
                <button onclick="myFunction()" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">click me to find square of
                    your typed number</button>
                <span id="result"></span>
            </div>
            <script>
                function myFunction() {
                    let number = document.getElementById('square').value;
                    calculate(number, callback);
                }

                function callback(result) {
                    alert("your answer is: " + result);
                }

                function calculate(number, callback) {
                    var result = number ** 2;
                    callback(result);
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>