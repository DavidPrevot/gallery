<?php /** @var $l OC_L10N */ ?>
<div class="wrapper"><!-- for sticky footer -->

<header>
	<div id="header" class="icon-noise">
		<a href="<?php print_unescaped(link_to('', 'index.php')); ?>" title="" id="owncloud">
			<img class="svg" src="<?php print_unescaped(image_path('', 'logo-wide.svg')); ?>" alt="<?php p($theme->getName()); ?>" /></a>
		<div id="logo-claim" style="display:none;"><?php p($theme->getLogoClaim()); ?></div>
		<div class="header-right">
			<?php if ($_['showDownloadButton']): ?>
				<a href="<?php p($_['downloadURL']); ?>" id="download" class="button">
					<img class="svg" alt="" src="<?php print_unescaped(OCP\image_path("core", "actions/download.svg")); ?>"/>
					<?php p($l->t('Download'))?>
				</a>
			<?php endif ?>
		</div>
	</div>
</header>
<div id="content" data-albumname="<?php p($_['albumName'])?>">
	<div id="controls">
		<div id="breadcrumbs"></div>
		<!-- toggle for opening shared picture view as file list -->
		<div id="openAsFileListButton" class="button">
			<img class="svg"
				src="<?php print_unescaped(image_path('core', 'actions/toggle-filelist.svg')); ?>"
				alt="<?php p($l->t('File list')); ?>" />
		</div>
	</div>

	<div id='gallery' class="hascontrols icon-noise" data-token="<?php isset($_['token']) ? p($_['token']) : p(false) ?>"></div>
</div>

	<div class="push"></div><!-- for sticky footer -->
</div>

<footer class="icon-noise">
	<p class="info">
		<?php print_unescaped($theme->getLongFooter()); ?>
	</p>
</footer>
