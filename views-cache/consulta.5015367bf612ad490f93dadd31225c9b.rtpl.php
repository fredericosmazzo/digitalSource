<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SEMAS Digital | Cadastro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="res/site/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="res/site/dist/css/adminlte.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="res/site/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="res/site/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h3 class="m-0 text-white text-center">Starter Page</h3>
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
                <h5 class="m-0">CONSULTAR BENEFÍCIO MUNICIPAL</h5>
              </div>
              <div class="card-body">
              <form action="/cadastro/consulta" id="quickForm" method="post">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-4 mb-2">
                      <label for="exampleInputEmail1">Nome</label>
                      <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira seu Nome...">
                    </div>
                    <div class="form-group col-md-2 mb-2">
                      <label for="exampleInputEmail1">NIS</label>
                      <input type="text" name="nis" class="form-control" id="nis">
                    </div>
                    <div class="form-group col-md-3 mb-2">
                      <label for="exampleInputEmail1">CPF</label>
                      <input type="text" name="cpf" class="form-control" id="cpf" >
                    </div>
                    <div class="form-group col-md-3 mb-2">
                      <label for="exampleInputEmail1">DataNasc.</label>
                      <input type="text" name="datanascimento" class="form-control" id="aniversario">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3 mb-2">
                      <label for="exampleInputEmail1">Celular</label>
                      <input type="text" name="telefone" class="form-control" id="celular">
                    </div>
                    <div class="form-group col-md-6 mb-2">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" name="email" class="form-control" id="email" placeholder="Insira seu e-mail...">
                    </div>
                    <div class="form-group col-md-3 mb-2">
                      <label for="exampleInputEmail1">CEP</label>
                      <input type="text" name="cep" class="form-control" id="cep">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4 mb-2">
                      <label for="exampleInputEmail1">Rua</label>
                      <input type="text" name="endereco" class="form-control" id="endereco" >
                    </div>
                    <div class="form-group col-md-2 mb-2">
                      <label for="exampleInputEmail1">N°</label>
                      <input type="text" name="numero" class="form-control" id="numero">
                    </div>
                    <div class="form-group col-md-3 mb-2">
                      <label for="exampleInputEmail1">Compl.</label>
                      <input type="text" name="complemento" class="form-control" id="complemento">
                    </div>
                    <div class="form-group col-md-3 mb-2">
                      <label for="exampleInputEmail1">Bairro</label>
                      <input type="text" name="bairro" class="form-control" id="bairro">
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="termo" value="1" class="custom-control-input" id="termo">
                      <label class="custom-control-label" for="termo">Eu Li e Aceito os <a href="#">Critérios do Benefício</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Consultar</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content --><!-- jQuery -->
