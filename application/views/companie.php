<?php include 'header.php' ?>

<style>
      #slider .carousel-item {
        height: 80vh;
        background-size: cover;
        background-position: center;
      }
      
      #slider .carousel-caption {
        left: 5%;
        top: 50%;
        transform: translate(0,-50%);
        color: #fff;
        text-shadow: 1px 1px 2px rgba(0,0,0,.6);
      }
      
      #slider .caption-title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
      }
      
      #slider .caption-text {
        font-size: 1.5rem;
        line-height: 1.6;
        margin-bottom: 1rem;
      }

      #slider .carousel-item .container {
  max-width: 50%;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
}
#slider .carousel-item.active img {
  filter: brightness(80%);
}
#slider .carousel-item.active::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}
.padc{
    padding-top:90px!important;
}

.slidetxt
{
    padding-left:10%;
}
.speaker{
    color:#CCA354;
}
.nav-pills .nav-link {
  margin-bottom: 30px;
  padding:20px;
  border:solid 2px gray;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color:black;
    -webkit-box-shadow: 0px 0px 3px 2px rgba(231,166,26,1);
-moz-box-shadow: 0px 0px 3px 2px rgba(231,166,26,1);
box-shadow: 0px 0px 3px 2px rgba(231,166,26,1);
border:solid white 1px;
}
.col-md-9 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
  margin-bottom: 50px;
}

.speakercol{
    background-color:#010101;
    padding:0px;
    /* -webkit-box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
-moz-box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
box-shadow: -23px -20px 4px -7px rgba(231,166,26,1);
border:solid white 1px; */
}
img.speaker-image {
    width: 100%!important;
    height:200px;
    background-color:white;
}
.pads{
    padding:15px;
}

.speakerinfo{
    background-color:#1c1c1c;
    padding:20px;
    border:solid white 1px;
border-left:0px;
}
.colorchange:hover{
  -webkit-box-shadow: 0px 0px 3px 2px rgba(231,166,26,1);
-moz-box-shadow: 0px 0px 3px 2px rgba(231,166,26,1);
box-shadow: 0px 0px 3px 2px rgba(231,166,26,1);
}

/* .scrollable-text {
  height:300px; /* or any other desired height */
  /* overflow-y: scroll;
} */
.scrollable-text::-webkit-scrollbar {
  width:0px;

} */
    </style>

<section id="slider">
    <div class="container-fluid p-0 padc">
      <div class="row">
        <div class="col-md-12 p-0">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" style="background-image: url('https://wallpapercave.com/dwp2x/wp7226772.png')">
                <div class="container slidetxt">
                  <h1>Companies</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl in nibh eleifend lobortis. Duis nec felis leo. Mauris finibus metus vel lorem congue, eget aliquam massa ullamcorper.</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image: url('https://www.jobstreet.com.ph/career-resources/wp-content/uploads/sites/3/2022/08/Best-Companies-in-the-Philippines-This-2022.jpg')">
                <div class="container  slidetxt">
                  <h1>Companies</h1>
                  <p>Aliquam lacinia mauris purus, a pharetra nisi faucibus vel. Quisque rhoncus convallis nisl, id rutrum tellus dignissim sed. Sed quis mollis lectus.</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image: url('https://indiacsr.in/wp-content/uploads/2021/07/companies-in-india-750x563.jpg')">
                <div class="container  slidetxt">
                  <h1>Companies</h1>
                  <p>Maecenas interdum vel nisi vel sagittis. Integer tincidunt, tellus a dapibus mollis, nibh nulla hendrerit lacus, sed venenatis nunc ante vel quam.</p>
                </div>
              </div>
            </div>


            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>

              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- slider end -->


<div class="container" style="padding-top:5%;">
  <div class="row">
    <div class="col-md-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active colorchange" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">

        <h3 class="speaker">79North<h3>
            <h6>CSE: JQ | OTCQB: SVNTF |</h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
            <h3 class="speaker">Advance United<h3>
            <h6>CSE: AUHI | OTCQB: AUHIF | </h6>
        </a>
        <a class="nav-link colorchange" id="v-pills-tab-3" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">

        <h3 class="speaker">Adventus Mining<h3>
            <h6>TSX.V: ADZN |OTCQX:ADVZF

