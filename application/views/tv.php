<?php include 'header.php' ?>
    <style>
      .card {
        margin-bottom: 1rem;
      }
      .card-img-top {
        height: 10rem;
        object-fit: cover;
      }
      .videoc{
        padding-top:10%;
        padding-left:6%;
        padding-right:6%;

      }
      .videoc1{
        padding-top:2%;
        padding-bottom:5%;
        padding-left:6%;
        padding-right:6%;
      }
      .card{
  border:solid #B78B36 2px;
      }

      /* video popup */

      .card {
  position: relative;
}

.card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.6);
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.card:hover::before {
  opacity: 1;
}

.card .play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.9);
  color: #333;
  text-align: center;
  line-height: 80px;
  font-size: 40px;
  cursor: pointer;
}

/* banner style */

.banner {
  position: relative;
  height: 500px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding-left: 100px;
  background: url('assets/images/bg/tv_background.jpg') no-repeat center center;
  background-size: cover;
}

.banner h1 {
  color: #fff;
  font-size: 4rem;
  font-weight: bold;
  margin: 0;
  position: relative;
  z-index: 1;
}

.embed-responsive-item
{ 
  border-bottom: solid #CCA354 1px!important;
}

.card:hover{
  -webkit-box-shadow: -1px -1px 14px 1px rgba(231,166,26,1);
-moz-box-shadow: -1px -1px 14px 1px rgba(231,166,26,1);
box-shadow: -1px -1px 14px 1px rgba(231,166,26,1);
}

    </style>

<section>
  <div class="container-fluid banner overlay">
    <h1>On Demand Events(Tv)</h1>
  </div>

</section>

<section>
    <!-- 1st video row -->
    <div class="container-fluid videoc">
      <div class="row">
      <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=Wb6Oc1_SdJw">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wb6Oc1_SdJw?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">The 6ix Report - Kodiak Closes Oversubscribed Upsized Private Placement</h5>
            </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=gYwQyyl7Wik??autoplay=1&mute=0">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gYwQyyl7Wik?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">Golden Opportunities: Uncovering the Lifecycle of Gold Mines</h5>
            </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=Wb6Oc1_SdJw">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wb6Oc1_SdJw?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">Marketing & Managing Major Deposits</h5>
            </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=Wb6Oc1_SdJw">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wb6Oc1_SdJw?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">Projects With Historical Exploration: Going Where Others</h5>
            </div>
        </div>
        </div>

    </div>
</div>
</section>
    <!-- 2nd video row -->
    <section>
      <div class="container-fluid videoc1">
      <div class="row">
      <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=Wb6Oc1_SdJw">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wb6Oc1_SdJw?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">The 6ix Report - Kodiak Closes Oversubscribed Upsized Private Placement</h5>
            </div>
        </div>
        </div>


        <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=Wb6Oc1_SdJw">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wb6Oc1_SdJw?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">Creating a Greener, More Efficient Future</h5>
            </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=Wb6Oc1_SdJw">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wb6Oc1_SdJw?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">The Rocks are Talking, Are We Listening?</h5>
            </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card h-100" data-video="https://www.youtube.com/watch?v=Wb6Oc1_SdJw">
            <div class="card-img-top embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wb6Oc1_SdJw?autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-body">
            <h5 class="card-title">Giyani Metals President And CEO Danny Keating Discusses His</h5>
            </div>
        </div>
        </div>


        </div>
      </div>

    
    </section>

    <?php include 'footer.php' ?>