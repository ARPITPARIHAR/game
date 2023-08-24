<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<br>
<br>
<br>
<body>
<section class="upcoming_games_area">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="main_title">
                  <div class="portfolio-heading">
                      <h4 id="portfolioSection">Our Portfolio</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<div class="row text-center">
    <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="new_games_item">
     
    <img src="https://preview.colorlib.com/theme/comodo/img/b_map1.png" alt="">
    <div class="upcoming_title">
    <h4><a href="games.html">Best Ps4 Games</a></h4>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="new_games_item">
    <img src="https://preview.colorlib.com/theme/comodo/img/b_map2.png" alt="">
    <div class="upcoming_title">
    <h4><a href="games.html">World Dart 2019</a></h4>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="new_games_item">
    <img src="https://preview.colorlib.com/theme/comodo/img/b_map3.png" alt="">
    <div class="upcoming_title">
    <h4><a href="games.html">New XBox Games</a></h4>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="new_games_item">
    <img src="https://preview.colorlib.com/theme/comodo/img/b_map4.png" alt="">
    <div class="upcoming_title">
    <h4><a href="games.html">Amarican Football</a></h4>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <section class="about-us">
          
            <!--<div class="card col-12 col-md-12 col-lg-12">-->
              <h2 class="section-title">About Us</h2>

              <div class="card-big">
                 <p class="cardbig-link mbr-fonts-style m-0 display-4">
                 
                                Welcome to [Your Game Name]</strong>, your ultimate destination for [brief description of your game's purpose or genre]</span>. Our team is passionate about creating engaging and immersive gaming experiences that keep players entertained for hours on end.Our mission is to [describe your mission, such as providing high-quality games that inspire creativity, challenge players, etc.]</span>. We believe that games have the power to bring people together, foster creativity, and provide an escape from the daily routine With [number of] years of experience in the gaming industry, we have >[mention any achievements, milestones, or unique features of your games]</span>. We are dedicated to pushing the boundaries of what's possible in gaming and delivering unforgettable experiences to players of all ages</p>
                           
                          </div>
                      </div>
            
                  </div>
              </div>
        
  </section>
  
   
</body>
<br>
<br>
<div class="dragArea row">
  <div class="wrapper-form" >
    <h3 class="text-white mb-4">Get a Quote</h3>
  @if(session('centerSuccess'))
    <div class="overlay">
        <div class="success-message">
            {{ session('centerSuccess') }}
            <button class="close-button" id="closeButton">Close</button>
        </div>
    </div>
@endif


    <form id="quoteForm" action="{{ route('quote') }}" method="post">
      @csrf
      <div class="form-con">
        <input type="text" name="name" data-form-field="Name" required="required" class="form-control oval-input display-7" placeholder="Your Name " id="name-forms4-8c" style="height: 50px;">
        <br>
        <input type="text" name="email" data-form-field="E-mail" class="form-control oval-input display-7" required="required" placeholder="Your E-mail Address" id="email-forms4-8c" style="height: 50px;">
        <br>
        <input type="text" name="FeaturesRequired" data-form-field="E-mail" class="form-control oval-input display-7" required="required" placeholder="Features Required" id="email-forms4-8c" style="height: 50px;">
        <br>
        <input type="text" name="BudgetRange" data-form-field="E-mail" class="form-control oval-input display-7" required="required" placeholder="Budget Range" id="email-forms4-8c"style="height: 50px;">
        <br>
        <textarea name="Message" placeholder="Additional Information" data-form-field="Message" class="form-control textarea oval-input display-7" id="Message-forms4-8c" style="height: 100px;"></textarea>
        <br>
        <div class="mbr-section-btn">
          <button type="submit" class="btn btn-primary display-7" style="border-radius: 50px; width: 150px;">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

<br>



<section class="contacts4 map cid-r5iLIa1ttn" id="contacts4-9">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <div class="first-element mbr-flex mbr-col-sm-12 mbr-col-md-5">
                  <h3 class="contacts-title mbr-fonts-style mbr-bold display-2">Contacts</h3>
                  <div class="contacts-box mbr-pt-4">
                      <div class="address mbr-flex">
                          <div class="cotacts-icon">
                              <span class="amp-iconfont fa-map-marker fa"></span>
                          </div>
                          <p class="mbr-text mbr-fonts-style mbr-regular display-4"><strong>ADDRESS:</strong><br><span>Y-18-A,
                            Sudarshana Nagar<br>
                            Bikaner (Rajasthan) 334003</span></p>
                      </div>
                      <div class="phone mbr-flex mbr-pt-3">
                          <div class="cotacts-icon">
                              <span class="amp-iconfont fa-volume-control-phone fa"></span>
                          </div>
                          <span class="fas fa-phone-alt"></span>
                          <p class="mbr-text mbr-fonts-style mbr-regular display-4"><strong>PHONE:</strong><br><span><br>1234-567-89-12</span></p>
                      </div>
                      <div class="email mbr-flex mbr-pt-3">
                          <div class="cotacts-icon">
                              <span class="amp-iconfont fa-envelope fa"></span>
                          </div>
                          <p class="mbr-text mbr-fonts-style mbr-regular display-4"><strong>EMAIL:</strong><br><span>contact@auricletechnologies.com<br></span></p>
                      </div>
                  </div>
              </div>
          </div>
          
         <div class="col-lg-6">
    <div class="map-block mbr-col-sm-12 mbr-jc-c mbr-flex mbr-m-auto mbr-column mbr-col-md-7" style="margin-top: 20px;">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220.18644260501418!2d73.34259678603189!3d27.994414007983714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1687893595114!5m2!1sen!2sin" style="width: 100%; max-width: 800px; height: 400px;"></iframe>
    </div>
</div>

          </div>
        </div>
      </div>
  </div>
</section>


<style>


    /* .about-us {
      background-image: url('/assets/img/9.jpg');
      
    } */
    
.dragArea-row {
    border: 2px dashed white !important;
    border-radius: 30px !important;
    padding: 1.5rem !important;
    width: calc(100% - 4px) !important;*/
    max-width: 650px !important;
    margin: 0 2px !important;*/
    margin-bottom: 20px !important;
   
}


   .wrapper-form{
       margin-left:25px;
   }
@media (max-width: 768px) {
   
    
    .wrapper-form {
        /*margin-left: 15px; */
        /*margin-right: 15px; */
    }
    .card-big{
        margin-left: 15px;
        margin-right:-15px;
    }
     .body {
        overflow-x: hidden !important;   
    }
    
}

.form-control::placeholder {
        text-align: center;
    }
.oval-input {
    border-radius: 150px!important; 
}

.wrapper-form {
    text-align: center;
    padding: 2rem 2rem;
    border-radius: 30px;
    background-color: #45b3df;
    width: 650px!important; 


}


.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.success-message {
    background-color: #f0f8eb;
    color: green;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    position: relative;
    width:300px;
    height:50px;
}

.close-button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    position: absolute;
    top: 3px;
    right: 10px;
    color: gray;
}




