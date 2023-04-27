

<link rel="stylesheet" type="text/css" href="./assets/css/mycss.css" />

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="topNavBar">
            <div class="container px-4 px-lg-6 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="100" height="60" class="d-inline-block align-top" alt="" loading="lazy">
                <img src="<?php echo $_settings->info('short_name') ?> " width="440" height="50" class="d-inline-block align-top" alt="" loading="lazy">
                </a>

                <!-- <form class="form-inline" id="search-form">
                  <div class="input-group">
                    <input class="form-control form-control-sm form " type="search" placeholder="Search" aria-label="Search" name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"  aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-success btn-sm m-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li id="navlink" class="nav-item"><a class="nav-link" aria-current="page" href="./">Our Clients</a></li>
                        <li id="navlink" class="nav-item"><a class="nav-link" href="#service">Service Offered </a></li>
                        <li id="navlink" class="nav-item"><a class="nav-link" href="#about">About Us </a></li>
                        <li id="navlink" class="nav-item"><a class="nav-link" href="#contact">Contact Us </a></li>      
                        <button class="book" id="send_request" type="button">Book Now</button>       
                    </ul>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>