<body>

	<header>
		<nav class="navbar navbar-expand-sm 	">
		  <div class="container">
		    <a class="navbar-brand" href="index.php">
		    	<img src="assets/img/home/logo.png" alt="logo">
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
		      <div></div>
		      <div></div>
		      <div></div>
		    </button>
		    <div class="collapse navbar-collapse" id="collapsibleNavbar">
		      <ul class="navbar-nav ms-auto">
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='home'){echo 'active';}?>" href="index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='about'){echo 'active';}?>" href="about.php">Our Story </a>
		        </li>
		        <li class="nav-item has-submenu">
		          <a class="nav-link <?php if($currentPage =='ibathroom'){echo 'active';}?>" href="ibathroom.php">iBathroom </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='products'){echo 'active';}?>" href="products.php">Products</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link <?php if($currentPage =='contact'){echo 'active';}?>" href="contact.php">Get In Touch</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>