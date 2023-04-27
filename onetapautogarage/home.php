 <!-- Header-->
 
 <header class="bg-dark py-5" id="main-header" >
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
        <section class="mb-5 pb-5" >
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column gap-4 justify-content-center mx-5 px-5" id="ads">
                &nbsp
                    <h1 class="fw-bold">Be with us!</h1>
                        <span class="fw-bold text-secondary h5">We are here to help your business grow!</span>
                    <div>
                    <a href=""class="btn btn-primary btn-lg px-5" id="join">Join Now</a>
                    </div>
                </div>    
            </div>
        </section>
        <section class="py-5 container" id="services">
        
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5" id="service">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="col">
            <div class="row-md-5">
                <h1 class="text-center fw-bold text-decoration-underline">We Do Service For:</h1>
                <hr class="bg-primary opacity-100">
                <ul class="list-group">
                    <?php 
                    $category = $conn->query("SELECT * FROM `categories` where status = 1 order by `category` asc");
                    while($row=$category->fetch_assoc()):
                    ?>
                    <li class="list-group-item"><b><?php echo $row['category'] ?></b></li>
                    <?php endwhile; ?>
                </ul>
            </div>
                    </section>
            <div class="col-md-12">
                <h1 class="text-center fw-bold text-decoration-underline">Our Services</h1>
                <hr class="bg-primary opacity-100">
                <div class="form-group">
                <div class="input-group mb-3">
                    <input type="search" id="search" class="form-control" placeholder="Search Service Here" aria-label="Search Service Here" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary" id="basic-addon2"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                </div>
                <div class="row gx-2 gx-lg-1 row-cols-4 row-cols-sm-1 row-cols-md-4 row-cols-xl-5" id="service_list">
                    <?php 
                    $services = $conn->query("SELECT * FROM `service_list` where status = 1 order by `service`");
                    while($row= $services->fetch_assoc()):
                        $row['description'] = strip_tags(html_entity_decode(stripslashes($row['description'])));
                    ?>
                    <a class="col item text-decoration-none text-dark view_service" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                        <div class="callout callout-primary border-primary rounded-0">
                            <dl>
                                <dt><?php echo $row['service'] ?></dt>
                                <dd class="truncate-3 text-muted lh-1"><small><?php echo $row['description'] ?></small></dd>
                            </dl>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <div id="noResult" style="display:none" class="text-center"><b>No Result</b></div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 container" id="about">
            <div class="text-center mb-5"  >
                <h1 class="fw-bold text-decoration-underline">About Us</h1>
            </div>
            <div class="row gy-5 gap-5">
                <div class="col-12">
                    <img src="uploads/Group 12.png" class="img-fluid" alt="">
                </div>
                <div class="col-12">
                    <img src="uploads/Group 13.png" class="img-fluid" alt="">
                </div>
            </div>
        </section>
        <section class="py-5 container-fluid orange-section" id="contact">
            <div class="mb-5">
                <h1 class="fw-bold text-decoration-underline text-black text-center">Contact Us</h1>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-6 px-5">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label h5 text-gray">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" id="" aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5 text-gray">Email Address</label>
                                    <input type="email" class="form-control form-control-lg" id="" aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5 text-gray">Mobile No</label>
                                    <input type="email" class="form-control form-control-lg" id="" aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5 text-gray">Message</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                </div>
                                    <button type="submit" class="btn btn-dark btn-lg w-100">Submit</button>
                            </form>
                        </div>
                        <div class="col-6">
                            <div class="">
                                <img src="uploads/Mask group.png" style="width: 620px;" alt="">
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle-x p-4 z-1 h-100 d-flex flex-column justify-content-center text-center gap-3" >
                <h2 class="text-white">Service Beyond the Standards</h2>
                <span class="text-white">Unlock the happiness of driving with our exceptional automotive engineering and design.</span>
                <div class="d-inline">
                <button class="p-3 btn btn-primary text-white"id="learnmore">Learn More</button>
                  
                </div>
            </div>
            <img src="uploads/Group 14.png" class="img-fluid" alt="">
        </section>
        
<script>
    $(function(){
        $('#search').on('input',function(){
            var _search = $(this).val().toLowerCase().trim()
            $('#service_list .item').each(function(){
                var _text = $(this).text().toLowerCase().trim()
                    _text = _text.replace(/\s+/g,' ')
                    console.log(_text)
                if((_text).includes(_search) == true){
                    $(this).toggle(true)
                }else{
                    $(this).toggle(false)
                }
            })
            if( $('#service_list .item:visible').length > 0){
                $('#noResult').hide('slow')
            }else{
                $('#noResult').show('slow')
            }
        })
        $('#service_list .item').hover(function(){
            $(this).find('.callout').addClass('shadow')
        })
        $('#service_list .view_service').click(function(){
            uni_modal("Service Details","view_service.php?id="+$(this).attr('data-id'),'mid-large')
        })
        $('#send_request').click(function(){
            uni_modal("Fill the Service Request Form","send_request.php",'large')
        })

    })
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-transparent navbar-dark')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-#212529')
        }else{
           $('#topNavBar').addClass('navbar-dark ')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>