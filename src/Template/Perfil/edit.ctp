<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfil $perfil
 */
?>



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
                <h1 class="h4 text-gray-900 mb-4">
                    Perfil
                    <small><?= __('Edit') ?></small>
                </h1>
              </div>
              <?= $this->Form->create($perfil, array('role' => 'form',"class" => "user")) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('nome_perfil',[ "class" => "form-control"]);
            echo $this->Form->input('nivel',[ "class" => "form-control"]);
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer pt-4">
            <?= $this->Form->button('<i class="fas fa-check"></i> '.__('Save'),["class" => "btn btn-success"]) ?>
            <?= $this->Html->link('<i class="fas fa-arrow-left"></i> '.__('Back'), ['action' => 'index'], ['escape' => false,"class" => "btn btn-primary"]) ?>
          </div>
        <?= $this->Form->end() ?>



              
          </div>
        </div>
      </div>
    </div>

  </div>




