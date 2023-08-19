<?php include 'header.php' ?>
<style>
  @media (max-width: 768px) {

/* .card-medium-img.cmi-not-car {
    padding: 14px!important;
} */
.banner {
    height: 300px !important;
    padding: 4%!important;

}
.banner h1 {
    font-size: 39px!important;

  }
  .row{
    margin-right: unset;
    margin-left: unset;
}



}
  /* media query */

.banner {
  position: relative;
  text-align: center;
  height: 500px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding-left: 100px;
  background: url('assets/images/bg/event_background.jpg') no-repeat center center;
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
</style>
<section>
  <div class="container-fluid banner overlay">
    <h1>Upcoming Events</h1>
  </div>

</section>
 <!-- blog section start -->
 <section class="pt-120 pb-120 border-top-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Our Latest</span> <b class="base--color">Events</b></h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse voluptatum eaque earum quos quia Id aspernatur ratione, voluptas nulla rerum laudantium neque ipsam eaque</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="blog-card">
              <div class="blog-card__thumb">
                <img src="assets/images/blog/1.jpg" alt="image">
              </div>
              <div class="blog-card__content">
                <h4 class="blog-card__title mb-3"><a href="#0">Laboriosam distinctio nisi debitis deleniti voluptatum corporis.</a></h4>
                <ul class="blog-card__meta d-flex flex-wrap mb-4">
                  <li>
                    <i class="las la-user"></i>
                    <a href="#0">fahaddevs</a>
                  </li>
                  <li>
                    <i class="las la-calendar"></i>
                    <a href="#0">20 Nov, 2020</a>
                  </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.</p>
                <a href="#0" class="cmn-btn btn-md mt-4">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="blog-card">
              <div class="blog-card__thumb">
                <img src="assets/images/blog/2.jpg" alt="image">
              </div>
              <div class="blog-card__content">
                <h4 class="blog-card__title mb-3"><a href="#0">Laboriosam distinctio nisi debitis deleniti voluptatum corporis.</a></h4>
                <ul class="blog-card__meta d-flex flex-wrap mb-4">
                  <li>
                    <i class="las la-user"></i>
                    <a href="#0">fahaddevs</a>
                  </li>
                  <li>
                    <i class="las la-calendar"></i>
                    <a href="#0">20 Nov, 2020</a>
                  </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.</p>
                <a href="#0" class="cmn-btn btn-md mt-4">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="blog-card">
              <div class="blog-card__thumb">
                <img src="assets/images/blog/3.jpg" alt="image">
              </div>
              <div class="blog-card__content">
                <h4 class="blog-card__title mb-3"><a href="#0">Laboriosam distinctio nisi debitis deleniti voluptatum corporis.</a></h4>
                <ul class="blog-card__meta d-flex flex-wrap mb-4">
                  <li>
                    <i class="las la-user"></i>
                    <a href="#0">fahaddevs</a>
                  </li>
                  <li>
                    <i class="las la-calendar"></i>
                    <a href="#0">20 Nov, 2020</a>
                  </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.</p>
                <a href="#0" class="cmn-btn btn-md mt-4">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- blog section end -->
<?php include 'footer.php' ?>