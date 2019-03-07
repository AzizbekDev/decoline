 <!-- js files goes here-->
<script src="/front/js/jquery.min.js"></script>
    <script src="/front/js/bootstrap.min.js"></script>
    <script src="/front/js/slick.min.js"></script>
    <script>
      $(document).ready(function(){
      	$(".banner__slide").slick({
      		slidesToShow: 1,
      		slidesToScroll: 1,
      		autoplay: true,
      		arrows: false,
      		dots: true,
      		infinite: true
      	});
      	$(".news__slider").slick({
      		slidesToShow: 2,
      		slidesToScroll: 1,
      		autoplay: true,
      		arrows: false,
      		dots: true,
      		infinite: true,
      		responsive: [
      			{
      
      			breakpoint: 767,
      			settings: {
      				slidesToShow: 1,
      				slidesToScroll: 1
      			}
      			}
      		]
      	})
      });
    </script>