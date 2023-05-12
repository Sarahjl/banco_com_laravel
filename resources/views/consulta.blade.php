<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web</title>
    <link rel="stylesheet" href="/css/style.css">

    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'    
    ])
</head>
<body style="background: #d3d3d3;">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-sm text-light bg-dark mt-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">SISTEMA  WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/consulta">Consulta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main bg-white">
            <div class="container px-5">
                <div class="row">
                    <div class="col mt-3">
                        <h4>Consultar - Contatos Agendados</h1>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Observação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($agendamentos as $agendamento)
                            <tr>
                                <td>{{  $agendamento->nome  }} </td>
                                <td>{{  $agendamento->telefone  }} </td>
                                <td>{{  $agendamento->origem  }} </td>
                                <td>{{  $agendamento->data_contato  }} </td>
                                <td>{{  $agendamento->observacao  }} </td>
                                <td>
                                    <a href="/editar?agendamento={{$agendamento->id}}" class="btn btn-dark">Editar</a> 
                                    <a href="/excluir?agendamento={{$agendamento->id}}" class="btn btn-dark">Excluir</a> 
                                </td>
                            </tr>
                            @endforeach
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>