<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          CONTACTOS
        </h1>
        <?php

        foreach ($informacion as $key => $value):
       
         ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="img-thumbnail" src="<?=URL_BASE?>/imagen/perfil/<?= $value['img']?>" width="300px" height="250px" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?= $value['nombre']?></h2>
            <p class="card-text"><?= $value['email'] ?></p>
              <p class="card-text"><?= $value['telefono'] ?></p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
         
        </div>
      <?php endforeach ?>
              
        <!-- Pagination -->
   

      </div>

      <!-- Sidebar Widgets Column -->
      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->