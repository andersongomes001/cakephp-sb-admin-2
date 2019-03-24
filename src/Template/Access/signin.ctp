<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css'); ?>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <?= $this->Html->css('sb-admin-2.min.css'); ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!--div class="col-lg-5 d-none d-lg-block bg-register-image"></div-->
          <div class="col-lg-3 d-none d-lg-block"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <?= $this->Flash->render() ?>
              <?= $this->Form->create($user, array('role' => 'form',"class" => "user")) ?>
                <div class="box-body">
                <?php
                    echo $this->Form->input('name',["error" => false,"class" => "form-control"]);
                    echo $this->Form->input('lastname',["error" => false,"class" => "form-control"]);
                    echo $this->Form->input('email',["error" => false,"class" => "form-control"]);
                    echo $this->Form->input('password',["error" => false,"class" => "form-control"]);
                ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer pt-4">
                    <?= $this->Form->button(__('Register Account'),["class" => "btn btn-primary btn-user btn-block"]) ?>
                </div>
                <hr>
                <a href="/" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="/" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
            <?= $this->Form->end() ?>
              <hr>
              <div class="text-center">
                <a class="small" href="/pages/forgotpassword">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="/pages/login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <?= $this->Html->script('/vendor/jquery/jquery.min.js'); ?>
  <?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>

  <!-- Core plugin JavaScript-->
  <?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js'); ?>

  <!-- Custom scripts for all pages-->
  <?= $this->Html->script('sb-admin-2.min.js'); ?>

</body>

</html>
