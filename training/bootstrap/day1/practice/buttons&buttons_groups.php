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
        <h4>Buttons and Buttons Groups</h4>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-danger">danger</button>
        <button type="button" class="btn btn-success">success</button>
        <button type="button" class="btn btn-info">info</button>
        <button type="button" class="btn btn-warning">warning</button>
        <button type="button" class="btn btn-light">light</button>
        <button type="button" class="btn btn-dark">dark</button>
        <button type="button" class="btn btn-link">button link</button>
      </div>
      <br>
      <br>
      <div class="container-fluid">
        <a href="#" class="btn btn-dark">Link turn in btn</a>
        <input type="button" value="submit" class="btn btn-secondary">
        <input type="button" value="input" class="btn btn-secondary">
        <input type="button" value="reset" class="btn btn-secondary">
      </div>
      <br>
      <div class="container-fluid">
        <h4>Outlines Button</h4>
        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-danger">danger</button>
        <button type="button" class="btn btn-outline-success">success</button>
        <button type="button" class="btn btn-outline-info">info</button>
        <button type="button" class="btn btn-outline-warning">warning</button>
        <button type="button" class="btn btn-outline-light">light</button>
        <button type="button" class="btn btn-outline-dark">dark</button>
      </div>
      <div class="container">
        <h3>button sizes</h3>
        <button class="btn btn-lg btn-primary">large button</button>
        <button class="btn btn-sm btn-info">small button</button>
      </div>
      <div class="container">
        <h4>button states</h4>
        <button class="btn btn-success" type="button">Button</button>
        <button class="btn btn-success active" type="button">Active Button</button>
        <button class="btn btn-success disabled" type="button">Disabled Button</button>
        <button class="btn btn-success" type="button" data-toggle="button">Toggle button</button>
      </div>
      <br>

      <div class="input-group mb-3">
        <h4>Drop-down buttons</h4>
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
      </div>

      <div class="input-group">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action before</a></li>
          <li><a class="dropdown-item" href="#">Another action before</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="../practice/buttons&buttons_groups.html">Separated link</a></li>
        </ul>
      </div>
      <br>
      <div class="container">
        <h4>split dropdown</h4>
        <div class="input-group mb-3">
          <button type="button" class="btn btn-outline-secondary">Action</button>
          <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
          <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
        </div>

        <div class="input-group">
          <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
          <button type="button" class="btn btn-outline-secondary">Action</button>
          <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
      <br>
      <div class="btn-group-vertical">
        <h4>button gtoup verticle</h4>
        <button class="btn btn-primary" type="button">1</buttonc>
          <button class="btn btn-primary" type="button">2</button>
          <button class="btn btn-primary" type="button">3</button>
      </div>
    </div>
  </div>
</div>

<?php
include("../../../footer.php");
?>