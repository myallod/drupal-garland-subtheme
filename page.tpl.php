<?php print render($page['header']); ?>

<div id="wrapper">
	<div id="container" class="clearfix">
		<?php if ($primary_nav): print $primary_nav; endif; ?>
		<div style="clear: both; height: 10px; width: 100%"></div>
		<div id="tpl_top">
			<div id="tpl_logo"><strong><a href="<?php print $front_page ?>">
				<?php if ($logo): ?>
					<img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
				<?php endif; ?>
			</a></strong></div>
			<div id="tpl_corp">
				<?php print $site_html ?>
			</div>
			<div id="tpl_menu">
				<div class="tpl_active"><a href="http://nextmail.ru">БЕСПЛАТНАЯ ПОЧТА</a></div>
				<div><a href="http://www.nextcorp.ru">КОРПОРАТИВНАЯ ПОЧТА</a></div>
				<!--<div><a href="/продажа">ПРОДАЖА ПРОЕКТА</a></div>-->
				<div><a href="http://www.nextmail.ru/links/index.phtml?t=2">НИОКР</a></div>
				<div><a href="/node/13">ВНЕДРЕНИЯ</a></div>
			</div>
		</div>
		<div style="clear: both; height: 30px; width: 100%"></div>
		<div id="center">
			<div class="clearfix"><?php print render($page['content']); ?></div>
			<div style="clear: both; height: 20px; width: 100%"></div>
			<?php if ($primary_nav): print $primary_nav; endif; ?>
		</div>

	</div> <!-- /#container -->
</div> <!-- /#wrapper -->
