<script src="../../jquery.js"></script>
<script>
    $(document).ready(function() {
        var data = {
            '1': ["INDIA"],
            '2': ["UK"],
            '3': ["USA"],
            '4': ["DUBAI"],
            '5': ["CHINA"]
        };
        var select = $('#country');
        var span1 = $("#span1");
        var option, span, result;
        $.each(data, function(index, val) {
            option = $('<option value= "' + val + '">' + val + '</option>');
            span = $('<span>' + data[index] + '</span>').css("margin-right", "10px").css("color", "blue").css("font-weight", "bold");
            span1.append(span);
            select.append(option[0]);
            select.click(function() {
                if (select.val() == "default") {
                    span1.show();
                    result.hide();
                } else {

                    result = $("#answer").text(select.val()).css("margin-right", "10px").css("color", "blue").css("font-weight", "bold");
                    result.show();
                    $("#span1").hide();
                }
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
            <div class="p-md-5 text-center border border-solid shadow-lg border-primary ">
                <h5 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Assignment-1 jQuery module1
                </h5>
                <h6 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Put a droplist with 5 country name from list object using jquery
                </h6>
                <label for="" class="pe-3 option text-primary fw-bold">
                    Select country: <select name="" id="country" class="ms-3 option text-primary border-primary">
                        <option value="default">Please Select</option>
                    </select>
                </label>
                <br><br>
                <label id="label1" for="" class="">
                    Your Selected country: <span id="span1"></span>
                    <span id="answer"></span>
                </label>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>