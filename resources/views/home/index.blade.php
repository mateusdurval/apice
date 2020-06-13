<!doctype html>
<html lang="pt-br">
    <head>
        <title>Ápice - Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Icon -->
        <link href="{{URL::asset('img/logo_gscia.png')}}" rel="shortcut icon">

        <!-- Bootstrap and Style.css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f8b439a839.js" crossorigin="anonymous"></script>
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

        <!-- Título "Usuários" -->
       <div class="container" style="margin-top: 1%;">
            <div class="row">
                <div class="col-md-3">
                    <h1>Usuários</h1>
                </div>
            </div>
       </div>

        <!-- Breadcrumb -->
        <div class="container" style="margin-top: 1%;">
            <div class="row">
                <div class="col-md-12">
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Painel</li>
                            <li class="breadcrumb-item"><a href="{{route('home.create')}}" style="color: rgba(0,0,0,0.8);">Cadastrar</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pesquisa, Botões de Cadastro e Relatórios -->
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding: 0;">
                    <div class="row" style="margin-left: 60%">
                            <div class="col-md-auto" style="padding-right: 0;">
                                <input type="text" name="search" class="form-control form-control-sm search" placeholder="Pesquisar por nome">
                            </div>
                            <div class="col-md-auto" style="padding-left: 1px">
                                <button type="submit" class="btn btn-sm btn-info btnSearch"><i class="fas fa-search"></i></button>
                            </div>
                        <div class="col-md-auto" style="padding: 0; text-align: right">
                            <a href="" class="btn btn-sm btn-dark"><i class="fas fa-sticky-note"></i> Relatório</a>
                            <a href="{{route('home.create')}}" class="btn btn-sm btn-success">Adicionar <i class="fas fa-user-plus"></i></a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
        
        @if(session('message'))
            <div class="container">
                <div class="row" style="margin-top: 1%;">
                    <div class="col-md-12">
                        <div class="alert alert-success" style="text-align: center;">
                            {{session('message')}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        

        <!-- Título de Usuários Cadastrados -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="text-align: center; margin-top: 2%;">Usuários Cadastrados ({{$total}})</h4>
                </div>
            </div>
        </div>

        <!-- Foreach Table -->
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top: 2%;">                
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th class="color-th-table"></th>
                                <th class="color-th-table">#ID</th>
                                <th class="color-th-table">Nome:</th>
                                <th class="color-th-table">Contato:</th>
                                <th class="color-th-table">CPF:</th>
                                <th class="color-th-table">Nascimento:</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(session('search'))
                                <tr>
                                    <td>AAA</td>
                                </tr>
                            @else
                                @foreach($usuarios as $usuario)
                                <tr>
                                    <td><input type="checkbox" class="check" value="{{$usuario->id}}" data-id="{{$usuario->id}}"></td>                         
                                    <td>{{$usuario->id}}</td>
                                    <td style="width: 15%;"><a href="" class="btn btn-sm btn-info"><i class="far fa-address-card"></i> {{$usuario->nome}}</a></td>
                                    <td>{{$usuario->telefone}}</td>
                                    <td>{{$usuario->cpf}}</td>
                                    <td>{{$usuario->nascimento}}</td>
                                    <td><a href="home/edit/{{$usuario->id}}" style="color: rgba(0,0,0,0.8);" data-id="{{$usuario->id}}" class="btnEdit"><i class="far fa-edit"></i></a></td> 
                                    <td><a href="javascript:void(0)" style="color: rgba(0,0,0,0.8);" data-id="{{$usuario->id}}" class="btnRemove"><i class="far fa-trash-alt"></i></a></td>      
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="col-md-1" style="padding:0">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger btnSeveralDelete" style="display:none; border-radius: 50px">Excluir <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Confirm Delete -->
        <div class="modal" tabindex="-1" role="dialog" id="MyModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ops...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Você realmente deseja excluir o usuário selecionado?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger btnConfirmDelete">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

        <!-- Script Delete -->
        <script>
            $(document).ready(function() {
                let id = null;
                let buttonRemove = null;
                $(document).on('click', '.btnRemove', function() {
                    id = $(this).data('id');
                    buttonRemove = $(this);
                    $('#MyModal').modal('toggle');
                });

                //chama o método de exclusão com ajax
                $(document).on('click', '.btnConfirmDelete', function() {
                    $.ajax({
                        method: 'DELETE',
                        url: '/home/destroy/'+id
                    }).done(function(data) {
                        if(data == "ok") {
                            if (buttonRemove != null) {
                                buttonRemove.closest('tr').remove();
                                $('#MyModal').modal('toggle');
                            }
                        } else {
                            alert("Erro ao deletar usuário.");
                        }
                    });
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                var array = [];
                let selected = null;

                $(document).on('click', '.check', function() {
                    if($.inArray($(this).val(), array)) {
                        console.log('já tem');
                    } else {
                        console.log('não tem');
                    }
                    array.push($(this).data('id'));
                    console.log(array);
                    $(".btnSeveralDelete").css({display:'block'});

                    if($(this).attr('checked', true)) {
                        $(".btnRemove").css({display:'none'});
                    } else {
                        $(".btnRemove").css({display:'block'});
                    }
                });

                $(document).on('click', '.btnSeveralDelete', function() {
                    $.ajax({
                        method: 'POST',
                        url: '/home/several_destroy/',
                        data: {ids: array}
                    }).done(function(data) {
                        window.location = '/';
                    });
                });
            });
        </script>

        <script src="{{URL::asset('pace/pace.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>