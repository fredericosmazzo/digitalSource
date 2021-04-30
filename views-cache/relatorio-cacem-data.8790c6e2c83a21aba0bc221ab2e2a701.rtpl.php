<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
      <style type="text/css">

       @page { margin: 50px 50px 50px 50px; }

       #head{
            font-size: 14px;
            text-align: center;
            height: 110px;
            width: 100%;
            position: fixed;
            top: -165px;
            left: 0;
            right: 0;
            margin: auto;
            border-bottom: 1px solid gray;
        }
        #corpo{
            width: 600px;
            position: relative;
            margin: auto;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            position: relative;
        }
        td{
            padding: 3px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            border-top: 1px solid gray;
            font-family: Ebrima;
			font-size: 11px;
			page-break-after: always;
        }
        #footer .page:after{ 
        	content: counter(page);
            
        }
/* CONFIGURAÇÕES DADOS */

/* CONFIGURAÇÕES DADOS */


.esquerda{
    text-align: left;
}

.direita{
    text-align: right;
}

.justify{
    text-align: justify;
}

.centralizar{
    text-align: center;
}

.espaco-linhas-top{
    padding-top: 0.25cm;
}

.espaco-linhas-bottom{
    padding-bottom: 0.25cm;
}

.espaco-linhas-assinar{
    padding-top: 2cm;
}

.paragrafo {
    text-indent: 2.5cm;
    text-align: justify;
}

.listas{
    text-indent: 10px;
}

.linha{
    line-height: 1.25;
}

.linha2{
    line-height: 1.5;
}

.linha3{
    line-height: 1.75;
}

.uppercase{
    text-transform: uppercase;
}

.ebrima{
    font-family:Ebrima;
}

.fonte-10{font-size:10px;}

.fonte-11{font-size:11px;}

.fonte-12{font-size:12px;}

.fonte-13{font-size:13px;}

.fonte-14{font-size:14px;}

.fonte-15{font-size:15px;}

.fonte-16{font-size:16px;}

.fonte-17{font-size:17px;}

.fonte-18{font-size:18px;}

.fonte-19{font-size:19px;}

.fonte-20{font-size:20px;}

.fonte-21{font-size:21px;}

.fonte-22{font-size:22px;}

.padding-esquerda{padding-left: 0.25cm;}

.top-mais {
  margin-top: 0.25cm;
}

* {
    box-sizing: border-box;
}

.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 5px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

#tituloDoc{
	font: Ebrima;
	font-size: 22px;
	font-weight: bold;
	text-align: center;
	margin-top: 22px;
}

#subtituloDoc{
	font: Ebrima;
	font-size: 15px;
	text-align: center;
	margin-bottom: 15px;
}

#numeroDoc{
	font: Ebrima;
	font-size: 20px;
	font-weight:normal;
	text-align: left;
	margin-top: 10px;
}

#today{
	font: Ebrima;
	font-size: 12px;
	font-weight:normal;
	text-align: left;
}

#box-consumidor{
	margin-top: 35px;
	margin-bottom: 10px;
}

#box-fornecedor{
	margin-top: 35px;
	margin-bottom: 10px;
}

#box-atendimento{
	margin-top: 35px;
	margin-bottom: 10px;
}

.tituloBlocos{
	font-family: Ebrima;
	font-size: 16px;
	font-weight:bold;
	text-align: left;
	margin-bottom: 10px;
}

.texto{
	font-family: Ebrima;
	font-size: 15px;
	line-height: 1.5;
	text-align: justify;
}

.margem-topo{
	margin-bottom: 0.15px;
}

</style>
   <!-- Styles CSS -->
<link rel="stylesheet" href="/res/admin/css/styles.css">
</head>
<body>
<div class="head"></div><br>    <!-- Main content -->
    <div id="corpo">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0 text-center"><strong>INFORMAÇÕES DA LISTA GERADA</strong></h5>
              </div>
              <div class="card-body text-center fonte-18">
                DATA: &nbsp;<strong><?php echo formataDataBR($data); ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERÍODO DO RELATÓRIO: &nbsp;<strong>07:30 ATÉ 16:30</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nº TELEFONES: &nbsp;<strong><?php echo telefonesNData($data); ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nº DE LIGAÇÕES: &nbsp;<strong><?php echo ligacoesNData($data); ?></strong>
              </div>
            </div>
          </div>          
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><strong>LISTA DE TELEFONES NÃO ATENDIDOS</strong></h5>
              </div>
              <div class="card-body">
                <table id="movimentoProtocolo" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nº TELEFONE</th>
                    <th>DATA</th>
                    <th>HORÁTIO</th>
                    <th>Nº LIGAÇÕES</th>
                    <th>ACUMULADO</th>
                    <th>Rendimento</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php $counter1=-1;  if( isset($relatorioNaoAtendidas) && ( is_array($relatorioNaoAtendidas) || $relatorioNaoAtendidas instanceof Traversable ) && sizeof($relatorioNaoAtendidas) ) foreach( $relatorioNaoAtendidas as $key1 => $value1 ){ $counter1++; ?>

                  <tr>
                    <td><?php echo $value1["Numero"]; ?></td>
                    <td><?php echo $value1["Day"]; ?></td>
                    <td><?php echo $value1["Hora"]; ?></td>
                    <td><?php echo $value1["TOTAL"]; ?></td>
                    <td><?php echo $value1["SOMA"]; ?></td>
                    <td><?php echo calculoPorcentagem($value1["SOMA"],ligacoesNData($value1["data"])); ?>&nbsp;%</td>
                  </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>

    <div class="footer"></div>
</body>
</html>
