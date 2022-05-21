<?php include __DIR__.'/header.php'; ?>

	<main  data-lg1-2 class="main-content main">

					<article class="article static" id="static-page-<?php echo $plxShow->staticId(); ?>">

						<header>
							<h2>
								<?php $plxShow->staticTitle(); ?>
							</h2>
						</header>

						<?php $plxShow->staticContent(); ?>

					</article>

	</main>
<?php include __DIR__.'/left-sidebar.php'; ?>
<?php include __DIR__.'/right-sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>
