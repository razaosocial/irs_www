<section id="top_panel">
	<div class="container">
		<ul class="social_icons">
			<li class="twitter"><a href="https://twitter.com/institutors" target="_blank" title="Twitter"></a></li>
			<li class="facebook"><a href="https://www.facebook.com/pages/Instituto-Raz%C3%A3o-Social/135206043213648" target="_blank" title="Facebook"></a></li>
		</ul>
		<ul class="links">
			<li><a href="http://www.promon.com.br/exchange" target="_blank"  title="WebMail">Webmail</a></li>
                        <li><a href="http://ged.razaosocial.org.br:8080/share/page/" target="_blank"  title="GED">GED</a></li>
			<li><a href="http://helpdesk.razaosocial.org.br/admin" target="_blank" title="Help Desk">Help Desk</a></li>
			<li><a href="http://ead.razaosocial.org.br/login/index.php" target="_blank" title="Ambiente Virtual">Ambiente Virtual</a></li>
		</ul>
	</div>
</section>
<section class="container">
	<header id="header">
		<div id="sticky_navigation" class="shadow">
			<div class="container">
				<a href="/" id="logo"></a>
				<div id="navigation-wrapper">
					<nav id="main-navigation">
						<!--  MAIN  NAVIGATION-->
						<ul class="main-menu">
							<li>
								<a href="/" title="Home" <?php 	$page = $_SERVER['PHP_SELF'];

								if (strpos($page, 'index')) {
									echo 'class="active"';
								}?> >Home </a>
							</li>

							<li>
								<a href="quem-somos" title="Quem Somos" <?php 	$page = $_SERVER['PHP_SELF'];

								if (strpos($page, 'quem-somos')) {
									echo 'class="active"';
								}?>>Quem Somos</a>
							</li>
							<li>
								<a href="projetos" title="Projetos" <?php 	$page = $_SERVER['PHP_SELF'];

								if (strpos($page, 'projetos')) {
									echo 'class="active"';
								}?>>Projetos</a>
							</li>
							<li>
								<a href="contato" title="Contato"<?php 	$page = $_SERVER['PHP_SELF'];

								if (strpos($page, 'contato')) {
									echo 'class="active"';
								}?>>Contato</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
