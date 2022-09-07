<script src="../../jquery.js"></script>
<script>
    $(document).ready(function() {
        $(".btn1").click(function() {
            $(".p1").siblings().css({
                "border": "2px solid blue",
                "margin": "10px"
            });
        });
        $(".btn2").click(function() {
            $(".p1").next().css({
                "border": "2px solid green",
                "margin": "10px"
            });
        });
        $(".btn3").click(function() {
            $(".p1").nextAll().css({
                "border": "2px solid yellow",
                "margin": "10px"
            });
        });
        $(".btn4").click(function() {
            $(".p2").prev().css({
                "border": "2px solid red",
                "margin": "10px"
            });
        });
        $(".btn5").click(function() {
            $(".p2").prevAll().css({
                "border": "2px solid black",
                "margin": "10px"
            });
        });
        $(".btn6").click(function() {
            $(".p2").prevUntil("h5").css({
                "border": "2px solid brown",
                "margin": "10px"
            });
        });
    })
</script>
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

<?php
include("../../../header.php");
?>

<div class="container-fluid">
    <div class="row vh-lg-100 mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 text-center border border-solid shadow-lg nen border-primary ">
                <h5 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-3 jQuery
                    module2</h5>
                <h6 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Traversing-siblings
                </h6>
                <p class="mb-5 text-center p1">Hi! I am Nensi Darji. I am giving my 200% to this training</p>
                <p class="p2">i am next to above paragraph</p>
                <div class="p-3">
                    <button class="px-md-5 py-md-2 btn1 rounded-pill btn-outline-primary btn-white">click me to show
                        my all sibligs</button>
                    <button class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white btn2">click me to show
                        my next sibling</button>
                    <br><br><button class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white btn3">click me
                        to show my next all sibling</button>
                    <button class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white btn4">click me to show
                        my previous sibling</button>
                    <br><br><button class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white btn5">click me
                        to show my prev all sibling</button>
                    <button class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white btn6">click me to show
                        my prev sibling untill h5</button>
                </div>
            </div>
        </div>
    </div>
</div>