.form-con {
    border: 2px dashed white;
    padding: 2rem 2rem;
    border-radius: 30px;
}

.textarea.oval-input {
    border-radius: 150px!important; 
}



    .contacts4 {
            background-color: #fed1c3; /* Set the desired background color */
        }

    .display-4 {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 1.9rem !important; 
    line-height: 1.5;
    word-break: break-word;
    word-wrap: break-word;
    font-weight: 200;
    color: white;
}

.card-big {
    background: #19303d;
    height: 100%;
    border-radius: 6px;
    padding: 1rem 2rem;
    margin-left:10px;
    margin-right:5px;
}
   



.p{
    font:white;}
  .container{
    background-color: white:
  }
  .contacts-title {
    font-family: 'Poppins', sans-serif;
    font-size: 5.00rem !important; 
    line-height: 1.2;
    font-weight: 700 !important; 
    color: #194f82; 
    margin: 0;
    padding: 0;
    letter-spacing: 0.68px;
    font: inherit;
    display: block;
    font-size: 3.17em !important;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font:bold;
}

.cid-r5iLIa1ttn .mbr-text {
    width: auto;
    font-family: 'Roboto', sans-serif;
    font-size: 1.2rem !important; 
    line-height: 1.7;
    font-weight: 500;
  
    margin-bottom: 0;
    margin-top: 0;
    color: #194f82;;
}

.bold-strong {
    font-weight: bold;
}

.matter {
    font-size: 0.2em; /* Adjust the font size as needed */
    font-weight: normal;
    color: #3f485d; /* Adjust the color as needed */
}

.bold-address {
    font-weight: bold;
}

.bold-phone-email {
    font-weight: bold;
}

.bold-address span,
.bold-phone-email span {
    font-weight: normal;
}


.amp-iconfont {
    color: #194f82;
    margin: 0 4px;
    font-size: 15px;
}
.section-title {
    color: #194f82 !important;
    text-align: center;
}


   
.quote-form label {
    color: white;
}
.modal-content {
    border: none;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

.modal-header {
    background-color: #007bff;
    color: white;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.modal-title {
    font-size: 20px;
}

.modal-body {
    padding: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-control {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
    padding: 10px 20px;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

  .upcoming_games_area {
    text-align: center;
  }
  
  .new_games_item {
    position: relative;
    display: inline-block;
    margin: 15px;
  }

  .new_games_item img {
    max-width: 100%;
    height: auto;
  }

  .new_games_item .upcoming_title {
    position: absolute;
    background: rgba(44, 37, 93, 0.8);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    transition: all 0.4s ease;
  }

  .portfolio-heading {
    text-align: center;
    background-color:black; /* Background color */
    border-radius: 50%; /* Make it round */
    padding: 20px; /* Add some spacing */
    display: inline-block;
  }

  .portfolio-heading h4 {
    margin: 0;
    font-family: 'Poppins', sans-serif; 
    font-size: 30px; 
    color: #fff; 
  }

  .quote-container {

    padding: 40px;
    border-radius: 10px;
  
}

.quote-form {
    background-color:blueviolet;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
}

.quote-form h3 {
    color:white;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}


.footer-area {
    padding: 40px 0 !important;  

}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#portfolioButton').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('#portfolioSection').offset().top
            }, 800);
        });

        $('#quoteButton').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('.quote-container').offset().top
            }, 800);
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const closeButton = document.getElementById('closeButton');
    closeButton.addEventListener('click', function () {
        const overlay = document.querySelector('.overlay');
        overlay.style.display = 'none';
    });
});
</script>