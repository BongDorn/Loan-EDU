
<nav id="sidebar" class='mx-lt-5 bg-white' >
		 
		<div class="sidebar-list">

				<a href="index.php" class="nav-item nav-home"><span class='icon-field'>
                    <i class="fa fa-home"></i></span> Home</a>

				<a href="ioan.php" class="nav-item nav-loans"><span class='icon-field'>
                    <i class="fa fa-file-invoice-dollar"></i></span> Loans</a>	

				<a href="index.php" class="nav-item nav-payments"><span class='icon-field'>
                    <i class="fa fa-money-bill"></i></span> Payments</a>

				<a href="index.php" class="nav-item nav-borrowers"><span class='icon-field'>
                    <i class="fa fa-user-friends"></i></span> Borrowers</a>

				<a href="index.php" class="nav-item nav-plan"><span class='icon-field'>
                    <i class="fa fa-list-alt"></i></span> Loan Plans</a>	

				<a href="index.php" class="nav-item nav-loan_type"><span class='icon-field'>
                    <i class="fa fa-th-list"></i></span> Loan Types</a>		
				
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="ajax.php?action=logout" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-lock"></i></span> Logout</a>
				
			
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>