</h6>
        </a>
    
        <a class="nav-link colorchange" id="v-pills-tab-4" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
            
        <h3 class="speaker">Affinity Metals<h3>
            <h6>TSX.V: AFF</h6>
        </a>

        <a class="nav-link colorchange" id="v-pills-tab-5" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">
            
        <h3 class="speaker">Altiplano Metals<h3>
            <h6>TSX.V: APN | OTCQX: ALTFP</h6>
        </a>

        
      </div>
    </div>


    <div class="col-md-9">
      <div class="tab-content" id="v-pills-tabContent">

        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-tab-1">

        <div class="company-hero-info">

<div class="container">

   <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 

                   <div class="speaker-info">

                                                <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2021/10/79North-Logo-1.png" class="speaker-image entered lazyloaded" data-lazy-src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Abraham-Braam-Jonker.jpeg" data-ll-status="loaded"><noscript><img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/12/Abraham-Braam-Jonker.jpeg" class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">79North </h3>

                    <p class="pads">CSE: JQ | OTCQB: SVNTF |</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                           This is a mineral exploration company spun out of Regulus Resources Inc. in 2018 and has the same core management team. Aldebaran acquired the Rio Grande copper-gold project located in Salta Province, Argentina, from Regulus along with several other early-stage projects in Argentina. Aldebaran also has the right to earn up to an 80% interest in the Altar copper-gold project in San Juan Province, Argentina from Sibanye-Stillwater. 
                           <br><br>Altar hosts a cluster of large porphyry copper-gold systems with mineralization currently defined in four distinct zones. The Altar project forms part of a larger cluster of world-class porphyry copper deposits, which includes Los Pelambres in Chile (Antofagasta Minerals), along with El Pachón (Glencore), and Los Azules (McEwen Copper) in Argentina. 
                           <br><br>A total of 266 drill holes (123,968 m) have been completed at Altar between 2003 and 2021. In mid-2018 an updated NI 43-101 resource was prepared for Altar by Independent Mining Consultants Inc. based on the drilling completed up to 2017. 
                          </p></div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>
        </div>

    <!-- tab2 -->
        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-tab-2">
          
        <div class="company-hero-info">

<div class="container">

   <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 

                   <div class="speaker-info">

                                                <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/10/download.png" class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">Advance United</h3>

                    <p class="pads">CSE: AUHI | OTCQB: AUHIF |</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                           This is a mineral exploration company spun out of Regulus Resources Inc. in 2018 and has the same core management team. Aldebaran acquired the Rio Grande copper-gold project located in Salta Province, Argentina, from Regulus along with several other early-stage projects in Argentina. Aldebaran also has the right to earn up to an 80% interest in the Altar copper-gold project in San Juan Province, Argentina from Sibanye-Stillwater. 
                           <br><br>Altar hosts a cluster of large porphyry copper-gold systems with mineralization currently defined in four distinct zones. The Altar project forms part of a larger cluster of world-class porphyry copper deposits, which includes Los Pelambres in Chile (Antofagasta Minerals), along with El Pachón (Glencore), and Los Azules (McEwen Copper) in Argentina. 
                           <br><br>A total of 266 drill holes (123,968 m) have been completed at Altar between 2003 and 2021. In mid-2018 an updated NI 43-101 resource was prepared for Altar by Independent Mining Consultants Inc. based on the drilling completed up to 2017. 
                          </p>
                       </div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>
        
        </div>

        <!-- tab3 -->
        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-tab-3">
         
        <div class="company-hero-info">

<div class="container">

   <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 

                   <div class="speaker-info">

                                                <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2021/10/logo-adventus-02-1-1.png" class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">Adventus Mining</h3>

                    <p class="pads">TSX.V: ADZN | OTCQX:ADVZF</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                           This is a mineral exploration company spun out of Regulus Resources Inc. in 2018 and has the same core management team. Aldebaran acquired the Rio Grande copper-gold project located in Salta Province, Argentina, from Regulus along with several other early-stage projects in Argentina. Aldebaran also has the right to earn up to an 80% interest in the Altar copper-gold project in San Juan Province, Argentina from Sibanye-Stillwater. 
                           <br><br>Altar hosts a cluster of large porphyry copper-gold systems with mineralization currently defined in four distinct zones. The Altar project forms part of a larger cluster of world-class porphyry copper deposits, which includes Los Pelambres in Chile (Antofagasta Minerals), along with El Pachón (Glencore), and Los Azules (McEwen Copper) in Argentina. 
                           <br><br>A total of 266 drill holes (123,968 m) have been completed at Altar between 2003 and 2021. In mid-2018 an updated NI 43-101 resource was prepared for Altar by Independent Mining Consultants Inc. based on the drilling completed up to 2017. 
                          </p></div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>

          </div>

          <!-- tab4 -->
        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-tab-4">
         
        <div class="company-hero-info">

