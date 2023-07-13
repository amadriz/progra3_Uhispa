
<div class="container mt-5" >
    

 <h2>{$msg}</h2> 
<main class="form-signin w-100 m-auto">
    <form action="index.php" method="post">
    
    <input type="hidden" name="accion" value="login">    
    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="pass"  id="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <div class="row">
    <div class="col-sm-6">
        <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
      </div>
      <div class="col-sm-6">
        <a href="index.php?accion=registro" class="btn btn-primary w-100 py-2 mb-3">Registrarse</a>
      </div>      
      
    </div>
  </form>
</main>
    
</div>    