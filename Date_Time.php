<?
// format MySQL DATETIME value into a more readable string
function formatDate($val)
{
$arr = explode("-", $val);
return date("d M Y", mktime(0,0,0, (int)$arr[1], (int)$arr[2], (int)$arr[0]));
}
?>