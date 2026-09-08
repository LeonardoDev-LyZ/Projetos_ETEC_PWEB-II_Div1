<?php
require '../controle/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "
select 
    s.subid,
    s.subnome,
    s.subcatid,
    c.catnome,
    s.subativo
from subcategorias as s
inner join categorias as c
on s.subcatid = c.catid;";
$prp = $pdo->prepare($sql);
$prp->execute();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Consulta de Subategorias</title>
</head>

<body>
    <div class="container mt-3">
        <div class="text-end">
            <a href="insere.php" class="btn btn-outline-success">📄 Novo</a>
        </div>
        <div class="input-group mt-3">
            <input type="text" name="edtbusca" id="edtbusca" class="form-control" placeholder="Digite o nome da Subcategoria para filtrar">
            <button type="button" class="btn btn-outline-info">🔍 Filtrar</button>
        </div>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">Subategoria</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($dssubcategoria = $prp->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $dssubcategoria['subnome']; ?></td>
                        <td><?php echo $dssubcategoria['subativo'] ? 'ATIVO' : 'INATIVO'; ?></td>
                        <td>
                            <a href="altera.php?id=<?php echo $dssubcategoria['subid']; ?>" class="btn btn-outline-warning">✏️</a>
                            <a href="exclui.php?id=<?php echo $dssubcategoria['subid']; ?>" class="btn btn-outline-danger">🗑️</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>