<style>
    body {
        overflow-x: hidden;
    }

    .main {
        margin-top: 80px;
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
<script src="../../jquery.js"></script>
<script>
    $(document).ready(function() {
        $(".btn1").click(function() {
            $(".btn1").parent().css({
                "border": "2px solid blue",
                "margin": "10px"
            });
        });
        $(".btn2").click(function() {
            $(".btn2").parents().css({
                "border": "2px solid green",
                "margin": "10px",
                "color": "green"
            });
        });
        $(".btn3").click(function() {
            $(".btn3").parentsUntil(".nen").css({
                "border": "2px solid green",
                "margin": "10px",
                "color": "green"
            });
        });
    })
</script>
<?php
include("../../../header.php");
?>

<div class="container-fluid">
    <div class="row vh-lg-100 mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 text-center border border-solid shadow-lg nen border-primary">
                <div class="">
                    <h5 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-1
                        jQuery module2</h5>
                    <h6 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                        Traversing-ancestors
                    </h6>
                    <div class="p-3">
                        <p class="mb-5 text-center">Hi! I am Nensi Darji. I am giving my 200% to this training
                        </p>
                        <button class="px-md-5 py-md-2 btn1 mb-3  rounded-pill btn-outline-primary btn-white">click me to
                            show my parent</button>
                        <button class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white btn2">click me to
                            show my parents</button>
                        <br><br>
                        <button class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white btn3">click me to
                            show my parents</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>