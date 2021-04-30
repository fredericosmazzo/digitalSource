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
<div class="head">
    <div class="row" id="box-topo">
      <table class="espaco-linhas-top">
        <tbody>
          <tr>
            <td class="centralizar"></td>
            <td class="centralizar">
              <strong>
                      <h3>Prefeitura Municipal de Ribeirão Preto</h3>
                      <h4>Secretaria Municipal da Assistência Social</h4>
              </strong>
                    </td>
            <td class="centralizar"></td>
          </tr>
        </tbody>
      </table>
    </div>
</div><br>    <!-- Main content -->
    <div id="corpo">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <br><div class="card-header text-center"><h5 class="m-0 text-center">
                    <strong>REBICO DE PROTOCOLO</strong></h5>
                </div><br>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-4"><span class="text-primary h5"><strong>Tipo Documento:&nbsp;</strong></span><span class="text-muted h5"><?php echo $dadosDocumento["Tipo"]; ?></span></div>
                        <div class="col-3"><span class="text-primary h5"><strong>Nº:&nbsp;</strong></span><span class="text-muted h5"><?php echo $dadosDocumento["Documento"]; ?>/<?php echo $dadosDocumento["Ano"]; ?></span></div>
                        <div class="col-5"><span class="text-primary h5"><strong>Origem:&nbsp;</strong></span><span class="text-muted h5"><?php echo $dadosDocumento["Origem"]; ?></span></div>
                    </div><br>
                    <div class="row text-center">
                        <div class="col-12">
                            <span class="text-primary h5"><strong>Recebido por:&nbsp;</strong></span>
                            <span class="text-muted h5"><?php echo $dadosDocumento["Funcionario"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span class="text-primary h5"><strong>Em:&nbsp;</strong></span>
                            <span class="text-muted h5"><?php echo $dadosDocumento["Entrada"]; ?>&nbsp;&nbsp;</span>
                            <span class="text-primary h5"><strong>-&nbsp;&nbsp;</strong></span>
                            <span class="text-muted h5"><?php echo $dadosDocumento["Hora"]; ?></span>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-12 h4 text-muted"><?php echo today(); ?></div>
                    </div>
                <br>
                <br>
                    <div class="row text-center">
                        <div class="col-12 h4 text-muted">___________________________________________________________</div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12 h5 text-muted"><?php echo getAgenteNome(); ?></div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
    	Rua Augusto Severo, 819 – Vila Tibério – CEP 14.050-850 Ribeirão Preto/SP. E-mail: protocolo.semaspmrp@gmail.com - Tel.: 3611-6016<br><strong><?php echo get_client_ip(); ?></strong>&nbsp;- <?php echo getAgenteNome(); ?>&nbsp;&nbsp;-&nbsp;<?php echo today(); ?>

    </div>
</body>
</html>
