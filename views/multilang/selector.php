<ul class="mlang-selector">
	<?php foreach($languages as $code => $language): ?>
		<?php if($language['uri']): ?>
		<li class="mlang-selectable mlang-<?php echo $code; ?>">
			<?php echo HTML::anchor($language['uri'], $language['label'], array('title' => $language['label'])); ?>
		</li>
		<?php else: ?>
		<li class="mlang-selected mlang-<?php echo $code; ?>">
			<span><?php echo $language['label']; ?></span>
		</li>
		<?php endif; ?>
	<?php endforeach; ?>
</ul>