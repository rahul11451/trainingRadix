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
        <h4>wrapping</h4>
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
      </div>
      <div class="container">
        <h4>Sizing</h4>
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
      <br>
      <div class="container">
        <h4>multiple inputs</h4>
        <div class="input-group">
          <span class="input-group-text">First and last name</span>
          <input type="text" aria-label="First name" class="form-control">
          <input type="text" aria-label="Last name" class="form-control">
        </div>
      </div>
      <br>
      <div class="container">
        <h4>custom file input</h4>
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">Upload</label>
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>

        <div class="input-group mb-3">
          <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
          <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
        </div>

        <div class="input-group">
          <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
          <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("../../../footer.php");
?>