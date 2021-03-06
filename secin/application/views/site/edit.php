<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Solicitações</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Solicitações</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Solicitações</h3>
    <?php

    getMsg('msgCadastro');

    ?>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
        <!--<?= $data_solicitacoes->titulo ?>-->
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    Titulo do Plano
                </th>
                <th style="width: 30%">
                    Opcao 1
                </th>
                <th style="width: 20%">
                    Opcao 2
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <?php foreach ($data_solicitacoes as $row) {?>
        <tbody>
            <tr>
                <td>
                    #
                </td>
                <td>
                    <a>
                        <?= $row->titulo?>
                    </a>
                </td>
                <td>
                    <?= $row->opcao1 ?>
                </td>
                <td class="project_progress">
                    <?= $row->opcao2 ?>
                </td>
                <td class="project-state">

                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="<?= base_url('atualiza1') ?>">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                </td>
            </tr>
            <?php if ($row->titulo2 != null) {?>
              <tr>
                <td>
                    #
                </td>
                <td>
                    <a>
                        <?= $row->titulo2?>
                    </a>
                </td>
                <td>
                    <?= $row->opcao11 ?>
                </td>
                <td class="project_progress">
                    <?= $row->opcao12 ?>
                </td>
                <td class="project-state">

                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="<?= base_url('atualiza2') ?>">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                </td>
             </tr>
            <?php }?>
        </tbody>
        <?php }?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
