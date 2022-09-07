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
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Use the CSS display
                    property to hide the p element.</h4>
                <p id="demo" onclick="function1()" class="mb-5 text text-primary">Nensi</p>
                <p class="mb-5 text text-primary fw-bold">click on nensi to hiiden nensi text.</p>
            </div>
            <script>
                function function1() {
                    document.getElementById("demo").style.display = "none";
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>