<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
 .partner{
     max-width: 250px !important ; 
     max-height: 250px !important ;
     min-width: 250px !important ;
     min-height: 250px !important
 } 
 </style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div id="carouselPlus" class="carousel slide multi-carousel" data-ride="carousel">
      <div class="carousel-inner">
      @foreach ($part as $item )


        <div class="carousel-grid col-lg-3 col-md-4 col-sm-12"><img class="d-block w-100 partner" src="{{asset('storage/' . $item->image)}}" alt="Partner"></div>

        @endforeach()
    </div>
      {{-- <a class="carousel-control-prev" href="#carouselPlus" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselPlus" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> --}}
    </div>
  </div>
</div>

<div id="lg" class="d-none d-lg-block"></div><div id="md" class="d-none d-md-block d-lg-none"></div><div id="sm" class="d-none d-sm-block d-md-none"></div>



<style>
    .multi-carousel {
	opacity: 0;
	padding: 0 25px;
}
.multi-carousel .carousel-control-next,
.multi-carousel .carousel-control-prev {
	width: 25px;
	background: gray;
}
    </style>

<script>
    var $origin = $("#carouselPlus .carousel-inner").prop("outerHTML");
function multiCarousel(){
	if ( $( "#lg" ).is( ":visible" ) ) {
		do {
			$( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(4)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
			$( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
		} while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length );
	} else if ( $( "#md" ).is( ":visible" ) ) {
		do {
			$( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(3)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
			$( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
		} while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length );
	} else {
		do {
			$( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(1)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
			$( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
		} while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length);
	}
}
$(window).on( "load resize", function() {
	$.when(
		$( "#carouselPlus .carousel-inner" ).replaceWith( $origin ),
		multiCarousel()
	).done(function() {
		$( ".multi-carousel" ).animate({opacity: "1"}, 1000);
	});
});
    </script>

