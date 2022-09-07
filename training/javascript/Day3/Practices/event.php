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
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Use the
                    eventListener to assign an onclick event to the button element.</h4>
                <button id="demo" class="px-5 py-2 mb-5 rounded-pill btn-outline-primary btn-white">click
                    me</button>
                <p id="demo1" class="mb-5 text text-primary"></p>
            </div>
            <script>
                document.getElementById("demo").addEventListener("click", () => {
                    document.getElementById("demo1").innerHTML = "i used event listener here";
                });
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>