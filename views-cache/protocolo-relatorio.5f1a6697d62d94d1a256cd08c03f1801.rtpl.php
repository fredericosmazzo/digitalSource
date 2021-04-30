<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">SEMAS | DIGITAL</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Semas</a></li>
              <li class="breadcrumb-item"><a href="/admin/protocolo/inicio">Protocolo</a></li>
              <li class="breadcrumb-item active">Início Protocolo</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Bem vindo ao Protocolo</h5>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><strong>DADOS DO DOCUMENTO</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-outline-success"><i class="fas fa-envelope"></i></button>&nbsp;
                  <a href="/impressoes/relatorio/<?php echo $dadosDocumento["ID"]; ?>" target="_blak"><button type="button" class="btn btn-outline-primary"><i class="fas fa-print"></i></button></a>
                </h5>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-2"><span class="text-primary h5"><strong>Nº:&nbsp;</strong></span><span class="text-muted h5"><?php echo $dadosDocumento["Documento"]; ?>/<?php echo $dadosDocumento["Ano"]; ?></span></div>
                    <div class="col-4"><span class="text-primary h5"><strong>Tipo Documento:&nbsp;</strong></span><span class="text-muted h5"><?php echo $dadosDocumento["Tipo"]; ?></span></div>
                    <div class="col-4"><span class="text-primary h5"><strong>Origem:&nbsp;</strong></span><span class="text-muted h5"><?php echo $dadosDocumento["Origem"]; ?></span></div>
                    <div class="col-2"><span class="text-primary h5"><strong>Recebido:&nbsp;</strong></span><span class="text-muted h5"><?php echo $dadosDocumento["Entrada"]; ?></span></div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><strong>MOVIMENTAÇÃO DO DOCUMENTO</strong></h5>
              </div>
              <div class="card-body">
                <table id="movimentoProtocolo" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Protocolo</th>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>Referência</th>
                    <th>Resposável</th>
                    <th style="width: 100px; text-align: center;">Recibo</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php $counter1=-1;  if( isset($protocolosRelatorio) && ( is_array($protocolosRelatorio) || $protocolosRelatorio instanceof Traversable ) && sizeof($protocolosRelatorio) ) foreach( $protocolosRelatorio as $key1 => $value1 ){ $counter1++; ?>

                  <tr>
                    <td><?php echo $value1["Documento"]; ?>/<?php echo $value1["Ano"]; ?></td>
                    <td><?php echo $value1["Saida"]; ?></td>
                    <td><?php echo $value1["Origem"]; ?></td>
                    <td><?php echo $value1["Destino"]; ?></td>
                    <td><?php echo $value1["Referencia"]; ?></td>
                    <td><?php echo cadastrante($value1["Cadastrante"]); ?></td>
                    <td style="width: 100px; text-align: center;">
                      <button type="button" class="btn btn-outline-success"><i class="fas fa-envelope"></i></button>&nbsp;
                      <a href="/impressoes/recibo/<?php echo $value1["ID"]; ?>/<?php echo $value1["IDEntrada"]; ?>" target="_blak"><button type="button" class="btn btn-outline-primary"><i class="fas fa-print"></i></button></a>
                    </td>
                  </tr>
                    <?php } ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nº</th>
                    <th>Protocolo</th>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>Referência</th>
                    <th>Resposável</th>
                    <th style="width: 100px; text-align: center;">Recibo</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar  -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
