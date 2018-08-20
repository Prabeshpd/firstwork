<?php
//excel.php
header('Content-Type: application/vnd.ms-excel');
header('Content-disposition: attachment; filename='.rand().'.xls');
echo $_GET["data"];
?>
<?php
for ($i=1; $i <5 ; $i++)
{
    echo'<input type="checkbox" class="form-check-input" value="'.$i.'" name="days[]" id="label"/>';
    echo'<label class="for-check-label" for="label">'.$i.'</label>';
}
?>
