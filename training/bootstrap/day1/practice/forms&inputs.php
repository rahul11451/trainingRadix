<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row vh-lg-100">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4">
            <div class="container">
                <h4>form text</h4>
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    form text.
                </div>
            </div>
            <br>
            <div class="container">
                <h4>Dsiable</h4>
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                    form text.
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("../../../footer.php");
?>