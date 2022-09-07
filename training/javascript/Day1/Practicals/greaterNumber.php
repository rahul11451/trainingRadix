
<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row vh-lg-100 mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 ps-lg-5 pt-4 column10">
            <div class="p-md-5 m-md-5 bg-white border rounded shadow-lg border-primary">
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Find greater number
                    among 3 numbers and Sum the all numbers which are greater than 40</p>

                <div class="text-center">
                    <button onclick="myFunction()" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">Click me to enter 3
                        numbers</button>
                    <p id="greater" class="text-primary"></p>
                    <p id="sum" class="text-primary"></p>
                </div>
            </div>
            <script>
                function findGreaterNumber(num1, num2, num3) {
                    var maximum = Math.max(num1, num2, num3);
                    document.getElementById('greater').innerHTML =
                                "Greatest number among 3 numbers is <strong>" + maximum + "</strong>.";
                }

                function findSum(num1, num2, num3) {
                    var arr = [num1, num2, num3];
                    let sum1 = 0;
                    for (let i = 0; i < arr.length; i++) {
                        if (arr[i] > 40) {
                            sum1 += parseInt(arr[i]);
                        } else {
                            continue;
                        }
                    }
                    document.getElementById('sum').innerHTML =
                        "Sum of all number which are greater than 40 is <strong>" + sum1 + "</strong>.";
                }

                function myFunction() {
                    var num1 = prompt("Please enter number1");
                    var num2 = prompt("Please enter number2");
                    var num3 = prompt("Please enter number3");
                    findGreaterNumber(num1, num2, num3);
                    findSum(num1, num2, num3);

                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>