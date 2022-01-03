<style>
	
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<a href="cHomepage.php?page=cHome" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="cHomepage.php?page=cManifesto" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> Manifesto</a>
				<?php if($_SESSION['login_type'] == 1): ?>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>