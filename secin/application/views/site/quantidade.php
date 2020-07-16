<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Solicitar Cota</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Solicitar cota</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="<?= base_url('processa')?>" method='post'>
    <div class="row">
    <div class="col-md">
        <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Dados da Solicitação</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
            <label for="inputStatus">Quantas cotas de bolsa deseja solicitar?</label>
            <select id="inputStatus" class="form-control custom-select" name="selecione">
                <option selected>1</option>
                <option>2</option>
            </select>
			</div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
    <div class="row">
    <div class="col-12">
        <a href="<?=  base_url('homepage')?>" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-success float-right">Continuar</button>
    </div>
    </div>
    </form>
</section>
<!-- /.content -->