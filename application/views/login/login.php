


  
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  
    <main role="main" class="inner cover">
    <form class="form-signin"action="<?php echo site_url('Home/verifica'); ?>" method="post">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inicio De Sesion</h1>
  <label for="inputEmail" class="sr-only">Email </label>
  <input type="email"name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <br>
  <input type="password" name="password"id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
  
    <label>
      <input type="checkbox" value="remember-me"> Recordar contraseña
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
</main>
</div>
