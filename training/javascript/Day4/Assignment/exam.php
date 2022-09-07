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
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Exam 2022</h1>
                    <div class="text-start">
                        <label>
                            EmployeeId: <input type="text" placeholder="SttudentId" value="" id="studentId" class="border border-solid rounded borderborder-2 border-primary">
                        </label><br>
                        <br>
                        <label>
                            EmployeeName: <input type="text" placeholder="Name" value="" id="studentName" class="border border-solid rounded borderborder-2 border-primary">
                        </label><br>
                        <br>
                        <p id="demo">Who is our Prime Minister of the India?</p>
                        <input type="radio" name="option" id="">A Mrs. Darji
                        <br>
                        <input type="radio" name="option" id="">B Mr. Modi
                        <br>
                        <input type="radio" name="option" id="">C Mrs. Modi
                        <br>
                        <input type="radio" name="option" id="">D Mr. Darji
                        <br>
                        <br>
                        <button id="submit" class="px-5 py-2 mb-5 rounded-pill btn-outline-primary btn-white">submit</button>
                    </div>
            </div>
            <span id="Id"></span>
            <script>
                setTimeout(valid, 3000);

                function valid() {
                    var display = document.getElementById('submit');
                    display.disabled = true;
                    display.style.backgroundColor = "green";
                    display.style.color = "white";
                    alert("Hope you had a good exam!!");
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>