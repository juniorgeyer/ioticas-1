<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cadastrar Usuário</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

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

      <!-- SEARCH FORM -->

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
        <span class="brand-text font-weight-light">Óticas Helena</span>
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
              <h1>Cadastrar Funcionário</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <span style="margin-left:10px" class="fas fa-building"></span>
                  <h3 class="card-title">Novo Funcionário - Dados Principais</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                  <div class="card-body">
                    <a href="#">
                      <img alt="Clique para adicionar uma foto" style="margin-bottom:20px" class="img-thumbnail img-responsive" src="https://static.ipe.digital/superstore/funcionarios/foto/funcionario-placeholder.png" width="150px">
                      <h6>Clique sobre a imagem para adicionar uma foto.</h6>
                    </a>

                    <div class="row">
                      <div class="col-6">
                        <label for="exampleInputPassword1">Nome Completo</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fas fa-building"></span>
                          </div>
                          <input type="text" value="" autocomplete="off" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Empresa</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">VP8</option>
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
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-6">
                          <label for="exampleInputPassword1">Email/Login</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><span class="fas fa-building"></span>
                            </div>
                            <input type="text" value="" autocomplete="off" class="form-control">
                          </div>
                        </div>

                        <div class="col-3">
                          <label for="exampleInputPassword1">Nova Senha</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><span class="fas fa-building"></span>
                            </div>
                            <input type="password" value="" autocomplete="off" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <label for="exampleInputPassword1">Confirme a nova senha</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><span class="fas fa-building"></span>
                            </div>
                            <input type="password" value="" autocomplete="off" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>


                  </form>
                </div>
              </div>

              <!-- ENDEREÇO -->
              <div class="card card-success">
                <div class="card-header">
                  <span style="margin-left:10px" class="fas fa-building"></span>
                  <h3 class="card-title">Permissões de Acesso</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                  <div class="card-body">

                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Perfil de Acesso do Usuário</label>
                          <select class="form-control select2" id="perfil_acesso" style="width: 100%;">
                            <option selected="selected">Administrador</option>
                            <option>Gerente</option>
                            <option>Financeiro</option>
                            <option>Vendedor</option>
                          </select>
                        </div>
                      </div>
                    </div> -->

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Perfil de Acesso</label>
                          <select onchange="mudar_permissoes()" id="perfil_acesso"   class="form-control select2" style="width: 100%;">
                            <option value="Administrador" selected="selected">Administrador</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Financeiro">Financeiro</option>
                            <option value="Vendedor">Vendedor</option>
                          </select>
                        </div>

                      </div>
                    </div>



                  </form>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Empresas que o usuário terá acesso:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary1" checked>
                                <label for="checkboxPrimary1">
                                  Canaã
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary2" checked>
                                <label for="checkboxPrimary2">
                                  VP8
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary3" checked>
                                <label for="checkboxPrimary3">
                                  Nova Marabá
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary4" checked>
                                <label for="checkboxPrimary4">
                                  Quiosque Shopping
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Painel de Informações:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary5" checked>
                                <label for="checkboxPrimary5">
                                  Informações sobre vendas do mês anterior
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary6" checked>
                                <label for="checkboxPrimary6">
                                  Informações sobre vendas dos últimos 12 meses
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary7" checked>
                                <label for="checkboxPrimary7">
                                  Informações sobre vendas do mesmo mês no ano anterior
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary8" checked>
                                <label for="checkboxPrimary8">
                                  Informações sobre contas a pagar
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary9" checked>
                                <label for="checkboxPrimary9">
                                  Informações sobre contas a receber
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary10" checked>
                                <label for="checkboxPrimary10">
                                  Informações sobre aniversariantes
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary11" checked>
                                <label for="checkboxPrimary11">
                                  Informações sobre receitas vencidas
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary12" checked>
                                <label for="checkboxPrimary12">
                                  Informações sobre cobranças de mensalidades
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary13" checked>
                                <label for="checkboxPrimary13">
                                  Informações sobre validade de produtos
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary14" checked>
                                <label for="checkboxPrimary14">
                                  Informações sobre estoque mínimo de produtos
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary15" checked>
                                <label for="checkboxPrimary15">
                                  Informações sobre as situações do Contas a Receber
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary16" checked>
                                <label for="checkboxPrimary16">
                                  Informações sobre pós-vendas criadas.
                                </label>
                              </div>
                            </div>


                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>











                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Vendas:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary17" checked>
                                <label for="checkboxPrimary17">
                                  Consulta
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary18" checked>
                                <label for="checkboxPrimary18">
                                  Consultar somente as vendas criadas pelo funcionário
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary19" checked>
                                <label for="checkboxPrimary19">
                                  Inclusão
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary20" checked>
                                <label for="checkboxPrimary20">
                                  Cancelamento
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary21" checked>
                                <label for="checkboxPrimary21">
                                  Exclusão
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary22" checked>
                                <label for="checkboxPrimary22">
                                  Mostrar painéis de resumo
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary23" checked>
                                <label for="checkboxPrimary23">
                                  Impressão de relatórios
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary24" checked>
                                <label for="checkboxPrimary24">
                                  Lançar venda com data retroativa
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary25" checked>
                                <label for="checkboxPrimary25">
                                  Duplicar
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Trocas de Produtos:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary26" checked>
                                <label for="checkboxPrimary26">
                                  Consultar
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary27" checked>
                                <label for="checkboxPrimary27">
                                  Iniciar Trocas
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary28" checked>
                                <label for="checkboxPrimary28">
                                  Cancelamento
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary29" checked>
                                <label for="checkboxPrimary29">
                                  Utilizar crédito na venda
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary30" checked>
                                <label for="checkboxPrimary30">
                                  Devolver valores dentro do limite
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary31" checked>
                                <label for="checkboxPrimary31">
                                  Devolver valores acima do limite
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary32" checked>
                                <label for="checkboxPrimary32">
                                  Inutilizar Crédito
                                </label>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Ordem de Serviço:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary33" checked>
                                <label for="checkboxPrimary33">
                                  Consulta
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary34" checked>
                                <label for="checkboxPrimary34">
                                  Consultar somente as Ordens de Serviço criadas pelo funcionário
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary35" checked>
                                <label for="checkboxPrimary35">
                                  Inclusão
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary36" checked>
                                <label for="checkboxPrimary36">
                                  Confirmação em Perda
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary37" checked>
                                <label for="checkboxPrimary37">
                                  Cancelamento
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary38" checked>
                                <label for="checkboxPrimary38">
                                  Alteração de qualquer ordem de serviço
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary39" checked>
                                <label for="checkboxPrimary39">
                                  Alterar o funcionário vinculado à ordem de serviço
                                </label>
                                <p>Se esta permissão não for dada, o usuário não poderá vender duas ou mais Ordens de Serviço de funcionários diferentes na mesma venda.</p>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary40" checked>
                                <label for="checkboxPrimary40">
                                  Alteração de ordens de serviço vendidas/entregues
                                </label>
                                <p>Esta permissão só tem efeito se o usuário possui permissão para alterar ordens de serviço abertas por ele próprio ou qualquer ordem de serviço.</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary41" checked>
                                <label for="checkboxPrimary41">
                                  Somente alteração de ordens de serviço abertas pelo próprio usuário
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary42" checked>
                                <label for="checkboxPrimary42">
                                  Impressão de relatórios
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary43" checked>
                                <label for="checkboxPrimary43">
                                  Mostrar painéis de resumo
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary44" checked>
                                <label for="checkboxPrimary44">
                                  Abrir O.S e/ou lançar adiantamentos com data retroativa
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary45" checked>
                                <label for="checkboxPrimary45">
                                  Retornar O.S entregue para o status aberto
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Documentos Fiscais:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary46" checked>
                                <label for="checkboxPrimary46">
                                  Consulta
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary47" checked>
                                <label for="checkboxPrimary47">
                                  Inclusão
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary48" checked>
                                <label for="checkboxPrimary48">
                                  Cancelamento
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary49" checked>
                                <label for="checkboxPrimary49">
                                  Exportar documentos fiscais emitidos
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary50" checked>
                                <label for="checkboxPrimary50">
                                  Ver valor total de documentos emitidos
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary51" checked>
                                <label for="checkboxPrimary51">
                                  Permitir inutilização de Nota Fiscal
                                </label>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Contas a Pagar:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary52" checked>
                                <label for="checkboxPrimary52">
                                  Consulta
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary53" checked>
                                <label for="checkboxPrimary53">
                                  Inclusão/Alteração
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary54" checked>
                                <label for="checkboxPrimary54">
                                  Baixa
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary55" checked>
                                <label for="checkboxPrimary55">
                                  Estorno de Pagamento
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary56" checked>
                                <label for="checkboxPrimary56">
                                  Cancelamento
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary57" checked>
                                <label for="checkboxPrimary57">
                                  Impressão de relatórios
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary58" checked>
                                <label for="checkboxPrimary58">
                                  Lançar contas com data retroativa
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary59" checked>
                                <label for="checkboxPrimary59">
                                  Lançar pagamentos com data retroativa
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Contas a Receber:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary60" checked>
                                <label for="checkboxPrimary60">
                                  Consulta
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary61" checked>
                                <label for="checkboxPrimary61">
                                  Inclusão / Alteração
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary62" checked>
                                <label for="checkboxPrimary62">
                                  Pode baixar da empresa que está vinculado
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary63" checked>
                                <label for="checkboxPrimary63">
                                  Pode baixar de outras empresas da rede
                                </label>
                                <p>Essa opção só pode ser marcada se o usuário tiver permissão de dar baixa dal oja que está vinculado</p>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary64" checked>
                                <label for="checkboxPrimary64">
                                  Estorno Recebimento
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary65" checked>
                                <label for="checkboxPrimary65">
                                  Cancelamento
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary66" checked>
                                <label for="checkboxPrimary66">
                                  Impressão de relatórios
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary67" checked>
                                <label for="checkboxPrimary67">
                                  Lançar contas com data retrovativa
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary68" checked>
                                <label for="checkboxPrimary68">
                                  Lançar recebimento com data retroativa
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary69" checked>
                                <label for="checkboxPrimary69">
                                  Alterar situação de contas a receber
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary70" checked>
                                <label for="checkboxPrimary70">
                                  Renegociação
                                </label>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Gestão de Caixa:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary71" checked>
                                <label for="checkboxPrimary71">
                                  Consulta posição atual
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary72" checked>
                                <label for="checkboxPrimary72">
                                  Abertura
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary73" checked>
                                <label for="checkboxPrimary73">
                                  Fechamento
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary74" checked>
                                <label for="checkboxPrimary74">
                                  Pagamento de despesas
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary75" checked>
                                <label for="checkboxPrimary75">
                                  Transferências para outras contas
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary76" checked>
                                <label for="checkboxPrimary76">
                                  Suprimento
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary77" checked>
                                <label for="checkboxPrimary77">
                                  Apagar lançamentos
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary78" checked>
                                <label for="checkboxPrimary78">
                                  Reabrir caixa fechado
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary79" checked>
                                <label for="checkboxPrimary79">
                                  Apagar lançamentos realizados via TEF
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary80" checked>
                                <label for="checkboxPrimary80">
                                  Alterar o saldo inicial
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary81" checked>
                                <label for="checkboxPrimary81">
                                  Pagamento de despesas
                                </label>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Financeiro:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary82" checked>
                                <label for="checkboxPrimary82">
                                  Consulta Fluxo Financeiro
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary83" checked>
                                <label for="checkboxPrimary83">
                                  Resultado
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary84" checked>
                                <label for="checkboxPrimary84">
                                  Gestão de antecipações de vendas no cartão
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary85" checked>
                                <label for="checkboxPrimary85">
                                  Processar remessa e retorno de cobrança bancária
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary86" checked>
                                <label for="checkboxPrimary86">
                                  Inclusão de pagamentos de compras
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary87" checked>
                                <label for="checkboxPrimary87">
                                  Gestão de cheques
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary88" checked>
                                <label for="checkboxPrimary88">
                                  Gestão de Contas
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary89" checked>
                                <label for="checkboxPrimary89">
                                  Histórico de análise
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary90" checked>
                                <label for="checkboxPrimary90">
                                  Consulta transações realizadas via TEF
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary91" checked>
                                <label for="checkboxPrimary91">
                                  Desbloqueio em confiança
                                </label>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Estoque:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary92" checked>
                                <label for="checkboxPrimary92">
                                  Posição atual do estoque
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary93" checked>
                                <label for="checkboxPrimary93">
                                  Gestão de pedidos
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary94" checked>
                                <label for="checkboxPrimary94">
                                  Gestão de compras (Atualizar preço de venda)
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary95" checked>
                                <label for="checkboxPrimary95">
                                  Apagar itens da nota na importação de notas fiscais de compra
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary96" checked>
                                <label for="checkboxPrimary96">
                                  Impressão de etiquetas
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary97" checked>
                                <label for="checkboxPrimary97">
                                  Inventário
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary98" checked>
                                <label for="checkboxPrimary98">
                                  Permitir desfazer lançamento de inventário
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary99" checked>
                                <label for="checkboxPrimary99">
                                  Transferência de Produtos
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary100" checked>
                                <label for="checkboxPrimary100">
                                  Consulta Histórico de Movimentação
                                </label>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Produtos:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary101" checked>
                                <label for="checkboxPrimary101">
                                  Consulta de Todas as Empresas
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary102" checked>
                                <label for="checkboxPrimary102">
                                  Exportação para Excel
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary103" checked>
                                <label for="checkboxPrimary103">
                                  Inclusão/Alteração de dados dos Produtos
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary104" checked>
                                <label for="checkboxPrimary104">
                                  Inclusão/Alteração de quantidade de estoque de Produtos
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary105" checked>
                                <label for="checkboxPrimary105">
                                  Inclusão/Alteração de custo e preço de venda de Produtos
                                </label>
                              </div>
                            </div><div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary106" checked>
                                <label for="checkboxPrimary106">
                                  Inclusão/Alteração de validade de produtos
                                </label>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Relatórios:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary107" checked>
                                <label for="checkboxPrimary107">
                                  Produtos Vendidos
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary108" checked>
                                <label for="checkboxPrimary108">
                                  Produtos Não Vendidos
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary109" checked>
                                <label for="checkboxPrimary109">
                                  Receitas Vencidas
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary110" checked>
                                <label for="checkboxPrimary110">
                                  Aniversários
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary111" checked>
                                <label for="checkboxPrimary111">
                                  Vendas
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary112" checked>
                                <label for="checkboxPrimary112">
                                  Extrato Financeiro
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary113" checked>
                                <label for="checkboxPrimary113">
                                  Posição atual do estoque
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary114" checked>
                                <label for="checkboxPrimary114">
                                  Livro de Receitas
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary115" checked>
                                <label for="checkboxPrimary115">
                                  Somente comissão do funcionário vinculado ao usuário
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary116" checked>
                                <label for="checkboxPrimary116">
                                  Comissões de todos funcionários
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary117" checked>
                                <label for="checkboxPrimary117">
                                  Validade de produtos
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-building"></i>
                          Outros Cadastros:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group clearfix">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary118" checked>
                                <label for="checkboxPrimary118">
                                  Clientes
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary119" checked>
                                <label for="checkboxPrimary119">
                                  Importar/Exportar Clientes
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary120" checked>
                                <label for="checkboxPrimary120">
                                  Análise de Crédito (Clientes)
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary121" checked>
                                <label for="checkboxPrimary121">
                                  Fornecedores
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary122" checked>
                                <label for="checkboxPrimary122">
                                  Funcionários
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary123" checked>
                                <label for="checkboxPrimary123">
                                  Minhas Empresas
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary124" checked>
                                <label for="checkboxPrimary124">
                                  Tabelas Diversas
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary125" checked>
                                <label for="checkboxPrimary125">
                                  Editar Nome de cliente
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary126" checked>
                                <label for="checkboxPrimary126">
                                  Editar CPF de cliente
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary127" checked>
                                <label for="checkboxPrimary127">
                                  Permissão para ativar/desativar cliente
                                </label>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" name="permissoes" id="checkboxPrimary128" checked>
                                <label for="checkboxPrimary128">
                                  WhatsApp
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>


                <!-- OUTRAS INFORMAÇÕES -->

                <!-- Form Element sizes -->

                <!-- /.card -->


                <!-- /.card -->

                <!-- Input addon -->

                <!-- /.card -->
                <!-- Horizontal Form -->

                <!-- /.card -->


                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
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

      <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

      <script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>


      <script type="text/javascript">



      $(document).ready(function () {
        bsCustomFileInput.init();
        $("input[data-bootstrap-switch]").each(function(){
          $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

              });

        function mudar_permissoes(){
          var funcao = document.getElementById("perfil_acesso").value;

          var checks = document.getElementsByName("permissoes");

          if(funcao=="Administrador"){
          }
          if(funcao=="Gerente"){
            funcoes=[5,6,7,8,9,12,13,14,15,16,17,20,23,24,25,26,27,29,30,31,32,33,34,35,38,42,43,44,45,48,49,50,51,52,53,54,56,57,58,59,60,61,62,65,67,69,72,76,77,78,79,80,82,86,87,88,89,90,92,96,97,98,99,100,101,104,114,117,118]
          }
          if(funcao=="Financeiro"){

          }
          if(funcao=="Vendedor"){

          }
          var quantidade_checks = checks.length;
          for(var i=1;i<quantidade_checks+1;i++){
            var aux=0;

              for(var j=0; j<funcoes.length;j++){
                    if(i==funcoes[j]){
                      aux=1;
                      $("#checkboxPrimary"+i).prop('checked',true);
                    }
              }
              if(aux==0){
                $("#checkboxPrimary"+i).prop('checked',false);
              }
          }
        }

      </script>
    </body>
    </html>
