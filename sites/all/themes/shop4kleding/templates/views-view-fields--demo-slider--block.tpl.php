<?php

$url = $fields['field_link']->content;
?>
<a href="/"><?=$fields['field_afbeelding']->content?></a>

<?php foreach ($fields as $id => $field): ?>
<?php

//echo '<pre>';print_r($id);echo '</pre>';
?>
<?php endforeach; ?>

