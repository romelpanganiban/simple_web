@include('header')

<section id="about-us">
    <div class="container-img">

        <div class="about-us-header text-center">
            <img src="/assets/images/about-us/bed.png" class="mb-20">
            <h1>REST & RELAX</h1>
            <p class ="p-header">Book your stay with us for a seamless blend of luxury accommodations, exquisite dining, and soothing amenities <br> a perfect escape where every detail is crafted to ensure your ultimate rest and relaxation.</p>
        </div>

        <div class="image-container">
            
            <div class="box">
                <div class="imgBX">
                    <img src="/assets/images/about-us/regular-room.png" class="img-about-us-bed">
                </div>

                <div class="content">
                    <div>
                        <p>Regular Room</p>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="imgBX">
                <img src="/assets/images/about-us/vip-room.png" class="img-about-us-bed">
                </div>

                <div class="content">
                    <div>
                        <p>Vip Room</p>
                    </div>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBX">
                <img src="/assets/images/about-us/swimming-pool.png" class="img-about-us-bed">
                </div>

                <div class="content">
                    <div>
                        <p>Swimming Pool</p>
                    </div>
                </div>
            </div>

        </div> 

    </div>
</section>

<section id="service">
    <div class="container-img">
        <div class="services-header text-center">
            <img src="/assets/images/services/services.png" class="mb-20">
            <h1>SERVICES</h1>
            <p class ="p-header">indulge in unparalleled comfort with our hotel reservation services, offering a seamless blend of exquisite accommodations, <br> delectable dining at our restaurant, refreshing beverages, and impeccable laundry service <br> all crafted to elevate your stay to a realm of luxury and convenience</p>
        </div>

        
        <div class="image-container">
            
            <div class="box">
                <div class="img-service-1">
                    <img src="/assets/images/services/dining.png" class="img-services">
                </div>

                <div class="content">
                    <div>
                        <p>Beverages</p>
                    </div>
                </div>
            </div>


            <div class="box" id="box2">
                <div class="img-service-2">
                <img src="/assets/images/services/service.png" class="img-services">
                </div>

                <div class="content">
                    <div>
                        <p>Restaurant</p>
                    </div>
                </div>
            </div>
            
            <div class="box"  id="box3">
                <div class="img-service-3">
                    <img src="/assets/images/services/laundry.png" class="img-services">
                </div>

                <div class="content">
                    <div>
                        <p>Laundry</p>
                    </div>
                </div>
            </div>

        </div> 
    </div>
</section>

<section id="faq">
    <div class="faq-header text-center">
        <img src="/assets/images/faq/faq.png" class="mb-20">
        <h1 class="mb-40">FREQUENTLY ASKED QUESTIONS</h1>
    </div>

    <center>

    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed accordion-item-header" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Can I make a reservation without a credit card?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> In most cases, a valid credit card is required to secure a reservation. Some hotels may offer alternative payment options, such as a deposit or prepayment. Check the hotel's specific policies for more information.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed accordion-item-header" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      What is the hotel's cancellation policy?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">  In most cases, a valid credit card is required to secure a reservation. Some hotels may offer alternative payment options, such as a deposit or prepayment. Check the hotel's specific policies for more information.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed accordion-item-header" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      What is the hotel's cancellation policy?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> Each hotel has its own cancellation policy, which dictates the time frame within which you can cancel your reservation without incurring charges. This information is typically provided during the booking process and can be found in your confirmation email.</div>
    </div>
  </div>
</div>

    </center>
</section>


<section id="location">
   <div class="faq-header text-center">
            <img src="/assets/images/location/location.png" class="mb-20">
            <h1 class="mb-40">LOCATION</h1>
    </div>

    <div class="location-container">
            <!-- Google Map Copied Code -->
            <iframe src="https://maps.google.com/maps?q=Silcas,Biñan&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                    width="100%"
                    height="500px"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
            </iframe>
    </div>
</section>

<section id="contact-us">
        <div class="container-contact mt-70">
                <div class="contact-header text-center mb-50">
                        <img src="/assets/images/contact-us/contact.png" class="mb-20">
                        <h1 class="mb-40">CONTACT</h1>
                </div>

                <div class="flex-container-contact">
                        <div class="mt-60">
                                <form id="send" >
                                        <div id="errorMessage" class="alert alert-warning d-none"></div>
                                        <input type="text" placeholder="Name" class="form-control mb-20" name="name" />
                                        <br>
                                        <input type="text" placeholder="Mobile Number" class="form-control mb-20" name="phonenumber" />
                                        <br>
                                        <textarea rows="5" cols="50" placeholder="Message" class="form-control mb-20" name="message"></textarea>
                                        <br>
                                        <center><button type="submit" class="btn-theme">Send Inquiry</button> </center>
                                </form>
                        </div>
                        
                        <div>
                                <img src="/assets/images/contact-us/contact-image.png" class="image-contact">
                        </div>
                </div>
        </div>
</section>

@include('footer')