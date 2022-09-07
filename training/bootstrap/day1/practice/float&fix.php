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
                <h5>float and fixes</h5>
                <p class="float-start">Nensi darji start</p><br>
                <p class="float-end">Nensi darji end</p><br>
                <p class="float-none">Nensi darji none</p>
                <br>
                <p class="float-sm-start">Nensi darji start sm</p><br>
                <p class="float-md-start">Nensi darji start md</p><br>
                <p class="float-lg-start">Nensi darji start lg</p><br>
                <p class="float-xl-start">Nensi darji start xl</p><br>
                <br>
                <p class="float-sm-end">Nensi darji end sm</p><br>
                <p class="float-md-end">Nensi darji end md</p><br>
                <p class="float-lg-end">Nensi darji end lg</p><br>
                <p class="float-xl-end">Nensi darji end xl</p><br>
                <br>
                <p class="float-sm-none">Nensi darji none sm</p><br>
                <p class="float-md-none">Nensi darji none md</p><br>
                <p class="float-lg-none">Nensi darji none lg</p><br>
                <p class="float-xl-none">Nensi darji none xl</p><br>
                <p class="fixed-bottom bg-danger">fixed bottom</p><br>
                <p class="sticky-top bg-success">sticky top</p>
            </div>
            <div class="bg-warning clearfix">
                <p class="float-start">Nensi darji</p><br>
                <p class="float-end">nensi darji</p>
            </div>
        </div>
    </div>
</div>

<?php
include("../../../footer.php");
?>