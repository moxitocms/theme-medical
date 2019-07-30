<?php

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;

$faqs = CatalogCategory::findOne(111)->getChildrenActive()->limit(4)->all();

?><div class="faq-block">
	<div class="row">
		<?php foreach ($faqs as $faq): ?>
		<div class="col-md-3">
			<div class="faq-block-item">
				<div class="faq-block-item__question">
					<div class="faq-block-item__question-title">
			    		Вопрос:
					</div>
					<div class="faq-block-item__question-text">
			    		<?= Html::encode($faq->name) ?>
					</div>
				</div>
				<div class="faq-block-item__answer">
			    	<div class="faq-block-item__answer-title">
			    		Ответ:
					</div>
					<div class="faq-block-item__answer-text">
			    		<?= Html::encode($faq->description) ?>
					</div>
				</div>
				<div class="faq-block-item__button">
			    	<a href="/faq" class="btn btn-block btn-primary">Читать</a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
