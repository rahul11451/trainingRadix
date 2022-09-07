<script src="../../jquery.js"></script>
<script>
    $(document).ready(function() {
        $(".option").click(function() {
            $("span").text($('input[name=tech]:checked').val());
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
            <div class="p-md-5 text-center border border-solid shadow-lg border-p ">
                <h5 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-3 jQuery
                    module1</h5>
                <h6 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Clicking on a particular radio button should display the related technology name besides
                    label : “You have
                    selected : ".
                </h6>
                <label for="" class="me-3 fw-bold text-primary">
                    Please select your technology:
                </label>
                <label class="me-3 option text-primary"><input type="radio" name="tech" class="php" value="PHP">PHP</label>
                <label class="me-3 option text-primary"><input type="radio" name="tech" class="net" value="ASP.NET">ASP.NET</label>
                <label class="me-3 option text-primary asp"><input type="radio" name="tech" value="ASP">ASP</label>
                <label class="me-3 option text-primary jsp"><input type="radio" name="tech" value="JSP">JSP</label>
                <label class="me-3 option text-primary perl"><input type="radio" name="tech" value="PERL">PERL</label>
                <label class="me-3 option text-primary cold"><input type="radio" name="tech" value="COLD FUSION">Cold
                    Fusion</label>
                <label class="me-3 option text-primary other"><input type="radio" name="tech" value="OTHER">Other</label>
                <br>
                <br>
                <label for="" class="fw-bold">You have Selected: <span class="fw-bolder text-primary"></span></label>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>