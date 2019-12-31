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
            <div class="sidebar-heading"><img src="img/logo.png"><span>Painel De Cadastro</span></div>
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
                <a  class="navbar-brand" href="#" id="navbar-site-title">Painel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#son-navbar-collapse"
                    aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="son-navbar-collapse">
                        <form class="form-inline" id="navbar-search-form">
                                <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar" id="navbar-search-field">
                        </form>
                    
                        <div id="navbar-profile" class="ml-auto">
                                <!-- <img src="img/foto-perfil.jpg" alt="" srcset="">
                                <span>Jonathan Andrade</span> -->
                        </div>
                </div>
            </nav>
            <div id="content" class="container">
                <!-- Tabela -->
                <div class="table-title">
                    <h3 class="son-main-text-3">Orçamentos</h3>
                    <!-- <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar">  -->
                </div>
                <table class="table bg-white">
                    <thead>
                        <tr>
                            <th class="table-col-title">DESCRIÇAO DO SERVIÇO</th>
                            <th class="table-col-title">UNID</th>
                            <th class="table-col-title">VALOR</th>
                            <th class="table-col-title">QUANTIDADE</th>
                            <th class="table-col-title">TOTAL</th>
                        </tr>
                    </thead>
                    <tr>
                        <th>1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <tr>
                        <th>2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tbody>

                    </tbody>
                </table>

                <h3 id="vendas-h3">Graficos De Orçamentos</h3>

                <div class="card">
                    <div class="card-body">
                        <div id="my-chats"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- JS do Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Google charts -->
    <script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <script>
        $("#menu-toggle").click(function(event) {
            event.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>