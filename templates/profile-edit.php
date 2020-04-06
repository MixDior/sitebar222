<?php
$fields=fields_profile();
$out=array();
foreach ($fields as $key=>$field){
    $value=!empty($field['value'])?$field['value']:'';
    $out[]= '<div class="form__group"><label for="'.$key.'" class="form__label">'.$field['label'].'
        </label><input id="'.$key.'" type="'.$field['type'].'" class="'.$field['class'].'" name="'.$key.'" value="'.$value.'"></div>';
}
$out=implode("\n",$out);
?>

<form action="" class="form js-form-profile">
    <?php echo $out; ?>
    <button class="form_button">ОК</button>
    <input type="hidden" name="action" value="update_profile">
</form>