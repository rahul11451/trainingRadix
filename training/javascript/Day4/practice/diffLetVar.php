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
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-2 module4
                </h4>
                <p id="head" class="mb-5 text-center fw-bold text-decoration-underline text-primary">Explain
                    difference between var and let keyword using example.</p>
                <p id="demo"></p>

                <script>
                    var p = document.getElementById('demo');
                    var x = 5;
                    var y = 8;
                    p = (x + y);
                    document.write("This content variable declared using var keyword : <strong> 5+8 =" + p + "</strong><br>"); {
                        let p = (8 + 8);
                        document.write("This content variable declared using let keyword in function : <strong> 8+8=" + p + "</strong><br>");
                    }
                    document.write("This content is displayed outside the bracket : <strong>" + p + "</strong><br>");
                </script>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>