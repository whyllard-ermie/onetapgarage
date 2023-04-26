
<html lang="en">
<link rel="stylesheet" href="../css/style.css">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
<link rel='stylesheet' href='https://code.jquery.com/jquery-3.2.1.min.js'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
<!-- MultiStep Form -->
<script  src="../js/join.js"></script>
<?php include 'header.php'?>
<div class="container-fluid" id="">
    <div class="row justify-content-center mt-0" >
        <div class="col-11 col-sm-9 col-md-7 col-lg-7 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3" id="main2">
                <h5><strong>Client Registration Form try l;angggg</strong></h5>
                <h6>Fill all form field to go to next step</h6>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="" method="post" onsubmit="openModal()"  >
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Appoitnment</strong></li>
                                <li id="personal"><strong>Personal Information</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Confirmation</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset id="f1">
                                <div class="form-card">
                                    <label for="fname">First Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="mobile" id="mobile">Mobile</b></label><br>
                                        <input type="text" id="fname" name="fname" />
                                            <input type="text" id="mobilein" name="mobile"><br>
                                    <label for="lname">Last Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="address">Address</label><br>                                   
                                        <input type="text" id="lnameinput" name="lname" placeholder=""/><br>    
                                    <label for="email" id="email">Email</label><br>                                       
                                        <input type="password" name="pwd" id="pass" placeholder=""/><br>                              
                                        <input type="date" name="dob" id="dob" placeholder=""/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card" >
                                <label for="brand">Car Brand</label><br>
                                    <input type="text" name="brand" placeholder=""/><br>
                                <label for="branch">Branch</label>
                                    <input type="text" name="branch" placeholder=""/>
                                <PRE>                                 <label for="services" id="servlabel">SERVICES OFFERED</label>                  <label for="prices" id="prices">PRICE</label></PRE>
                                <div class ="serv">   <pre>                                                  
<input type="checkbox" id="service" name="s1"/><label id="servicelabel" for="service">Air-con Cleaning</label><input type="text" id="price" name="p1"/>
<input type="checkbox" id="service" name="s2"/><label  id="servicelabel" for="service">ATF Fluid Flushing</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s3"/><label id="servicelabel" for="service"> Battery Charging</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s4"/><label id="servicelabel" for="service">Brake Clean & Adjust</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s5"/><label id="servicelabel" for="service">Brake Fluid Flush</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s6"/><label id="servicelabel" for="service">Condenser Replacement</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s7"/><label id="servicelabel" for="service">Change Oil - express</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s8"/><label id="servicelabel" for="service">Change Oil - Plus</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s9"/><label id="servicelabel" for="service">Change Oil - Premium</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s10"/><label id="servicelabel" for="service">Change Air Filter</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s11"/><label id="servicelabel" for="service"> Change Bulb</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s12"/><label id="servicelabel" for="service">Change Cabin Filter</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s13"/><label id="servicelabel" for="service">Change Brake Pad</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s14"/><label id="servicelabel" for="service">Change Spark Plug</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s15"/><label id="servicelabel" for="service">Fan Replacement</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s16"/><label id="servicelabel" for="service">Freon Recharge</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s17"/><label id="servicelabel" for="service"> Radiator Flush</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s18"/><label id="servicelabel" for="service">Tire Rotation</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s19"/><label id="servicelabel" for="service">Wheel Balancing</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s20"/><label id="servicelabel" for="service">Wheel Alignment</label><input type="text" id="price" name="p1" />
<input type="checkbox" id="service" name="s21"/><label id="servicelabel" for="service">PACKAGE SEVICE</label><input type="text" id="price" name="p1" />
</pre>

</div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="../images/gcash.png" width="200px" height="100px"></div>
                                        PLEASE UPLOAD YOUR GCASH QR CODE:
                                        <input type="file" name="file">
                                        <br>
                                    </div>
                                    <label class="pay">Gcash Name</label>
                                    <input type="text" name="holdername" placeholder=""/>
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Gcash Number</label>
                                            <input type="text" name="cardno" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <!-- <label class="pay">Expiry Date*</label> -->
                                        </div>
                                        <div class="col-9">
                                            
                                            <!-- <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="submit"  class="next action-button" name="make_payment"  />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h4><b>Client Confirmation</b></h4><br>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Please review your details before submitting</h5>

                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../customer/footer.php'?>
<!-- modal start -->  
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title">
          <h6><b>Please review your details</b></h6>
        </div>
        
        <div class="d-flex flex-column">
          <form>
            <div class="form-group">
            <?php
echo "The name you entered is $fname";
?>
            </div>
            <div class="form-group">
              <div class="icon">
            </div>
            </div>
            <br><br>
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
  <script  src="../js/review.js"></script>
  <!-- modal end-->    

  

