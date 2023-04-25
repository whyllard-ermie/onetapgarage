  <!-- modal start -->    
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title">
          <h5><b>Sign In</b></h5>
        </div>
        <div class="d-flex flex-column">
          <form action="php/login.php" method="POST">
            <div class="form-group">
            <h6>Email</h6>
              <input type="email" class="form-control" autofocus="" name="email"  id="email1">
            </div>
            <div class="form-group">
            <h6>Pasword</h6>
              <input type="password" name="password" autocomplete="current-password" required="" id="id_password" class="form-control">
              <div class="icon">
                <i class="far fa-eye" id="togglePassword"></i>
</div>
            </div>
            <div>
       <h6> <b><div class="signup-section">Don't you have an account? <a href="" data-toggle="modal" data-target="#SignUpmodal" data-dismiss="modal" > Sign Up</a></div></h6></b>
      </div>
      &nbsp&nbsp
            <button type="submit" class="btn btn-info btn-block btn-round" name="login" value="Log In"><b>Submit</b></button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->

  
  </article>
 </main>
 
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
   <!-- Custom Script -->      
  <script  src="js/script.js"></script>
  <?php require_once "SignUpmodal.php"; ?>
  <!-- modal end-->    


  