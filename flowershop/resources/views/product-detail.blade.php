@extends('layouts.master')
  
@section('content')
    @include('partials.errors')
<section id="aa-catg-head-banner">
   <img src="img/slider.jpg" style="height: 200px; width: 100%" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Product Details</h2>
        
      </div>
     </div>
   </div>
  </section>  
         
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
               
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="img/slider-img-1.jpg" class="simpleLens-lens-image"><img src="img/slider-img-1.jpg" class="simpleLens-big-image"></a></div>
                      </div>
                      
                    </div>
                  </div>
                </div>
               
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>Orchideya</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">$34.99</span>
                      <p class="aa-product-avilability">Avilability: <span>10</span></p>
                    </div>
                    <p>This is a basket of 35 Red Roses packed in a beautiful heart shaped basket. A perfect blend of passion and love for your someone special.

</p>
                    
                    
                    
                    <div class="aa-prod-quantity">
                      <form action="">
                        <select id="" name="">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form>
                      <p class="aa-prod-category">
                        Category: <a href="#">Flower</a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
                           
              </ul>

              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>Classical angiosperm phylogeny is based mainly on flower anatomy, and in particular, the arrangement and form of the principle parts. The fruiting body is used as well, but its structure is often apparent in the flowers. More recently, genetic studies have been employed to determine the relationship of various botanical groups to each other. Many parts of the old classification system have proven more or less consistent with these studies, but there have also been a large number of changes, even to large and well studied groups. The changes to the classical system have been far more extensive than in the animal kingdom, where the classical, anatomy-based phylogeny has held up remarkably well. As a result, botanical nomenclature has been undergoing a bit of a revolution in the last two decades, and the process (as of 2009) is still ongoing. A community known as the Angiosperm Phylogeny Group or APG has provided some centrality to this process, but there are many areas where no consensus has been reached. Botany has always been prone to what might be termed "vanity species" with some genera (e.g. hieracium, the hawkweeds) having thousands of specific scientific names. The recent trend has been to recognize certain species as highly variable; but history dies hard, especially for those who discovered and described the "species".</p>
                  
                
           
    </div>
  </section>
  @endsection