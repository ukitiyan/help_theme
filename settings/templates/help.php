<div id="app-navigation">
	<ul>
		<li>
			<a href="<?php print_unescaped(\OCP\Util::linkToAbsolute('themes', "default/settings/pdf/manual1.pdf")); ?>" >
				マニュアル1
			</a>
		</li>
		<li>
			<a href="<?php print_unescaped(\OCP\Util::linkToAbsolute('themes', "default/settings/pdf/manual2.pdf")); ?>">
				マニュアル2
			</a>
		</li>
		<li>
			<a href="<?php print_unescaped(\OCP\Util::linkToAbsolute('themes', "default/settings/pdf/manual3.pdf")); ?>">
				マニュアル3
			</a>
		</li>
</div>

<div id="app-content" class="help-includes">
	<iframe id="frame" src="<?php print_unescaped($_['url']); ?>" class="help-iframe">
	</iframe>
</div>
<script type="text/javascript" src="<?php print_unescaped(\OCP\Util::linkToAbsolute('themes', 'default/settings/js/help.js')) ?>"></script>