<div class="container">

   <div class="row">

          <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 

                   <div class="speaker-info">

                                                <img src="data:image/jpeg;base64,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"  class="speaker-image"/></noscript>
                       <div class="speaker-border"></div>

                    
                    <h3 class="speaker pads">Affinity Metals</h3>

                    <p class="pads">TSX.V: AFF</p> 

                    </div><!--speaker-info-->  
                      
            </div><!--end-col-->				
  
           <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
               <div class="speaker-bio-right" style="height: 100%;"> 
    
             
                       <div class="speaker-bio" id="company-bio">
                       <p class="e-company-sub-title scrollable-text"> 
                           This is a mineral exploration company spun out of Regulus Resources Inc. in 2018 and has the same core management team. Aldebaran acquired the Rio Grande copper-gold project located in Salta Province, Argentina, from Regulus along with several other early-stage projects in Argentina. Aldebaran also has the right to earn up to an 80% interest in the Altar copper-gold project in San Juan Province, Argentina from Sibanye-Stillwater. 
                           <br><br>Altar hosts a cluster of large porphyry copper-gold systems with mineralization currently defined in four distinct zones. The Altar project forms part of a larger cluster of world-class porphyry copper deposits, which includes Los Pelambres in Chile (Antofagasta Minerals), along with El Pachón (Glencore), and Los Azules (McEwen Copper) in Argentina. 
                           <br><br>A total of 266 drill holes (123,968 m) have been completed at Altar between 2003 and 2021. In mid-2018 an updated NI 43-101 resource was prepared for Altar by Independent Mining Consultants Inc. based on the drilling completed up to 2017. 
                          </p>
                       </div>	 

             </div><!--cinfo-bg-->  
           </div><!--end-col-->

   </div><!--end-row-->	

 </div><!--container-->    

</div>


        </div>
           <!-- tab5 -->
         <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-tab-5">
          
         <div class="company-hero-info">
 
 <div class="container">
 
    <div class="row">
 
           <div class="col-sm-12 col-md-4 col-lg-4 speakercol"> 
 
                    <div class="speaker-info">
 
                                                 <img src="https://149474761.v2.pressablecdn.com/wp-content/uploads/2022/05/altiplano-metals.png" class="speaker-image"/></noscript>
                        <div class="speaker-border"></div>
 
                     
                     <h3 class="speaker pads">Altiplano Metals</h3>
 
                     <p class="pads">TSX.V: APN | OTCQX: ALTFP</p> 
 
                     </div><!--speaker-info-->  
                       
             </div><!--end-col-->				
   
            <div class="col-sm-12 col-md-8 col-lg-8 speakerinfo"> 
                <div class="speaker-bio-right" style="height: 100%;"> 
     
              
                        <div class="speaker-bio" id="company-bio">
                        <p class="e-company-sub-title scrollable-text"> 
                           This is a mineral exploration company spun out of Regulus Resources Inc. in 2018 and has the same core management team. Aldebaran acquired the Rio Grande copper-gold project located in Salta Province, Argentina, from Regulus along with several other early-stage projects in Argentina. Aldebaran also has the right to earn up to an 80% interest in the Altar copper-gold project in San Juan Province, Argentina from Sibanye-Stillwater. 
                           <br><br>Altar hosts a cluster of large porphyry copper-gold systems with mineralization currently defined in four distinct zones. The Altar project forms part of a larger cluster of world-class porphyry copper deposits, which includes Los Pelambres in Chile (Antofagasta Minerals), along with El Pachón (Glencore), and Los Azules (McEwen Copper) in Argentina. 
                           <br><br>A total of 266 drill holes (123,968 m) have been completed at Altar between 2003 and 2021. In mid-2018 an updated NI 43-101 resource was prepared for Altar by Independent Mining Consultants Inc. based on the drilling completed up to 2017. 
                          </p>
                        </div>	 
 
              </div><!--cinfo-bg-->  
            </div><!--end-col-->
 
    </div><!--end-row-->	
 
  </div><!--container-->    
 
 </div>

</div>

      </div>
    </div>
  </div>
</div>







<?php include 'footer.php' ?>