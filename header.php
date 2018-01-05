<!DOCTYPE html>
<html>
<head>
	<title>
		<?php bloginfo('name'); ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>	
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="wordpress theme">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">-->

	<?php wp_head(); ?>

</head>

	<body>
		<header>
			<nav id="top_header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 main_nav">

							<?php   
								$defaults = array(
				   					'theme_location' => 'primary'
				   						
             					);
								wp_nav_menu( $defaults );
							?>

						</div>
						<div class="col-md-4">
							<ul>
								<li id="search">
									<form>
										<span class="glyphicon glyphicon-search"></span>
										<input type="search" name="search" placeholder="search" id="searchbox">
									</form>
								</li>
							</ul>
						</div>
							<!--creates the mobile header at 900px-->
						<nav>
							<h2 class="text-center" id="mobile_header">
									<span class="glyphicon glyphicon-menu-hamburger">Menu</span>
							</h2>
						</nav>	
							<!--creates the mobile menu at 900px-->
						<nav id="mobile_menu">

							<?php   
								$defaults = array(
				   					'theme_location' => 'secondary',
				   					'menu_id' => 'mobile_list'
				   						
             					);
								wp_nav_menu( $defaults );
							?>
							
						</nav>
					</div>
				</div>
			</nav>
		</header>