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
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-2 module6
                </h4>
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Keep above JSON Data
                    into a file, using Web Fetch API read that data.</p>
                <label for="">
                    <button type="submit" name="submit" onclick="myFunction()" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">click me to show the
                        result</button>
                </label>
                <br>
                <br>
                <span id="result" class="text-primary"></span>
                <script type="text/javascript">
                    function myFunction() {
                        getText("Detail.json");
                        async function getText(file) {
                            let detail = await fetch(file);
                            let result = await detail.text();
                            document.getElementById('result').innerHTML = result;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <?php
    include("../../../footer.php");
    ?>