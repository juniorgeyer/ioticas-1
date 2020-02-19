<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Funcionários</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <?php require('..\menu.php') ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Funcionários</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row mb-2">
        <div class="card col-md-12">
          <div class="card-header">
            <button class="btn btn-primary" onclick="window.location.href='cadastro_funcionario.html'"><i class="fas fa-plus"></i>Novo Funcionário</button>
          </div>
          <!-- /.card-header -->

          <style>
           td{
             text-align: center !important;
             /* display: flex !important; */
             justify-content: center !important;
           }
           </style>

          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Filtros</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Lojas</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              <!-- /.col -->
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Funcionários</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Ativos</option>
                  <option>Inativos</option>
                  <option>Todos</option>
                </select>
              </div>
            <!-- /.col -->
          </div>

            </div>
            </div>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th></th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Função</th>
                <th>Empresa</th>
                <th>Ativo</th>
                <th>Ações</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td></td>
                <td>Rodolfo Augusto Geyer Junior</td>
                <td>02628578204</td>
                <td>	Vendedor</td>
                <td>	VP8</td>
                <td><div class="card-body"><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch></div></td>
                <td><div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-check"></i></span>
                  <span class="input-group-text"><i style="color:red" class="fas fa-trash"></i></span>
                </div></td>
              </tr>
              <tr>
                <td></td>
                <td>Rodolfo Augusto Geyer Junior</td>
                <td>02628578204</td>
                <td>	Vendedor</td>
                <td>	VP8</td>
                <td><div class="card-body"><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch></div></td>
                <td><div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-check"></i></span>
                  <span class="input-group-text"><i style="color:red" class="fas fa-trash"></i></span>
                </div></td>
              </tr>

            </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

          <!-- iCheck -->


          <!-- /.card -->

          <!-- Bootstrap Switch -->

          <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


<script type="text/javascript">
$(document).ready(function () {


      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

  bsCustomFileInput.init();
});
</script>
</body>
</html>
