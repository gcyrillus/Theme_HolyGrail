<?php include __DIR__.'/header.php'; ?>
	<main  data-lg1-2 class="main-content main">
					<article class="article">
						<header>
							<h2>
								<?php $plxShow->lang('ERROR'); ?>
							</h2>
						</header>
						<p>
							<b style="display:block;text-align:center;color:tomato"><?php echo basename($_SERVER['REQUEST_URI']) ?></b> 
							<?php $plxShow->erreurMessage(); ?>
						</p> 
					</article>
	</main>
<?php include __DIR__.'/left-sidebar.php'; ?>
<?php include __DIR__.'/right-sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>
