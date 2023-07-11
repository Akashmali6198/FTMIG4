
    <!-- footer section start -->
    <div class="footer__bottom">
    <div class="container" style="padding:30px">
      <div class="row">
         <div class="container-fluid">  
    <div class="row">  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <a href="#0" class="footer-logo"><img src="assets/images/logo.png" alt="image"></a>
          <ul class="list-unstyled">  
            <li> <a href="#"> </a> </li>  
            <li> <a href="#" style="color: aliceblue;">Events</a></li>  
            <li> <a href="#" style="color: aliceblue;">Live</a></li>  
            <li> <a href="#" style="color: aliceblue;">TV</a></li>  
            <li> <a href="#" style="color: aliceblue;">Markets</a></li>  
            <li> <a href="#" style="color: aliceblue;" >Magazine</a></li>  
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
         <h4>INVESTMENT DISCOVERY PLATFORM</h4>
         <br>
          <ul class="list-unstyled">  
            <li><a href="#" style="color: aliceblue;" >Companies</a> </li>  
            <li><a href="#" style="color: aliceblue;" >Speakers</a> </li>  
            <li><a href="#" style="color: aliceblue;" >Conference</a></li>  
            <li><a href="#" style="color: aliceblue;">Chat</a></li>  
            <li><a href="#" style="color: aliceblue;">Strategy</a></li>  
            <li><a href="#" style="color: aliceblue;">Summits</a></li>  
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4>INVESTOR EXPERIENCE PLATFORM</h4>
          <br>  
          <ul class="list-unstyled">  
            <li> <a href="#" style="color: aliceblue;">Ads</a> </li>  
            <li> <a href="#" style="color: aliceblue;">Web</a> </li>  
            <li> <a href="#" style="color: aliceblue;" >Creative</a> </li>  
            <li> <a href="#" style="color: aliceblue;" >IXO</a> </li>  
            <li> <a href="#" style="color: aliceblue;">Analytics</a> </li>  
          </ul>  
        </div>  
      </div>  
        <div class="col-md-3">  
            <h4>OFFICE CONTACT</h4>
            <br>  
            <ul class="social-network social-circle">  
             <li> <a href="#" class="icoFacebook" title="Facebook" style="color: aliceblue;">(833) 544-4456</a> </li>  
             <li> <a href="#" class="icoLinkedin" title="Linkedin" style="color: aliceblue;">friends@6ix.com</a> </li>  
    <li> <a href="#" style="color: aliceblue;">#202-1200 Bay St., Toronto,
Ontario, Canada, M5R 2A5</a> </li>  
            </ul>               
    </div>  
    </div>  
    <div class="row">  
    <div class="col-md-12 copy">  
    </div>  
    </div>  
  </div> 

        <div class="col-md-6 text-md-left text-center">
          <hr style="color:#fff">
          <br>
          <p>© 2020 <a href="index.html" class="base--color">Follow The Money Investor Group</a>. All rights reserved</p>
        </div>
        <div class="col-md-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer section end --> 
  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/wow.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/js/app.js"></script>



  <!-- Your HTML code for the video cards goes here -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


<script>
$(document).ready(function() {
  $('.card').on('click', function() {
    var videoUrl = $(this).data('video');
    $.magnificPopup.open({
      items: {
        src: 'https://www.youtube.com/watch?v=' + videoUrl
      },
      type: 'iframe',
      iframe: {
        markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
        patterns: {
          youtube: {
            index: 'youtube.com/',
            id: 'v=',
            src: '//www.youtube.com/embed/%id%?autoplay=1&mute=1&controls=0'
          }
        },
        srcAction: 'iframe_src',
      }
    });
  });
});
</script>


  </body>
</html> 