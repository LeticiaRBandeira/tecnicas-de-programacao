<?php
$db = $conn;

$look = new look($db);

$acao = $_REQUEST["acao"];

switch ($acao) {
    case 'cadastrar':
        $look->nome_look       = $_POST['nome_look'];
        $look->ocasiao_look   = $_POST['ocasiao_look'];
        $look->clima_look     = $_POST['clima_look'];
        $look->descricao_look  = $_POST['descricao_look'];
        
        // Checkbox: Se o checkbox for enviado, o valor é '1', caso contrário, é '0' (FALSE).
        $look->favoritos_look = isset($_POST['favoritos_look']) ? 1 : 0;
        
        // Array de IDs de Roupas selecionadas
        // O nome do campo é 'roupas_ids[]' no formulário
        $look->roupas_ids = isset($_POST['roupas_ids']) ? $_POST['roupas_ids'] : [];

        // 2. Tenta criar o look (isso envolve criar a entrada na tabela principal e na look_roupa)
        if ($look->criar()) {
            // Usa 'window.location.href' para redirecionamento, mais seguro que 'header()' se o output já começou
            print "<script>
                alert('Look cadastrado com sucesso!');
                window.location.href = '?page=listar-looks';
            </script>";
        } else {
            print "<script>
                alert('Erro ao cadastrar look. Verifique a conexão e tente novamente.');
                window.location.href = '?page=cadastrar-looks';
            </script>";
        }
        break;

    case 'editar':
        // Lógica de edição
        
        // 1. Coletar e atribuir dados do POST
        $look->id_look         = $_POST['id_look']; // Necessário para saber qual look editar
        $look->nome_look       = $_POST['nome_look'];
        $look->ocasiao_look   = $_POST['ocasiao_look'];
        $look->clima_look     = $_POST['clima_look'];
        $look->descricao_look  = $_POST['descricao_look'];
        $look->favoritos_look = isset($_POST['favoritos_look']) ? 1 : 0;
        $look->roupas_ids      = isset($_POST['roupas_ids']) ? $_POST['roupas_ids'] : [];
        
        // 2. Tenta atualizar o look (implementação na classe Look.php necessária)
        // if ($look->atualizar()) { ... }
        
        print "<script>
            alert('A função de editar ainda não está totalmente implementada na classe Look.php. Dados recebidos, mas não salvos.');
            window.location.href = '?page=listar-looks';
        </script>";
        
        break;

    case 'excluir':
        // Lógica de exclusão (necessita de um ID enviado via GET ou POST)
        if (!isset($_REQUEST['id'])) {
             print "<script>
                alert('ID do Look para exclusão não fornecido.');
                window.location.href = '?page=listar-looks';
            </script>";
            exit;
        }

        $look->id_look = $_REQUEST['id'];

        if ($look->deletar()) {
             print "<script>
                alert('Look excluído com sucesso!');
                window.location.href = '?page=listar-look';
            </script>";
        } else {
            print "<script>
                alert('Erro ao excluir look. Tente novamente.');
                window.location.href = '?page=listar-look';
            </script>";
        }
        break;
        
    default:
        print "<script>
            alert('Ação inválida.');
            window.location.href = '?page=listar-look';
        </script>";
        break;
}
?>