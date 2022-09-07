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
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Date entered by the
                    user should be checked for whether it is a Valid Date or not.</p>
                <label for="">Date:
                    <input type="text" placeholder="MM-DD-YYYY" name="date1" value="" id="date1" class="border border-solid rounded borderborder-2 border-primary">
                    <span id="error1"></span>
                    <br>
                    <br>
                    <button type="button" name="date" onclick="date()" class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white">Click me to see date is
                        valid or not</button>
                    <br>
                    <br>
                    <span id="error2"></span>
                    <span id="error3"></span>
                </label>
            </div>
            <script>
                function date() {
                    let enterrdDate = document.getElementById('date1').value;
                    let pattern = /\d\d-\d\d-\d\d\d\d/;
                    if (pattern.test(enterrdDate)) {
                        date1 = enterrdDate.split("-");

                        if (date1.length == 3) {
                            month = parseInt(date1[0]);
                            day = parseInt(date1[1]);
                            year = parseInt(date1[2]);
                            if (month == 2) {
                                if (year % 400 === 0 && year % 4 === 0) {
                                    if (day < 1 || day > 29) {
                                        document.getElementById('error3').innerHTML = "Leap Febuary has day between 1 to 29";
                                    }
                                } else {
                                    if (day < 1 || day > 28) {
                                        document.getElementById('error3').innerHTML = "Febuary has day between 1 to 29";
                                    }
                                }
                            } else if (month < 1 || month > 12) {
                                document.getElementById('error2').innerHTML = "please enter month between 01 to 12";
                            } else if (day < 1 || day > 31) {
                                document.getElementById('error3').innerHTML = "please enter day between 01 to 31";
                            } else {
                                document.getElementById('error2').innerHTML = "valid date";
                            }

                        } else {
                            document.getElementById('error2').innerHTML = "Please enter month day and year date";
                        }
                    } else {
                        document.getElementById('error2').innerHTML = "please enter digits";
                    }

                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>