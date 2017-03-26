<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="profile.php">
        <i class="fa fa-address-book" style="font-size: 28px"></i>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li class="<?= route_is('event_index.php')? 'active' : null ?>"><a href="event_index.php">Events</a></li>
        <li class="<?= route_is('voucher_index.php')? 'active' : null ?>"><a href="voucher_index.php">Vouchers</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php if ($controller->is_login()): ?>
          <li><a href="_get/logout.php">Logout</a></li>
        <?php else: ?>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
        <?php endif ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<style type="text/css">
  body {
    padding-top: 50px;
  }
</style>
