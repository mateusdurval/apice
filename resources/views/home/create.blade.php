<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastrar Usuário</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Icon -->
        <link href="{{URL::asset('img/logo_gscia.png')}}" rel="shortcut icon">

        <!-- Bootstrap and Style.css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <!-- Plugin jQuery Mask Plugin -->
        <script src="{{URL::asset('mask/src/jquery.mask.js')}}"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f8b439a839.js" crossorigin="anonymous"></script>

        <!-- Masks -->
        <script>
            $(document).ready(function(){
                $('#cpf').mask('000.000.000-00');
                $('#rg').mask('00.000.000-00');
                $('#cep').mask('00000-000');
                $('#telefone').mask('(00) 00000-0000');
                $('#nascimento').mask('00/00/0000');
            });
        </script>
    </head>
    <body>
        <!-- Nav Principal -->
        <nav class="navbar navbar-expand-lg" id="background-nav">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link espacamento-nav" href="/">Painel <i class="fas fa-home"></i></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                    
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Cadastrar Usuário</a>
                            <a class="dropdown-item" href="#">Editar Usuário</a>
                            <a class="dropdown-item" href="#">Remover Usuário</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1">Utilitários</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuários</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::asset('img/profiles/mateus.jpg')}}" class="rounded-circle" width="35" height="35"> Mateus Durval</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="#">Editar Perfil</a>
                            <a class="dropdown-item" href="#">Configurações</a>
                            <a class="dropdown-item" href="#">Administradores</a>
                        </div>
                    </li>   

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-top: 6%">Sair <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
        </nav>

        <!-- Título "Cadastrar Usuário" -->
       <div class="container" style="margin-top: 1%;">
            <div class="row">
                <h1>Cadastrar Usuário</h1>
            </div>
       </div>

       <!-- Breadcrumb -->
       <div class="container" style="margin-top: 1%;">
            <div class="row">
                <div class="col-md-12" style="padding: 0">
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="/" style="color: rgba(0,0,0,0.8);">Painel</a></li>
                            <li class="breadcrumb-item active">Cadastrar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Primeira etapa do cadastro de usuário -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 div1" style="border: 1px solid #ccc; border-radius: 5px; padding: 2%;">
                    <h5>Dados do Usuário</h5>

                    <form action="" method="POST" enctype="multipart/form-data" id="form1">
                        {{csrf_field()}}
                        <div class="col-md-10" style="padding: 0; margin-top: 4%">
                            <label for="nome">Nome: <span style="color: red;">*</span></label>

                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                </div>

                                <input type="text" name="nome" id="nome" class="form-control form-control-sm nome" placeholder="Ex.: Mateus" autofocus="" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-10" style="padding: 0; margin-top: 4%">
                            <label for="sobrenome">Sobrenome: <span style="color: red;">*</span></label>

                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                </div>

                                <input type="text" name="sobrenome" id="sobrenome" class="form-control form-control-sm nome" placeholder="Ex.: Durval" autofocus="" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-10" style="padding: 0; margin-top: 4%">
                            <label for="nome">CPF: <span style="color: red;">*</span></label>
                            
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-id-card"></i></div>
                                </div>

                                <input type="text" name="cpf" id="cpf" class="form-control form-control-sm" placeholder="Ex.: 000.000.000-00" autocomplete="off">
                                <div class="invalid-feedback"></div><div class="valid-feedback"></div>
                            </div>
                        </div>

                        <div class="col-md-10" style="padding: 0; margin-top: 4%">
                            <label for="nome">RG: <span style="color: red;">*</span></label>

                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-address-card"></i></div>
                                </div>
                            
                                <input type="text" name="rg" id="rg" class="form-control form-control-sm" placeholder="Ex.: 00.000.000-00" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-10" style="padding: 0; margin-top: 4%">
                            <label for="nome">Data de Nascimento: <span style="color: red;">*</span></label>

                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>

                                <input type="text" name="nascimento" id="nascimento" class="form-control form-control-sm" placeholder="Ex.: dd/mm/aaaa" autocomplete="off">
                            </div>
                        </div>
                    
                        <div class="col-md-10" style="padding: 0; margin-top: 4%">
                            <label for="nome">E-mail: <span style="color: red;">*</span></label>
                            
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                </div>
                                
                                <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Ex.: email@email.com" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-10" style="padding: 0; margin-top: 4%">
                            <label for="teefone">Telefone Celular: <span style="color: red;">*</span></label>
                            
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                </div>
                                
                                <input type="text" name="telefone" id="telefone" class="form-control form-control-sm" placeholder="Ex.: (00) 00000-0000" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-auto" style="padding: 0; margin-top: 4%;">
                            <a href="javascript:void(0)" class="btn btn-success btn-sm buttonProx1" style="opacity: 0.6; background-color: #17a2b8;" disabled>Próximo <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </form>
                </div>

                <!-- Segunda etapa do cadastro de usuário -->
                <div class="col-md-4 div2">
                    <h5>Endereço</h5>

                    <form action="" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-6" style="margin-top: 4%">
                                <label for="cep">Código Postal <span style="color: red;">*</span></label>
                                <input type="text" name="cep" id="cep" class="form-control form-control-sm" placeholder="Ex.: 00000-000" autocomplete="off" disabled>
                            </div>

                            <div class="col-md-6" style="margin-top: 4%;">
                                <label for="estado">UF: <span style="color: red;">*</span></label>
                                <input type="text" name="estado" id="estado" class="form-control form-control-sm" placeholder="Ex.: BA" autocomplete="off" disabled>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6" style="margin-top: 4%">
                                <label for="cidade">Cidade: <span style="color: red;">*</span></label>
                                <input type="text" name="cidade" id="cidade" class="form-control form-control-sm" placeholder="Ex.: Salvador" autocomplete="off" disabled>
                            </div>

                            <div class="col-md-6" style="margin-top: 4%">
                                <label for="bairro">Bairro: <span style="color: red;">*</span></label>
                                <input type="text" name="bairro" id="bairro" class="form-control form-control-sm" placeholder="Ex.: Placaford" autocomplete="off" disabled>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-7" style="margin-top: 4%">
                                <label for="logradouro">Logradouro: <span style="color: red;">*</span></label>
                                <input type="text" name="logradouro" id="logradouro" class="form-control form-control-sm" placeholder="Ex.: Alameda 17" autocomplete="off" disabled>
                            </div>

                            <div class="col-md-5" style="margin-top: 4%">
                                <label for="numero">Número: <span style="color: red;">*</span></label>
                                <input type="text" name="numero" id="numero" class="form-control form-control-sm" placeholder="Ex.: 104 A" autocomplete="off" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" style="margin-top: 4%">
                                <label for="complemento">Complemento:</label>
                                <input type="text" name="complemento" id="complemento" class="form-control form-control-sm" placeholder="Ex.: Próximo a lugar tal" autocomplete="off" disabled>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-auto" style="margin-top: 4%">
                                <a href="javaScript:void(0)" class="btn btn-success btn-sm" style="background-color: #17a2b8;">Próximo <i class="fas fa-chevron-right"></i></a>
                                
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-3 div3" style="">
                    <p>ainda será feito algo aqui</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: center; margin-top: 1%">
                    <a href="/" class="btn btn-dark btn-sm"><i class="fas fa-chevron-left"></i> Voltar</a>
                </div>
            </div>
            
        </div>

        <script>
            //verifica se já existe um cadastro com o cpf informado
            $(document).ready(function() {
                let nome, cpf, rg, nascimento, email, telefone = '';

                $("#nome").on('keyup', function() {
                    nome = $(this).val();                    
                });
                $("#cpf").on('change', function() {
                    cpf = $(this).val();
                    $.ajax({
                        method: 'get',
                        url: '/home/teste/'+cpf,
                        success: function(data) {
                            if(data === 'not') {
                                $(".invalid-feedback").html('Já existe um cadastro com o CPF informado.');
                            } else {
                                $(".invalid-feedback").html('');
                            }
                        }
                    });
                });

                $("#rg").on('keyup', function() {
                    rg = $(this).val();  
                });

                $("#nascimento").on('keyup', function() {
                    nascimento = $(this).val();  
                });

                $("#email").on('keyup', function() {
                    email = $(this).val();  
                });

                $("#telefone").on('keyup', function() {
                    telefone = $(this).val(); 
                    
                    if(nome, cpf, rg, nascimento, email, telefone != '') {
                        $(".buttonProx1").css({opacity:2});
                    } else {
                        $(".buttonProx1").css({opacity:0.7});
                    }
                }); 

                
                $(document).on('click', '.buttonProx1', function() {
                    $.ajax({
                        method: 'POST',
                        url: '/home/store/',
                        data: {nome: nome, sobrenome: sobrenome, cpf: cpf, rg: rg, nascimento: nascimento, email: email, telefone: telefone},
                        beforeSend: function() {
                            //
                        }
                    }).done(function(data) {
                        console.log(data);
                        if(data == 'ok') {
                            $(".div2").css({opacity:2});
                            $("#cep").removeAttr('disabled');
                            $("#estado").removeAttr('disabled');
                            $("#cidade").removeAttr('disabled');
                            $("#logradouro").removeAttr('disabled');
                            $("#numero").removeAttr('disabled');
                            $("#complemento").removeAttr('disabled');
                            $("#bairro").removeAttr('disabled');
                            $(".div1").css({opacity:0.7});
                        }
                    });

                    $(document).on('click', '.div1', function() {
                        $(this).css({opacity:2});
                    });
                });
            });
        </script>

        <!-- VIA CEP-->
        <script>
            $("#cep").focusout(function() {
                $.ajax({
                    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
                    dataType: 'json',
                    success: function(resposta) {
                        $("#logradouro").val(resposta.logradouro);
                        $("#complemento").val(resposta.complemento);
                        $("#bairro").val(resposta.bairro);
                        $("#estado").val(resposta.uf);
                        $("#cidade").val(resposta.localidade);
                        $("#numero").focus();
                    }
                });
            });
        </script>

        <script src="{{URL::asset('pace/pace.min.js')}}"></script>
    </body>
</html>