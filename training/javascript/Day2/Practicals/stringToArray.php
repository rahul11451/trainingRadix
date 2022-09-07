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
    <div class="row vh-lg-100 mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 m-md-5 text-center border border-solid shadow-lg border-primary ">
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Write a JavaScript
                    function to split a string and convert it into an array of words</p>
                <label for="">Type any text here
                    <input type="text" id="text" value="" class="border border-solid mb-2 rounded borderborder-2 border-primary">
                    <button type="submit" name="submit" onclick="splitString()" class="px-5 py-2 rounded-pill btn-outline-primary btn-white">submit</button>
                </label>
                <br>
                <br>
                <label for="">New array is: <span id="result"></span></label>
            </div>
            <script>
                function splitString() {
                    let text = document.getElementById('text').value;
                    let arr = text.split("");
                    result = "";
                    for (var i = 0; i < arr.length; i++) {
                        result += arr[i] + ",";
                    }
                    document.getElementById('result').innerHTML = "[" + result + "]";
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>