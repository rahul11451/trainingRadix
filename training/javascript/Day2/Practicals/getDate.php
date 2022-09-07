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
                    function to get the current date</p>
                <label for="">
                    <button type="button" name="date" onclick="date()" class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white">Click me to get today's
                        date</button>
                </label>
                <br>
                <br>
                <label for="">Today's date is: <span id="result"></span></label>
            </div>
            <script>
                function date() {
                    var date = new Date();
                    currentDate = date.getDate();
                    currentMonth = date.getMonth();
                    currentYear = date.getFullYear();
                    document.getElementById('result').innerHTML = "<strong>" + currentDate + "-" + currentMonth + "-" + currentYear + "</strong>";
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>