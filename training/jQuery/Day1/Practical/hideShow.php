<script src="../../jquery.js"></script>
<script>
    $(document).ready(function() {
        $("#helpText").mouseenter(function() {
            $("span").hide();
        })
        $("#helpText").mouseleave(function() {
            $("span").show();
        })
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
            <div class="p-md-5 text-center border border-solid shadow-lg border-primary ">
                <h5 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-2 jQuery
                    module1</h5>
                <h6 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    There is one Hide/show the text inside the #helpText span element when the user’s mouse
                    passes over the text</h6>
                <p id="helpText"><span class="mb-5 text-center">Hi! I am Nensi Darji. I am giving my 200% to
                        this training</span>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>