<script src="js/jquery.min.1.11.3.js"></script>
<script src="lib/bootstrap/js/bootstrap.js"></script> 
<script src="lib/jquery-toggles/toggles.js"></script> 
<script src="js/quirk.js"></script>
<script src="js/bootstrap-dialog.js"></script>
<script>
	$(document).scroll(function(){
		if($(this).scrollTop()>0){
			$('nav.navbar').attr('class','navbar navbar-default navbar-fixed-top');
			$('body').css('padding-top','90px');
		}else{
			$('nav.navbar').attr('class','navbar navbar-default navbar-no-fixed');
			$('body').css('padding-top','0');
		}
	})
</script>
</body>
</html>
