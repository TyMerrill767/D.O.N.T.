<script src="js/jquery.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.js"></script>

<!--Initializes responsive menu functionality-->
<script>
	$(function(){
		$('#menu').slicknav();
	});
</script>

<script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({

          slideSpeed: 8000,
          paginationSpeed: 800,
          singleItem: true,
          autoPlay: 7000,
          stopOnHover: true,
      });

    });


</script>
