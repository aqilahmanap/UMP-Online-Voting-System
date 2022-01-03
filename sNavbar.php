<style>
	
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="voting.php" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> Vote</a>
				<?php if($_SESSION['login_type'] == 2): ?>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>