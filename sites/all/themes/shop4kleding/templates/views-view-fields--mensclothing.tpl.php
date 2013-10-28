<div class="product clearfix">
	<h2 class="title"><?=$fields['title']->content?></h2>
	<div class="image">
		<?=$fields['field_productimage']->content?>
	</div>
	<div class="description">
		<?=$fields['field_defaultproduct_description']->content?>
	</div>
	
	<div class="productoptions clear">
		<div class="price"><?=$fields['commerce_price']->content?></div>
	<?=$fields['add_to_cart_form']->content?></div>
</div>

<?php foreach ($fields as $id => $field): ?>
<?php
//echo '<pre>';print_r($id);echo '</pre>';
?>
<?php endforeach; ?>
