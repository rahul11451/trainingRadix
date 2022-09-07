    <link rel="stylesheet" href="practical2.css">
    <?php
    include("../../../header.php");
    ?>
    <div class="container-fluid">
        <div class="row mb-3">
            <?php
            include("../../sidebar.php");
            ?>
            <div class="col-lg-10 lg:ps-5 pt-4">
                <div class="content">
                    <div>
                        <h2>Position:fixed</h2>
                        <div class="fixed">
                            fixed division...
                        </div>
                        <br>
                        <h2>position:relative</h2>
                        <div class="relative">
                            relative division
                        </div>
                        <h2>position:static</h2>
                        <div class="static">
                            static division
                        </div>
                        <h2>position:absolute</h2>
                        <div class="absolute">
                            absolute division
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php
        include("../../../footer.php");
        ?>