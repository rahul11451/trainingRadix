<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row vh-lg-100">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4">
            <div class="container-fluid">
                <p class="text-center">text center</p>
                <p class="text-sm-center">sm text center</p>
                <p class="text-md-center">md text center</p>
                <p class="text-lg-center">lg text center</p>
                <p class="text-xl-center">xl text center</p>
            </div>
            <span class="align-baseline">baseline</span>
            <span class="align-top">top</span>
            <span class="align-bottom">align bottom</span>
            <span class="align-middle">align middle</span>
            <br>
            <span class="align-text-top">align text top</span>
            <span class="align-text-bottom">align text bottom</span>
            <br>
            <h5 class="d-inline bg-warning">Nensi</h5>
            <h5 class="d-inline bg-warning">Darji</h5>
            <br>
            <h5 class="d-block bg-warning">Nensi</h5>
            <h5 class="d-block bg-warning">Darji</h5>
        </div>
    </div>
</div>

<?php
include("../../../footer.php");
?>