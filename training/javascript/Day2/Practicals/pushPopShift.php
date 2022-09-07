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
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Try some operation
                    with list like push, pop, shifting, deleting element.</p>
                <label for="">Write length number of array
                    <input type="number" id="number" value="" class="border border-solid rounded borderborder-2 border-primary">
                    <br>
                    <br>
                    <button type="button" name="button" onclick="array()" class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white">click me to push data in
                        array</button>
                </label>
                <br><br>
                <span id="result"></span>
                <br><br>
                <span id="result1"></span>
                <br><br>
                <span id="result2"></span>
                <br><br>
                <span id="result3"></span>
                <br><br>
                <span id="result4"></span>
                <br><br>
                <span id="result5"></span>
            </div>
            <script>
                function array() {
                    let number = document.getElementById('number').value;
                    var data = new Array();
                    for (let i = 0; i < number; i++) {
                        data.push(prompt("enter your data"));
                    }
                    document.getElementById('result').innerHTML = "array with pushed data: <strong>" + data + "</strong>";

                    // pop
                    pop_data = data.pop()
                    document.getElementById('result1').innerHTML = "poped data: <strong>" + pop_data + "</strong>";
                    document.getElementById('result2').innerHTML = "array after poping: <strong>" + data + "</strong>";

                    // shift
                    shift_data = data.shift()
                    document.getElementById('result3').innerHTML = "shifted data: <strong>" + shift_data + "</strong>";
                    document.getElementById('result4').innerHTML = "array after shifting: <strong>" + data + "</strong>";

                    // shift
                    delete data[1];
                    document.getElementById('result5').innerHTML = "deleted data: <strong>" + data[1] + "</strong>";
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>