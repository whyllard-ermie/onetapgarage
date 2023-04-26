
 <!-- modal start -->    
  <div class="modal fade" id="SignUpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <h5><b>Sign Up</b></h5>
        
        <div class="d-flex flex-column">
        <form name="registration" method="post" action="../reg.php">
            <div class="form-group">
         <pre> <h6>Name                      Last Name</h6></pre>
              <input type="text" class="form-control" id="fname" name="fname" value="">
            </div>
            <div class="form-group">
              <input type="lname" class="form-control" id="lname" name="lname" value="">
            </div>
          <form>
            <div class="form-group">
            <h6>Email</h6>
              <input type="email" class="form-control" id="email1" name="email" value="">
            </div>
            <div class="form-group">
            <h6>Pasword</h6>
              <input type="password" name="password" autocomplete="current-password" required=""  class="form-control" id="id_password1">
              <div class="icon">
                <i class="far fa-eye" id="togglePassword1"></i>
</div>
            &nbsp
            <div class="form-group">
            <h6>Confirm Pasword</h6>
              <input type="password"  name="cpassword" autocomplete="current-password" required="" class="form-control" id="id_password2">
              <div class="icon">
                <span class="far fa-eye" id="togglePassword2"></span>
</div>
            </div>
            <div>
       <h6> <b><div class="signup-section">Already have an account? <a href="" data-toggle="modal" data-target="#loginModal" class="text-info" data-dismiss="modal"> Sign in now</a></div></h6></b>
      </div>
            <button type="submit" name="submit" value="submit" class="btn btn-info btn-block btn-round"><b>Submit</b></button>
          </form>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
<script src="showpass1.js"></script>
  </article>
 </main>
 
    
