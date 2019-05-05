@extends('layouts.master')
  
@section('content')
    @include('partials.errors')
  
  

<section id="aa-catg-head-banner">
   <img src="img/slider.jpg" style="height: 200px; width: 100%" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Carts</h2>
        
      </div>
     </div>
   </div>
  </section>

 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="remove" href="#">Remove</a></td>
                        <td><a href="#"><img src="img/slider-img-1.jpg" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Orchideya</a></td>
                        <td>$250</td>
                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                        <td>$250</td>
                      </tr>
                     
                      
                      
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                  
                   <tr>
                     <th>Total</th>
                     <td>$450</td>
                   </tr>
                 </tbody>
               </table>
               <a href="#" class="aa-cart-view-btn">Order</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 @endsection