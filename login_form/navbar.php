<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top" style="justify-content: flex-end;">
  <div class="container">
    <?php include 'login_form/menu.php' ?>
    <div class="icon-ol">
      <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <div id="offcanvas-flip1" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar" style="background: white; width: 100%;">
      <?php include 'login_form/menu_res.php' ?>
    </div>
  </div>

  <?php if (empty($_SESSION['id'])) { ?>
    <div class="icon-ol">
      <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  <?php } else { ?>
    <div class="icon-ol none">
      <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  <?php } ?>
</nav>