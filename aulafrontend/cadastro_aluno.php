<?php
include "resources/layout/header.php"
?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php
            include "resources/layout/menu.php";
            ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastro de Aluno
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Cadastro de Aluno
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="mensagem alert"></div>
                    <div class="col-lg-6">

                        <form role="form">

                            <input type="hidden" name="idaluno" id="idaluno" value=""/>

                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" name="nome" id="nome" placeholder="Informe o primeiro Nome">
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Idade</label>
                                    <input class="form-control" name="idade" id="idade" maxlength="2">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sexo" id="sexo">
                                        <option value="">Selecione</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" name="email" id="email" placeholder="Informe seu e-mail" type="email">
                            </div>

                            <div class="form-group">
                                <label>Curso</label>
                                <input class="form-control" name="curso" id="curso" placeholder="Informe seu curso">
                            </div>

                        </form>
                    </div>

                    <div class="col-lg-6">

                        <form role="form">
                            <button type="button" class="btn btn-success" id="btSalvar">Salvar</button>
                        </form>
                    </div>
                    
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Idade</th>
                                        <th>Sexo</th>
                                        <th>E-mail</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="aluno_1">
                                        <td id="nome_1" data-nome="Rafael">Rafael</td>
                                        <td id="idade_1" data-idade="26">26</td>
                                        <td id="sexo_1" data-sexo="Masculino">Masculino</td>
                                        <td id="email_1" data-email="rafaelldemacedo@gmail.com">rafaelldemacedo@gmail.com</td>
                                        <td id="curso_1" data-curso="Curso">Curso</td>
                                        <td style="width:16%">
                                            <button type="button" class="btn btn-primary btEditar" id="btEditar_1">Editar</button>
                                            <button type="button" class="btn btn-danger btDeletar" id="btDeletar_1">Deletar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $("li").removeClass("active");
            $("li.cadastro").addClass("active");
            
            $("#btSalvar").on("click",function(){
                limparCampos();
                var idaluno = $("#idaluno").val();
                var nome    = $("#nome").val();
                var idade   = $("#idade").val();
                var sexo    = $("#sexo").val();
                var email   = $("#email").val();
                var curso   = $("#curso").val();

                var erro = false;

                if(nome.length == 0){
                    $("#nome").css("border-color","red");
                    $("#nome").css("color","red");
                    erro = true;
                }

                if(idade.length == 0){
                    $("#idade").css("border-color","red");
                    $("#idade").css("color","red");
                    erro = true;
                }

                if(sexo.length == 0){
                    $("#sexo").css("border-color","red");
                    $("#sexo").css("color","red");
                    erro = true;
                }
                
                if(email.length == 0){
                    $("#email").css("border-color","red");
                    $("#email").css("color","red");
                    erro = true;
                }

                if(curso.length == 0){
                    $("#curso").css("border-color","red");
                    $("#curso").css("color","red");
                    erro = true;
                }

                if(erro == true){
                    $("div.mensagem").addClass("alert-danger").html("<h4>Preencha todos os campos</h4>").show();
                }else{
                    if(idaluno.length == 0){
                        var count = $("table > tbody > tr").length;
                        count++;
                        
                        var tr = '<tr id="aluno_' + count + '">';
                        tr += '<td id="nome_' + count + '" data-nome="' + nome + '">' + nome + '</td>';
                        tr += '<td id="idade_' + count + '" data-idade="' + idade + '">' + idade + '</td>';
                        tr += '<td id="sexo_' + count + '" data-sexo="' + sexo + '">' + sexo + '</td>';
                        tr += '<td id="email_' + count + '" data-email="' + email + '">' + email + '</td>';
                        tr += '<td id="curso_' + count + '" data-curso="' + curso + '">' + curso + '</td>';
                        tr += '<td style="width:16%">';
                        tr += '<button type="button" class="btn btn-primary btEditar" id="btEditar_' + count + '">Editar</button>';
                        tr += '<button type="button" class="btn btn-danger btDeletar" id="btDeletar_' + count + '">Deletar</button>';
                        tr += '</td>';
                        tr += '</tr>';

                        $("table > tbody").append(tr);
                        $("div.mensagem").addClass("alert-success").html("<h4>Cadastrado com sucesso!</h4>").show();

                    }else{
                        $("tr[id=aluno_" + idaluno + "] > td[id=nome_" + idaluno + "]").removeAttr("data-nome");
                        
                        $("tr[id=aluno_" + idaluno + "] > td[id=nome_" + idaluno + "]").attr("data-nome",nome).html(nome);

                        
                    }
                    $("#idaluno").val("");
                    $("#nome").val("");
                    $("#idade").val("");
                    $('#sexo option').removeAttr('selected').filter('[value=""]').attr('selected', true);
                    $("#email").val("");
                    $("#curso").val("");
                }
            });

            $("#idade").on("keyup",function(){
                var idade = this.value;
                this.value = idade.replace(/[^\d]+/g,'');
            });
        });

        function limparCampos(){
            $("#nome").css("border-color","");
            $("#nome").css("color","");

            $("#idade").css("border-color","");
            $("#idade").css("color","");

            $("#sexo").css("border-color","");
            $("#sexo").css("color","");
        
            $("#email").css("border-color","");
            $("#email").css("color","");

            $("#curso").css("border-color","");
            $("#curso").css("color","");

            $("div.mensagem").removeClass("alert-danger  alert-success").html("").hide();
        }
    </script>
    </body>
</html>