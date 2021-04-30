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
              <li class="breadcrumb-item"><a href="/admin/protocolo/inicio">CACEM 0800</a></li>
              <li class="breadcrumb-item active">Cacem Relatórios</li>
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
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><strong>DADOS GERAIS</strong></h5>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                      <span class="text-primary h6"><strong>PERÍODO DA AMOSTRAGEM:&nbsp;&nbsp;</strong></span><span class="text-muted h6"><?php $counter1=-1;  if( isset($periodoEstudo) && ( is_array($periodoEstudo) || $periodoEstudo instanceof Traversable ) && sizeof($periodoEstudo) ) foreach( $periodoEstudo as $key1 => $value1 ){ $counter1++; ?>&nbsp;&nbsp;<strong><?php echo $value1["inicial"]; ?></strong>&nbsp;até&nbsp;<strong><?php echo $value1["final"]; ?></strong><?php } ?></span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="text-primary h6"><strong>TELEFONES QUE LIGARAM:&nbsp;&nbsp;</strong></span><span class="text-muted h6"><?php $counter1=-1;  if( isset($totalNumerosLigaram) && ( is_array($totalNumerosLigaram) || $totalNumerosLigaram instanceof Traversable ) && sizeof($totalNumerosLigaram) ) foreach( $totalNumerosLigaram as $key1 => $value1 ){ $counter1++; ?><?php echo $value1["totalNumerosLigaram"]; ?><?php } ?></span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="text-primary h6"><strong>LIGAÇÕES REALIZADAS:&nbsp;</strong></span><span class="text-muted h6"><?php $counter1=-1;  if( isset($totalLigacoes) && ( is_array($totalLigacoes) || $totalLigacoes instanceof Traversable ) && sizeof($totalLigacoes) ) foreach( $totalLigacoes as $key1 => $value1 ){ $counter1++; ?><?php echo $value1["totalLigacoes"]; ?><?php } ?></span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="text-primary h6"><strong>LIGAÇÕES ATENDIDAS:&nbsp;</strong></span><span class="text-muted h6"><?php $counter1=-1;  if( isset($totalLigacoesAtendidos) && ( is_array($totalLigacoesAtendidos) || $totalLigacoesAtendidos instanceof Traversable ) && sizeof($totalLigacoesAtendidos) ) foreach( $totalLigacoesAtendidos as $key1 => $value1 ){ $counter1++; ?><?php echo $value1["totalLigacoesAtendidos"]; ?><?php } ?></span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="text-primary h6"><strong>LIGAÇÕES PERDIDAS:&nbsp;</strong></span><span class="text-muted h6"><?php $counter1=-1;  if( isset($totalLigacoesNaoAtendidos) && ( is_array($totalLigacoesNaoAtendidos) || $totalLigacoesNaoAtendidos instanceof Traversable ) && sizeof($totalLigacoesNaoAtendidos) ) foreach( $totalLigacoesNaoAtendidos as $key1 => $value1 ){ $counter1++; ?><?php echo $value1["totalLigacoesNaoAtendidos"]; ?><?php } ?></span>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><strong>ESCOLHA DATA DO RELATÓRIO</strong></h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <table id="dados01" class="table table-bordered table-striped">
                      <thead>
                      <tr><th colspan="3">&nbsp;Lista com Ligações Não Atendidas</th></tr>
                      <tr>
                        <th>DATA</th>
                        <th>Telefones</th>
                        <th>Ligacoes</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $counter1=-1;  if( isset($listarDatas) && ( is_array($listarDatas) || $listarDatas instanceof Traversable ) && sizeof($listarDatas) ) foreach( $listarDatas as $key1 => $value1 ){ $counter1++; ?>

                      <tr>
                        <td><a href="/impressoes/cacem/relatorio/dia/<?php echo $value1["data"]; ?>" target="_blank"><?php echo $value1["Dia"]; ?></a></td>
                        <td><?php echo telefonesNData($value1["data"]); ?></td>
                        <td><?php echo ligacoesNData($value1["data"]); ?></td>
                      </tr>
                      <?php } ?>

                      </tbody>
                    </table>
                </div>
                  <div class="col-4">
                    <table id="dados02" class="table table-bordered table-striped">
                      <thead>
                      <tr><th colspan="3">&nbsp;Ligações por Nº Atendidas</th></tr>
                      <tr>
                        <th>DATA</th>
                        <th>TOTAL</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                      </tr>
                      </tbody>
                    </table>
                </div>
                  <div class="col-4">
                    <table id="dados03" class="table table-bordered table-striped">
                      <thead>
                      <tr><th colspan="2">&nbsp;Ligações por Nº Não Atendidas</th></tr>
                      <tr>
                        <th>DATA</th>
                        <th>TOTAL</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                      </tr>
                      </tbody>
                    </table>
                </div>
              </div>
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