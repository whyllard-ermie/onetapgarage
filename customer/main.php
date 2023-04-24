<?php
session_start();
if($_SESSION['email']=='')
{
header('location:index.php');
}
?>
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
                <h5><strong>Appointment Form</strong></h5>
                <h6>Fill all form field to go to next step</h6>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
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
                                        <input type="text" id="fname" name="fname">
                                            <input type="text" id="mobilein" name="mobile"><br>
                                    <label for="lname">Last Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="address">Address</label><br>                                   
                                        <input type="text" id="lnameinput" name="lname" placeholder=""/><br>    
                                    <label for="email" id="email">Email</label><br>                                       
                                        <input type="password" name="pwd" id="pass" placeholder=""/><br>                              
                                        <textarea id="add" name="add"></textarea>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card" >
                                    <h2 class="fs-title">Personal Information</h2>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="phno" placeholder="Contact No."/>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No."/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                        <br>
                                    </div>
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="text" name="holdername" placeholder=""/>
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Card Number*</label>
                                            <input type="text" name="cardno" placeholder=""/>
                                        </div>
                                        <div class="col-3">
                                            <label class="pay">CVC*</label>
                                            <input type="password" name="cvcpwd" placeholder="***"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Expiry Date*</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
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
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
