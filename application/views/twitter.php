<?php include "header.php" ?>

<style>
/* media query */
@media (max-width: 768px) {
.banner {
height: 300px !important;
padding-left: 10%!important;
font-size:25px;
}
.banner h1 {
    padding-top:25%!important;
    font-size:46px!important;
}

}
/* media query end */


.banner {
  position: relative;
  text-align: center;
  height: 500px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding-left: 100px;
  background: url('assets/images/conference.jpg') no-repeat center center;
  background-size: cover;
}

.banner h1 {
  color: #fff;
  font-size: 4rem;
  font-weight: bold;
  margin: 0;
  /* position: relative; */
  text-align: center;
  z-index: 1;
}
.ytplaylist{
    background-color:black;
    padding: 3% 5% 5% 5%;"
}

</style>
<section>
  <div class="container-fluid banner overlay">
    <h1>Twitter Spaces</h1>
  </div>

</section>


<!-- twitter section started -->

<section class="ytplaylist">

<div class="row text-center" style="margin-top:3%">
  <div class="col-md-12">
    

    <h1 class="pb-4">
    <img style="margin-top:-25px;" src="https://www.freepnglogos.com/uploads/512x512-logo/512x512-transparent-logo-download-twitter-png-transparent-image-and-clipart-8.png" width=80 height=80>
    Twitter
    <!-- <hr style="border:solid 2px #BC974F;width:30%;"> -->
    </h1>

  </div>
</div>



<div class="row text-center">
  <div class="col-md-12 text-center">

    <a class="twitter-timeline" data-height="900" href="https://twitter.com/FTMInvest?ref_src=twsrc%5Etfw">Tweets by FTMInvest</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  </div>
</div>

</Section>


 <!-- twitter section ended -->





<?php include 'footer.php' ?>