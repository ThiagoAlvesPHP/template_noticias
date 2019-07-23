<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=320px">
<title>Padrão MVC</title>
<link href="<?=BASE; ?>assets/img/albicod.png" rel="icon">
<link rel="stylesheet" href="<?=BASE; ?>assets/css/bootstrap.css">
<link rel="stylesheet" href="<?=BASE; ?>assets/css/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?=BASE; ?>assets/datetime/jquery.datetimepicker.css">
<script type="text/javascript" src="<?=BASE; ?>assets/js/jquery.min.js"></script>
<script src="<?=BASE; ?>assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?=BASE; ?>/assets/css/style.css">
<style type="text/css">
  .navbar .text-menu{
    color: #fff;
  }
  #myNavbar a{
    color: #fff;
  }
  footer {
    background-color: #483D8B;
    color: white;
    padding: 15px;
  }
  .collapse li:hover{
    background-color: #6A5ACD;
    font-size: 16px;
  }
</style>

</head>
<body>
<!-- MENU -->
<nav style="background-color: #483D8B;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-menu" href="#">
        <img class="img-responsive" width="60" src="<?=BASE; ?>assets/img/albicod.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <i class="fas fa-search"></i>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li></li>
      </ul>
    </div>
  </div>
</nav>

<nav class="logo text-center">
  <span class="text-topo">Albicod</span>
</nav>

<!-- AQUI COLOCAREMOS AS VIES DO SITE -->
<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<br>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

<!-- AQUI COLOCAREMOS O FOOTER -->
<script src="<?=BASE; ?>assets/datetime/jquery.datetimepicker.full.js"></script>
<script src="<?=BASE; ?>assets/js/Chart_js/Chart.min.js"></script>
<script src="<?=BASE; ?>assets/js/Chart_js/utils.js"></script>
<script src="<?=BASE; ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=BASE; ?>assets/js/script.js"></script>

</body>
</html>
