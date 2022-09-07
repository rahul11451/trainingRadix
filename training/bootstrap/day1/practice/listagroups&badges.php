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
        <h4>list group</h4>
        <ul class="list-group">
          <li class="list-group-item">1</li>
          <li class="list-group-item">2</li>
          <li class="list-group-item">3</li>
          <li class="list-group-item">4</li>
          <li class="list-group-item">5</li>
        </ul>
      </div>
      <br>
      <div class="container">
        <h4>Active items</h4>
        <ul class="list-group">
          <li class="list-group-item active">1</li>
          <li class="list-group-item">2</li>
          <li class="list-group-item">3</li>
          <li class="list-group-item">4</li>
          <li class="list-group-item">5</li>
        </ul>
      </div>
      <br>
      <div class="container">
        <h4>Disable items</h4>
        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">disable</li>
          <li class="list-group-item">2</li>
          <li class="list-group-item">3</li>
          <li class="list-group-item">4</li>
          <li class="list-group-item">5</li>
        </ul>
      </div>
      <br>
      <div class="container">
        <h4>links and buttons in list</h4>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            1
          </a>
          <a href="#" class="list-group-item list-group-item-action">2</a>
          <a href="#" class="list-group-item list-group-item-action">3</a>
          <a href="#" class="list-group-item list-group-item-action">4</a>
          <a class="list-group-item list-group-item-action disabled">5</a>
        </div>
      </div>
      <br>
      <div class="container">
        <h4>Flush</h4>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">disable</li>
          <li class="list-group-item">2</li>
          <li class="list-group-item">3</li>
          <li class="list-group-item">4</li>
          <li class="list-group-item">5</li>
        </ul>
      </div>
      <br>
      <div class="container">
        <h4>Numbered list</h4>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item">disable</li>
          <li class="list-group-item">2 nen</li>
          <li class="list-group-item">3 nensi</li>
          <li class="list-group-item">4 nenu</li>
          <li class="list-group-item">5 nensa</li>
        </ol>
      </div>
      <br>
      <div class="container">
        <h4>Horizontal</h4>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item">disable</li>
          <li class="list-group-item">2</li>
          <li class="list-group-item">3</li>
          <li class="list-group-item">4</li>
          <li class="list-group-item">5</li>
        </ul>
        <ol class="list-group list-group-horizontal">
          <li class="list-group-item">disable</li>
          <li class="list-group-item">2 nen</li>
          <li class="list-group-item">3 nensi</li>
          <li class="list-group-item">4 nenu</li>
          <li class="list-group-item">5 nensa</li>
        </ol>
      </div>
      <br>
      <div class="container">
        <h4>with badges</h4>
        <ul class="list-group">
          <li class="list-group-item">1 nensi darji <span class="badge rounded-pill bg-secondary">3</span></li>
          <li class="list-group-item">2 nen</li>
          <li class="list-group-item">3 nensi</li>
          <li class="list-group-item">4 nenu</li>
          <li class="list-group-item">5 nensa</li>
        </ul>
      </div>
      <div class="container">
        <h4>checkbox</h4>
        <ul class="list-group">
          <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
            First checkbox
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
            Second checkbox
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
            Third checkbox
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
            Fourth checkbox
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
            Fifth checkbox
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php
include("../../../footer.php");
?>