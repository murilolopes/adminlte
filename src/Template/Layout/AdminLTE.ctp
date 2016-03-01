<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') ?>
    <?= $this->Html->css('/adminLTE/assets/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/adminLTE/assets/css/adminlte.min.css') ?>
    <?= $this->Html->css('/adminLTE/assets/css/skins/_all-skins.min.css') ?>
    <?= $this->Html->css('/adminLTE/assets/plugins/iCheck/flat/blue.css') ?>
    <?= $this->Html->css('/adminLTE/assets/plugins/morris/morris.css') ?>
    <?= $this->Html->css('/adminLTE/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
    <?= $this->Html->css('/adminLTE/assets/plugins/datepicker/datepicker3.css') ?>
    <?= $this->Html->css('/adminLTE/assets/plugins/daterangepicker/daterangepicker-bs3.css') ?>
    <?= $this->Html->css('/adminLTE/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>
    
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/jQuery/jQuery-2.1.4.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/bootstrap/js/bootstrap.min.js') ?>
    <?= $this->Html->script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/morris/morris.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/morris/morris.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/sparkline/jquery.sparkline.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/knob/jquery.knob.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/daterangepicker/daterangepicker.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/datepicker/bootstrap-datepicker.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/slimScroll/jquery.slimscroll.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/plugins/fastclick/fastclick.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/js/app.min.js') ?>
    <?= $this->Html->script('/adminLTE/assets/js/pages/dashboard.js') ?>
    <?= $this->Html->script('/adminLTE/assets/js/demo.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        
        <a href="#" class="logo">
          <span class="logo-mini"><b>A</b>LT</span>
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Murilo Ângelo</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Murilo Ângelo - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Murilo Ângelo</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <section class="content">
            <?= $this->fetch('content') ?>
        </section>
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
      <div class="control-sidebar-bg"></div>
    </div>
</body>
</html>