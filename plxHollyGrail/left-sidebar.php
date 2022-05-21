<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside data-md1-2 data-lg1-4 data-lg1 class="left-sidebar aside ">

	<div class="sidebox">
		<h3>
			<?php $plxShow->lang('CATEGORIES'); ?>
		</h3>
		<ul class="cat-list unstyled-list">
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>
	</div>
	
	<div class="sidebox">
		<h3>
			<?php $plxShow->lang('LATEST_ARTICLES'); ?>
		</h3>

		<ul class="lastart-list unstyled-list">
			<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>
	</div>
	
	<!--<div class="sidebox">
		<?php if (eval($plxMotor->plxPlugins->callHook('mostViews'))) return; ?>
	</div>-->
	
		<div class="sidebox">		
		<h3>
			<?php $plxShow->lang('TAGS'); ?>
		</h3>
		<ul class="tag-list">
			<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		</ul>
		</div>
	
	</aside>