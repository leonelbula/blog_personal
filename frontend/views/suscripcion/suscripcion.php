<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          SUSCRIBETE
        </h1>
        <p>Suscribete para notificarte cuando se agregue nuevo contenido</p>
        
        <!-- Blog Post -->
        <div class="card mb-4">
          
          <div class="card-body">
            <form action="<?=URL_BASE?>suscripcion/guardar" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Dirección de correo electrónico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Dirección de correo electrónico" required>
                  <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nombre" placeholder="Nombre" required>
                </div>                
                <button type="submit" class="btn btn-primary">Suscribir</button>
              </form>
          </div>
         
        </div>
      
              
        <!-- Pagination -->
   

      </div>

      <!-- Sidebar Widgets Column -->
      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->