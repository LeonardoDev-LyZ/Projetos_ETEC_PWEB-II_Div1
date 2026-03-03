<?php
/*declaração de atributos(mesma coisa que variável)*/
$imagem = 'notebookacer.webp';
$titulo = 'Notebook Acer';
$resumo = 'Notebook com processador Intel Core I7 1645U, com 32GB de ram e armazenamento de 2TB. WiFi 6, BlueTooth 5.4 e rede 1Gb';
$valor = 5999.87 
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <title>O Lojinha</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">LogoDaLojinha</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"
                  >Inicial</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categorias.html">Categorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="subcategorias.html">Subcategorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container-fluid">
          <div class="form-group mt-3">
            <input type="text" name="busca" id="busca" class="form-control" />
          </div>
        <div class="row mt-2">
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="<?php echo $imagem; ?>" class="card-img-top img-fluid" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?php echo $titulo; ?></h5>
                <p class="card-text">
                  <?php echo $resumo; ?>
                  <p class="text-danger"><b>R$ <?php echo $valor; ?></b></p>
                </p>
                <a href="#" class="btn btn-outline-dark">Mostrar Produto</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 18rem">
              <img src="notebookvaio.webp" class="card-img-top img-fluid" alt="..." />
              <div class="card-body">
                <h5 class="card-title">PRODUTO 2</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card’s content.
                </p>
                <a href="#" class="btn btn-outline-dark">Mostrar Produto</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 18rem">
              <img src="notebookvaio.webp" class="card-img-top img-fluid" alt="..." />
              <div class="card-body">
                <h5 class="card-title">PRODUTO 3</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card’s content.
                </p>
                <a href="#" class="btn btn-outline-dark">Mostrar Produto</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="width: 18rem">
              <img src="notebookvaio.webp" class="card-img-top img-fluid" alt="..." />
              <div class="card-body">
                <h5 class="card-title">PRODUTO 4</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card’s content.
                </p>
                <a href="#" class="btn btn-outline-dark">Mostrar Produto</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
