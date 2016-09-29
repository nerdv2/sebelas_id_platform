</div>
<div class="row">
	<div style="width:75px;" class="col-md-4"><br><br><br></div>
</div>
<h6>
<div class="row">
  <div class="col-md-4"><a class="footer-menu" href="howto.php">How to shop?</a></div>
  <div class="col-md-4"><a class="footer-menu" href="privacy.php">Privacy Policy and Terms of Service</a></div>
  <div class="col-md-4"><a class="footer-menu" href="about.php">About Us</a></div>
</div>
</h6>
<br>
<div class="row">
  <div class="col-md-8">Copyright (c) 2016 <a class="footer-menu" href="/sebelas_id">sebelas.id</a>, All Right Reserved. Built by <a class="footer-menu" href="team.php">sebelas.id Development Team</a></div>
</div>
</div>

<script type="text/javascript">
	$(function() { 

    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
		event.preventDefault();
		$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
		$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
		$('a[href="#toggle-search"]').closest('li').toggleClass('active');

		if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
			setTimeout(function() { 
				$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
			}, 100);
		}			
	});

	$(document).on('keyup', function(event) {
		if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			$('a[href="#toggle-search"]').trigger('click');
		}
	});
    
});
	</script>
</body>
</html>