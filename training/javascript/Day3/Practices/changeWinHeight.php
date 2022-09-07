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
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Try to change
                    windows height and width using Windows object.</h4>
                <button id="demo" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">click me to
                    create new page</button>
                <button id="" onclick="resize()" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">
                    click me to resized opened window</button>
            </div>
            <script>
                // var resize1
                document.getElementById("demo").addEventListener("click", () => {
                    resize1 = window.open("", "", "width=200, height=200");
                });

                function resize() {
                    resize1.resizeTo(500, 500)
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>