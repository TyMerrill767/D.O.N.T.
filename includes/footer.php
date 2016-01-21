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
      $("#owl-demo").owlCarousel({
       itemsCustom: [
      [0,3]
    ],
     afterAction: function(el){
       //remove class active
       this
       .$owlItems
       .removeClass('active')

       //add class active
       this
       .$owlItems //owl internal $ object containing items
       .eq(this.currentItem + 1)
       .addClass('active')

     }

    });





</script>
