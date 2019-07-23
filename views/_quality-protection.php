<?php

use pantera\content\widgets\block\Block;

?><div class="content-block">
	<div class="container">
		<div class="content-block__title text-center">Вы защищены от подделок</div>
		<div class="quality-protection d-flex d-flex__col-2">
			<div class="bordered-block small">
				<?= Block::widget([
	                'position' => 'quality_protection1',
	            ]) ?>
			</div>
			<div class="bordered-block small">
				<?= Block::widget([
	                'position' => 'quality_protection2',
	            ]) ?>
			</div>
		</div>
	</div>
</div>