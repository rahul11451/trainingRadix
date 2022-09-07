<?php
include("../../../header.php");
?>
<div class="container-fluid">
  <div class="row vh-lg-100">
    <?php
    include("../../sidebar.php");
    ?>
    <div class="col-lg-10 lg:ps-5 pt-4">
      <h4>Alert icon</h4>
      <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="flex-shrink-0 bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
      </div>
      <br>
      <hr>
      <h1>progress bar</h1>
      <div>
        <h4>labels</h4>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
      </div>
      <br>
      <div>
        <h4>height</h4>
        <div class="progress" style="height: 10px;">
          <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
      </div>
      <br>
      <div>
        <h4>background</h4>
        <div class="bg-black progress">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
      </div>
      <br>
      <div>
        <h4>Multiple bar</h4>
        <div class="progress" style="height: 10px;">
          <div class="progress-bar bg-gradient" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
          <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
        </div>
      </div>
      <br>
      <div>
        <h4>striped</h4>
        <div class="progress">
          <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
      </div>
      <br>
      <div>
        <h4>animated</h4>
        <div class="progress">
          <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("../../../footer.php");
?>