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
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create an application for performing basic math operations like Addition, Subtraction,
                    Multiplication and
                    Division.
                </p>
                <div class="m-lg-5 m-2 screen">
                    <form name="form1">
                        <label for="">Please enter first number:
                            <input type="text" class="border border-solid rounded borderborder-2 border-primary" name="num1" value="" id="num1" required>
                            <p id="error1"></p>
                        </label>
                        <br>
                        <label for="">Please enter second number:
                            <input type="text" name="num2" id="num2" required class="border border-solid rounded borderborder-2 border-primary">
                            <p id="error2"></p>
                        </label>
                        <br>
                        <label for="" id="operations">Please select operation you want to perform:</label>
                        <input type="radio" name="radio" value="add">Addition
                        <input type="radio" name="radio" value="sub">Subtraction
                        <input type="radio" name="radio" value="mul">Multiplication
                        <br>
                        <input type="radio" name="radio" value="div">Division
                        <br>
                        <br>
                        <button class="px-3 py-2 rounded-pill btn-primary" type="button" onclick="calculater()">Calculate</button>
                        <button type="button" class="px-4 py-2 rounded-pill btn-primary" onclick="reset()">Reset</button>
                        <br>
                        <br>
                        <label for="" name="result">Result is:
                            <span id="result"></span>
                        </label>
                    </form>
                </div>
                <script>
                    function reset() {
                        let screenvalue = '';
                        let screen = document.getElementsByName('screen');
                        let screen1 = document.getElementsById('result');
                        screen = screenvalue;
                        screen1 = screenvalue;
                    }

                    function calculater() {
                        let number1 = Number(num1.value);
                        let number2 = Number(num2.value);
                        let operation = document.getElementsByName('radio');
                        // for checking numbers are must be number
                        if (isNaN(number1)) {
                            document.getElementById('error1').innerHTML = "please enter number in first text box.";
                        }
                        if (isNaN(number2)) {
                            document.getElementById('error2').innerHTML = "please enter number in second text box.";
                        }


                        // operation

                        for (var radio of operation) {
                            if (radio.checked) {
                                values = radio.value;
                            }
                        }

                        if (values == "add") {
                            result = number1 + number2;
                        } else if (values == "sub") {
                            result = number1 - number2;
                        } else if (values == "mul") {
                            result = number1 * number2;
                        } else {
                            result = number1 / number2;
                        }
                        document.getElementById('result').innerHTML = "<strong>" + result + "</strong>";
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>