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
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Write a JavaScript
                    function to extract a specified number of characters from a string.</p>
                <label for="">Type any text here
                    <input type="text" id="text" value="" class="border border-solid rounded borderborder-2 border-primary">
                    <br><br>
                    <button type="submit" name="submit" onclick="characterAt()" class="px-md-5 py-md-2 rounded-pill btn-outline-primary btn-white">click me to find specified
                        character</button>
                </label>
                <br>
                <br>
                <span id="result"></span>
                <br>
                <br>
                <span id="result1"></span>
            </div>

            <script>
                function characterAt() {
                    let text = document.getElementById('text').value;
                    document.getElementById('result').innerHTML = "text you enteed: <strong>" + text + "</strong>";

                    let number = prompt("Enter number of character which you want to retrive");
                    document.getElementById('result1').innerHTML = "character at specified number is: <strong>" + text.charAt(number) + "</strong>"
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>