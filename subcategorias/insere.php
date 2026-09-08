<?php
require '../controle/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$msg = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subcategoria = strtoupper(filter_input(INPUT_POST, 'edtsubcategoria'));
    $catid = filter_input(INPUT_POST, 'edtcid');
    $sql = "insert into subcategorias(subnome,subcatid)values(?,?);";
    $prp = $pdo->prepare($sql);
    if ($prp->execute([$subcategoria, $catid])) {
        $msg = '<span class="alert alert-success">Dados gravados com Sucesso!!!</span>';
        header("refresh: 5; url=consulta.php");
    } else {
        $msg = '<span class="alert alert-danger">Não foi possível gravar os Dados!!!</span>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Alteração de Categorias</title>
</head>

<body>
    <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="edtcategoria">Subcategoria</label>
                <input type="text" name="edtsubcategoria" id="edtsubcategoria" class="form-control" required>
            </div>
            <label for="edtcategoria">Categoria</label>
            <div class="input-group">
                <input type="text" name="edtcid" id="edtcid" class="form-control" required readonly>
                <input type="text" name="edtcnome" id="edtcnome" class="form-control" required readonly>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalGridCategoria">🔍 Buscar</button>
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3">💾 Gravar</button>
            <?php echo $msg; ?>
        </form>
        <!-- Modal -->
        <?php
        $sqlc = "select * from categorias;";
        $prpc = $pdo->prepare($sqlc);
        $prpc->execute();
        ?>
        <div class="modal fade" id="modalGridCategoria" tabindex="-1" aria-labelledby="modalGridCategoriaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalGridCategoriaLabel">Selecione a Categoria</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($dscategoria = $prpc->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $dscategoria['catnome']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-info" onclick="pegaCategoria('<?php echo $dscategoria['catid']; ?>','<?php echo $dscategoria['catnome']; ?>')" id="btnselecionar" name="btnselecionar">✔️ Selecionar</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">🚪 Sair</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>