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

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css'); ?>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <?= $this->Html->css('sb-admin-2.min.css'); ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!--div class="col-lg-6 d-none d-lg-block bg-login-image"></div-->
              <div class="col-lg-3 d-none d-lg-block"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?= $this->Flash->render() ?>
                  <?= $this->Form->create("login",["class" => "user"]) ?>
                  <?= $this->Form->input('email',['type' => "text", 'class' => "form-control form-control-user", 'placeholder' => "Enter Email Address...", 'name' => "email", "aria-describedby"=>"emailHelp"]) ?>
                  <?= $this->Form->input('password',['type' => "password", 'class' => "form-control form-control-user", 'placeholder' => "Password"]) ?>
                  <br>
                  <?= $this->Form->button('Login',["type" => "submit", "class" => "btn btn-primary btn-user btn-block"]) ?>
                  <?= $this->Form->end() ?>

                  <!--form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <a href="/" class="btn btn-primary btn-user btn-block">
                      Login
                    </a>
                    <hr>
                    <a href="/" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="/" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form-->
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/pages/forgotpassword">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/signin">Create an Account!</a>
                  </div>
                </div>
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
