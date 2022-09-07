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
        <h4>simple navbar</h4>
        <nav class="navbar navbar-expand-sm navbar-dark bg-secondary mb-3" aria-label="menubar">
          <div class="container">
            <a class="navbar-brand" href="#">Radix</a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container">
        <h4>responsive navbar with toggle </h4>
        <nav class="navbar sidebar navbar-expand-sm navbar-light bg-light" aria-label="practice">
          <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <br>
      <div class="container">
        <h4>navbar with form</h4>
        <nav class="navbar navbar-light bg-light" aria-label="navbarwithform">
          <div class="container-fluid">
            <form class="d-flex">
              <input class="form-control me-2" type="email" placeholder="email" aria-label="email">
              <button class="btn btn-outline-success" type="submit">submit</button>
            </form>
          </div>
        </nav>
      </div>
      <div class="container">
        <h4>colors</h4>
        <nav class="navbar text-light bg-dark" aria-label="colors">
          <!-- Navbar content -->
          <p>nensi</p>
        </nav>

        <nav class="navbar navbar-dark bg-primary" aria-label="contents">
          <!-- Navbar content -->
          <p>sanjykumar</p>
        </nav>

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;" aria-label="contents2">
          <!-- Navbar content -->
          <p>darji</p>
        </nav>
      </div>
      <div class="container">
        <h4>placements</h4>
        <nav class="navbar sticky-top navbar-light bg-light" aria-label="pose">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Sticky top</a>
          </div>
        </nav>
      </div>
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark" aria-label="try">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </div>
  </div>
</div>

<?php
include("../../../footer.php");
?>