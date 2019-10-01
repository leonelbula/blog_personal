<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          PUBLICACIONES          
        </h1>
        <?php

        foreach ($ListaPost as $key => $value):
       
         ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?= $value['titulo']?></h2>
            <p class="card-text"><?= $value['descripcion'] ?></p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            <?= $value['fecha']?>            
          </div>
        </div>
      <?php endforeach ?>
              
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item disabled">
            <a class="page-link" href="#">&larr; Más nuevo</a>
          </li>
          <li class="page-item ">
            <a class="page-link" href="#">Más viejo &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Buscar</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Buscar!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php foreach ($categorias as $key => $valueC) :
                     ?>
                  <li>
                    <a href="<?= $valueC['ruta']?>"><?= $valueC['nombre']?></a>
                  </li>                  
                <?php endforeach; ?>
                </ul>
              </div>
             
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">ANUNCIOS</h5>
          <div class="card-body">
            <?php
           
            foreach ($anuncio as $key => $valueA) {
              echo $valueA['descripcion'];
            }
            ?>
            
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->