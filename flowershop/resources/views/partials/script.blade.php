     <script type="text/javascript" src="js/jquery.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="{{ asset('js/bootstrap.js') }}"></script>  
     <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.bootstrap.js') }}"></script>  
     <script src="{{ asset('js/sequence.js') }}"></script>
     <script src="{{ asset('js/sequence-theme.modern-slide-in.js') }}"></script>  
     <script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/jquery.simpleLens.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
     <script src="{{ asset('js/custom.js') }}"></script> 
     <script>
          $(document).ready(function()
                           {
              var readMoreHtml=$(".read-more").html();
              var lessText=readMoreHtml.substr(0.100);
              if(readMoreHtml.length>100)
                  {
                      $(".read-more").html(lessText).append("<a href='' class=' read-more-link'> Show More</a>")
                  }
              else{
                  $(".read-more").html(readMoreHtml);
              }
              $("body").on("click", ".read-more-link", function(event)
                          { event.preventDefault();
                  $(this).parent(".read-more").html(readMoreHtml).append("<a href='' class='show-less-link'> Show Less</a>")
                           
              })
              $("body").on("click", ".show-less-link", function(event)
                          {event.preventDefault();
                  $(this).parent(".read-more").html(readMoreHtml.substr(0,100)).append("<a href='' class='read-more-link'> Show More</a>")
              })
          })
     </script>