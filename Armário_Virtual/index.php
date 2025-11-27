<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Armário virtual</title>
    <!-- Use CDN para compatibilidade se o arquivo local não estiver funcionando -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Opcional: Icones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-tshirt"></i> Armário Virtual
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> Usuário
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-usuario">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-usuario">Listar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-tags"></i> Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-categorias">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-categorias">Listar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-hanger"></i> Roupas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-roupas">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-roupas">Listar</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <?php
                // Inclusão da conexão com o banco de dados (config.php)
                include('config.php');

                // includes das páginas
                // Usando @$_REQUEST['page'] para pegar a variável 'page' da URL
                switch(@$_REQUEST['page']) {
                    // usuario
                    case 'cadastrar-usuario':
                        include('cadastrar-usuario.php');
                        break;
                    case 'listar-usuario':
                        include('listar-usuario.php');
                        break;
                    case 'editar-usuario':
                        include('editar-usuario.php');
                        break;
                    case 'salvar-usuario':
                        include('salvar-usuario.php');
                        break;

                    // categorias
                    case 'cadastrar-categorias':
                        include('cadastrar-categorias.php');
                        break;
                    case 'listar-categorias':
                        include('listar-categorias.php');
                        break;
                    case 'editar-categorias':
                        include('editar-categorias.php');
                        break;
                    case 'salvar-categorias':
                        include('salvar-categorias.php');
                        break;

                    // roupas
                    case 'cadastrar-roupas':
                        include('cadastrar-roupas.php');
                        break;
                    case 'listar-roupas':
                        include('listar-roupas.php');
                        break;
                    case 'editar-roupas':
                        include('editar-roupas.php');
                        break;
                    case 'salvar-roupas':
                        include('salvar-roupas.php');
                        break;

                    default:
                        print '<div class="alert alert-info" role="alert">
                                <h2><i class="fas fa-smile-beam"></i> Seja bem vindo ao seu armário virtual!</h2>
                                <p>Use o menu de navegação acima para cadastrar suas roupas, criar categorias e montar looks completos.</p>
                               </div>';
                }
                ?>
            </div>		
        </div>
    </div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>