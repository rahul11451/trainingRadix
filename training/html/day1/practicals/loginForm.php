<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 ">
            <h1><strong><em><u> Login User </u></em> </strong></h1>
            <hr>
            <div class="form">
                <form action="">
                    <label for="Username">
                        Username:<input type="text" placeholder="email or number"></label>
                    <br>
                    <label for="password">
                        password: <input type="text" placeholder="password"> </label>
                    <br>
                    <button>
                        submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>