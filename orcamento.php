<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel - Oliveira Construção</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- SIDEBAR-->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="img/logo.png"><span>Orçamento</span></div>
            <div class="list-group list-group-flush border-right">
                <a href="index.php" class="list-group-item list-group-item-action"><i class="fas fa-home"></i>Inicio</a>
                <!-- <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>Funcionários</a> -->
                <a href="orcamento.php" class="list-group-item list-group-item-action"><i class="fas fa-box-open"></i>Orçamento</a>
                <!-- <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i>Categorias</a> -->
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-people-carry"></i>Fornecedores</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="far fa-chart-bar"></i>Relatórios</a>
            </div>   
        </div>
        <!-- CONTEÚDO -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light" id="son-navbar">
                <span id="menu-toggle" class="mr-auto"><img src="img/logo.png" class="mx-auto d-block"></span>
                <a  class="navbar-brand" href="#" id="navbar-site-title">Orçamento Oliveira Constroução</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#son-navbar-collapse"
                    aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="son-navbar-collapse">
                        <form class="form-inline" id="navbar-search-form">
                                <!-- <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar" id="navbar-search-field"> -->
                        </form>
                    
                        <div id="navbar-profile" class="ml-auto">
                                <!-- <img src="img/foto-perfil.jpg" alt="" srcset="">
                                <span>Jonathan Andrade</span> -->
                        </div>
                </div>
            </nav>
        <!-- Formulário -->
        <h3 id="main-page-form-title" class="son-main-text-3">  </h3> 
            <div class="new-card">
                <form class="card son-form">
                    <div class="card-body son-form-body">
                        <div class="row form-group">
                        <div class="col-sm">
                            <label for="">Cliente: </label>
                            <input type="text" class="form-field son-form-field form-control" id="user-field" placeholder="Cliente">
                        </div>
                        <div class="col-sm">
                            <label for="">Endereço: </label>
                            <input type="text" class="form-field son-form-field form-control" id="user-field" placeholder="">
                        </div>
                        <div class="col-sm">
                            <label for="">Contato: </label>
                            <input type="text" maxlength="15" class="form-field son-form-field form-control" id="user-field" placeholder="(083) 98888-0000">
                        </div>
                        <hr>
                    </div>

                    <div class="form-group">
                        <label for="">Descrição</label>
                        <textarea name="msn" id="body-field" class="form-field son-form-field form-control" placeholder="Escreva um pouco sobre você."></textarea>
                        <hr>
                    </div>             
                    <div>
                        <label for="">Data</label>
                        <input type="date" class="form-field son-form-field form-control" id="date-filed">
                    </div>
                    </div>
                                
                    <div class="confirm-btns card-footer">
                        <button class="btn btn-primary">Puclicar Orçamento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- JS do Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(event) {
            event.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>