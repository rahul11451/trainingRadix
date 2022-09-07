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
        <div class="row">
          <div class="col">Equal width</div>
          <div class="col">2</div>
          <div class="col">3</div>
          <div class="col">4</div>
          <div class="col">5</div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-6">setting one column (6 column width)</div>
          <div class="col-6">6 column</div>
          <div class="col-3">3 column</div>
          <div class="col-4">4 column</div>
          <div class="col-5">5 column</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("../../../footer.php");
?>