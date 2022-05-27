<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside  data-md1-2 data-lg1-4 class="right-sidebar aside ">
		<div class="sidebox">
			<h3>
				<?php $plxShow->lang('LATEST_COMMENTS'); ?>
			</h3>

			<ul class="lastcom-list unstyled-list">
				<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
			</ul>
		</div>
		<div class="sidebox">

			<h3>
				<?php $plxShow->lang('ARCHIVES'); ?>
			</h3>

			<ul class="arch-list unstyled-list">
				<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
			</ul>
		</div>

		<div class="sidebox">
			<p><small>Made with <a href="https://matthewjamestaylor.com/responsive-columns" target="_blank" rel="noopener">Responsive Columns</a>.</small></p>
		</div>
	</aside>
