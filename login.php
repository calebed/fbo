<?php include("./views/header.php"); ?>

<form class="container-fluid brand-side-borders justify-content-center mt-5 mb-5" style="max-width: 460px !important; padding: 15px;">
  <div class="mb-3">
    <label for="loginInputEmail1" class="form-label" style="color:white !important">Email address</label>
    <input type="email" class="form-control" id="loginInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text brand-orange">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="loginInputPassword1" class="form-label" style="color:white !important">Password</label>
    <input type="password" class="form-control" id="loginInputPassword1">
  </div>
  <div style="text-align: center !important;">
    <button type="submit" class="btn btn-secondary" style="background-color: #D78617;">Log in</button>
  </div>
  <div class="row mt-3">
    <div class="col-sm">
      <a href="#" style="color:#D78617">Forgot password?</a>
    </div>
    <div class="col-sm text-end">
      <a class="justify-content-end" href="signup.php" style="color:#D78617;">Sign up</a>
    </div>
  </div>
</form>

<?php include("./views/footer.php"); ?>