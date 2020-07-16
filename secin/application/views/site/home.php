<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
		<h1 class="m-0 text-dark">Página inicial</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Página inicial</li>
		</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
	<!-- Small boxes (Stat box) -->

	<div class="col-md">

		<div class="row">

			<div class="col-lg-6 col-6">
			<!-- small box -->
			<div class="small-box bg-secondary">
				<div class="inner">
				<h3>1<sup style="font-size: 20px"></sup></h3>

				<p>Solicitações</p>
				</div>
				<div class="icon">
				<i class="nav-icon fas fa-file"></i>
				</div>
				<a href="<?= base_url('edit') ?>" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
			</div>
			</div>

			<div class="col-lg-6 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
				<h3>2<sup style="font-size: 20px"></sup></h3>

				<p>Meus Dados</p>
				</div>
				<div class="icon">
				<i class="nav-icon fas fa-user"></i>
				</div>
				<a href="<?= base_url('perfil') ?>" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
			</div>
			</div>

		</div>
	<!-- /.row -->


		<div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Editais abertos</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
            <label for="inputStatus">Edital</label>
            <hr>
			<a href="http://www.ufopa.edu.br/media/file/site/proppit/documentos/2020/b791c131ffeae9069f8c55074fffc414_7n5725X.pdf" target="blank">Edital Nº 02/2020</a>
			<a href="<?=  base_url('quantidade')?>" class="btn btn-success float-right">Solicitar</a>
			</div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
