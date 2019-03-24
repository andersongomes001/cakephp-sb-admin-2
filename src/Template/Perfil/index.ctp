
<!-- Page Heading -->
<!--h1 class="h3 mb-2 text-gray-800">Perfil</h1-->
<div class="h3 mb-2 text-gray-800"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>

<!--p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p-->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Perfil</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome_perfil') ?></th>
                <th><?= $this->Paginator->sort('nivel') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
                    <!--tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr-->
                </thead>
                <tfoot>
                <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome_perfil') ?></th>
                <th><?= $this->Paginator->sort('nivel') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
                </tfoot>
                <tbody>
                <?php foreach ($perfil as $perfil): ?>
              <tr>
                <td><?= $this->Number->format($perfil->id) ?></td>
                <td><?= h($perfil->nome_perfil) ?></td>
                <td><?= $this->Number->format($perfil->nivel) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfil->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfil->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
    </div>
</div>
