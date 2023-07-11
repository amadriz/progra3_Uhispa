<div class="container mt-5" >
    
  
<main class="form-signin w-100 m-auto">
    <form action="index.php" method="post">
    
    <input type="hidden" name="accion" value="registro"> 

    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">{$titulo}</h1>

    <div class="mb-3">
    <label class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
      
    </div>
    <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
      <input type="text" class="form-control" name="primerApellido"  id="primerApellido" placeholder="Primer Apellido" required>
    </div> 
    <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
        <input type="text" class="form-control" name="segundoApellido"  id="segundoApellido" placeholder="Segundo Apellido" required>  
    </div>
    <div class="mb-3">
    <label class="form-label">Cédula</label>
        <input type="text" class="form-control" name="cedula"  id="cedula" placeholder="Cédula" required>
    </div>
    <div class="mb-3">
    <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email"  id="email" placeholder="Email" required>
    </div>
    <div class="mb-3">
    <label class="form-label">Password</label>
        <input type="password" class="form-control" name="pass"  id="pass" placeholder="password" required>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary  py-2" type="submit">Registrarse</button>
    </div>

    </form>
</main>
    
</div>    