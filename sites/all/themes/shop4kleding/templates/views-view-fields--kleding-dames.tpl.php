<div class="product clearfix">
	<div class="image">
		<?=$fields['field_afbeelding_klein']->content?>
	</div>
	<div class="info">
		<div class="item brand"><?=$fields['field_brand']->content?></div>
		<div class="item title"><?=$fields['title']->content?></div>
		<div class="item size"><div class="label">Maat</div> <div class="value"><?=$fields['field_size']->content?></div></div>
		<div class="item price"><?=$fields['commerce_price']->content?></div>
		
	</div>
</div>
<?php foreach ($fields as $id => $field): ?>
<?php

//echo '<pre>';print_r($id);echo '</pre>';
?>
<?php endforeach; ?>
