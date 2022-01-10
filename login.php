<?php include("./views/header.php"); ?>

<form class="container-fluid brand-side-borders justify-content-center mt-5 mb-5" style="max-width: 460px !important; padding: 15px;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color:white !important">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text brand-orange">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="color:white !important">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div style="text-align: center !important;">
  <button type="submit" class="btn btn-secondary" style="background-color: #D78617;">Submit</button>
  </div>
</form>

<?php include("./views/footer.php"); ?>