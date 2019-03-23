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

            <div class="text-center">
                <div class="error mx-auto" data-text="500">500</div>
                <p class="lead text-gray-800 mb-5">Internal Server Error</p>
                <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                <a href="/">&larr; Back to Dashboard</a>
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