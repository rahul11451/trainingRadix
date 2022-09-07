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
            <div class="p-md-5 m-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-1 module6
                </h4>
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Explain Function
                    closure with practical.</p>
                <label for="">
                    <button type="submit" name="submit" onclick="myFunction()" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">click me to show the
                        result in consol</button>
                </label>
                <br>
                <br>
                <span id="result"></span>
            </div>
            <script>
                function myFunction() {
                    var detailjson = '{ “products” :\
                    [{ “Name”: “Cheese”, “Price” : 2.50, “Location”: “Refrigerated foods”},\
                    { “Name”: “Crisps”, “Price” : 3, “Location”: “the Snack isle”},\
                    { “Name”: “Pizza”, “Price” : 4, “Location”: “Refrigerated foods”},\
                    { “Name”: “Chocolate”, “Price” : 1.50, “Location”: “the Snack isle”},\
                    { “Name”: “Self-raising flour”, “Price” : 1.50, “Location”: “Home baking”},\
                    { “Name”: “Ground almonds”, “Price” : 3, “Location”: “Home baking”}\
                ]}';
                    localStorage.setItem("details", detailjson);
                    var result = localStorage.getItem("details");
                    console.log(result);
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>