<script src="res/site/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="res/site/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="res/site/dist/js/adminlte.min.js"></script>
<!-- jQuery -->
<script src="res/site/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="res/site/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="res/site/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="res/site/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="res/site/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="res/site/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// BUSCA CEP ENDEREÇO CADASTRO
// Registra o evento blur do campo "cep", ou seja, quando o usuário sair do campo "cep" faremos a consulta dos dados
$("#cep").blur(function(){
// Para fazer a consulta, removemos tudo o que não é número do valor informado pelo usuário
var cep = this.value.replace(/[^0-9]/, "");
// Validação do CEP; caso o CEP não possua 8 números, então cancela a consulta
if(cep.length!== 8){
return false;
}
// Utilizamos o webservice "viacep.com.br" para buscar as informações do CEP fornecido pelo usuário.
// A url consiste no endereço do webservice ("http://viacep.com.br/ws/"), mais o cep que o usuário
// informou e também o tipo de retorno que desejamos, podendo ser "xml", "piped", "querty" ou o que
// iremos utilizar, que é "json"
var url = "http://viacep.com.br/ws/"+cep+"/json/";
// Aqui fazemos uma requisição ajax ao webservice, tratando o retorno com try/catch para que caso ocorra algum
// erro (o cep pode não existir, por exemplo) o usuário não seja afetado, assim ele pode continuar preenchendo os campos
$.getJSON(url, function(dadosRetorno){
try{
// Insere os dados em cada campo
$("#endereco").val(dadosRetorno.logradouro);
$("#bairro").val(dadosRetorno.bairro);
$("#cidade").val(dadosRetorno.localidade);
$("#uf").val(dadosRetorno.uf);
}catch(ex){}
});
});
</script>
<script>
/*
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function str_replace(busca, subs, valor) {
    var ret = valor;
    var pos = ret.indexOf(busca);
    while (pos !== -1) {
        ret = ret.substring(0, pos) + subs + ret.substring(pos + busca.length, ret.length);
        pos = ret.indexOf(busca);
    }
    return ret;
}

function mascara(valor, masc) {
    var res = valor, mas = str_replace("?", "", str_replace("9", "", masc));
    for (var i = 0; i < mas.length; i++) {
        res = str_replace(mas.charAt(i), "", res);
        mas = str_replace(mas.charAt(i), "", mas);
    }
    var ret = "";
    for (var i = 0; i < masc.length && res !== ""; i++) {
        switch (masc.charAt(i)) {
            case"?":
                ret += res.charAt(0);
                res = res.substring(1, res.length);
                break;
            case"9":
                while (res !== "" && (res.charCodeAt(0) > 57 || res.charCodeAt(0) < 48))
                    res = res.substring(1, res.length);
                if (res !== "") {
                    ret += res.charAt(0);
                    res = res.substring(1, res.length);
                }
                break;
            default:
                ret += masc.charAt(i);
        }
    }
    return ret;
}


$(document).ready(function () {

    $('#documento').keyup(function () {

        if ($(this).val().length <= 14)
            $(this).val(mascara($(this).val(), '999.999.999-99'));
        else
            $(this).val(mascara($(this).val(), '99.999.999/9999-99'));

    });

    $('#ies').keyup(function () {

        if ($(this).val().length <= 15)
            $(this).val(mascara($(this).val(), '999.999.999.999'));
        else
            $(this).val(mascara($(this).val(), '999.999.999.999'));

    });

    $('#contato').keyup(function () {

        if ($(this).val().length <= 13)
            $(this).val(mascara($(this).val(), '(99)9999-9999'));
        else
            $(this).val(mascara($(this).val(), '(99)99999-9999'));

    });

    $('#telefone').keyup(function () {

        if ($(this).val().length <= 13)
            $(this).val(mascara($(this).val(), '(99)9999-9999'));
        else
            $(this).val(mascara($(this).val(), '(99)99999-9999'));

    });

    $('#celular').keyup(function () {

        if ($(this).val().length <= 13)
            $(this).val(mascara($(this).val(), '(99)9999-9999'));
        else
            $(this).val(mascara($(this).val(), '(99)99999-9999'));

    });

    $('#aniversario').keyup(function () {

        if ($(this).val().length <= 10)
            $(this).val(mascara($(this).val(), '99/99/9999'));
        else
            $(this).val(mascara($(this).val(), '99/99/9999'));

    });

    $('#dataMedida').keyup(function () {

        if ($(this).val().length <= 10)
            $(this).val(mascara($(this).val(), '99/99/9999'));
        else
            $(this).val(mascara($(this).val(), '99/99/9999'));

    });

        $('#cep').keyup(function () {

        if ($(this).val().length <= 9)
            $(this).val(mascara($(this).val(), '99999-999'));
        else
            $(this).val(mascara($(this).val(), '99999-999'));

    });

        $('#execucao').keyup(function () {

        if ($(this).val().length <= 24)
            $(this).val(mascara($(this).val(), '9999999-99.9999.9.99.9999'));
        else
            $(this).val(mascara($(this).val(), '9999999-99.9999.9.99.9999'));

    });

        $('#controle').keyup(function () {

        if ($(this).val().length <= 7)
            $(this).val(mascara($(this).val(), '9999/99'));
        else
            $(this).val(mascara($(this).val(), '99999/99'));

    });

        $('#dataExtincao').keyup(function () {

        if ($(this).val().length <= 10)
            $(this).val(mascara($(this).val(), '99/99/9999'));
        else
            $(this).val(mascara($(this).val(), '99/99/9999'));

    });

    return false;
});
</script>
<!-- FORMULÁRIOS COM VALIDAÇÃO-->
<script>
$(function () {

  $('#quickForm').validate({
    rules: {

      nome: {
        required: true
      },
      cpf: {
        required: true
      },
    },
    messages: {

      nome: "Preencha seu nome!",
      cpf: "CPF obrigatório!"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>