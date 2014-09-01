<span class="date"><?
$last_modified = filemtime($_SERVER['SCRIPT_FILENAME']);
print("Last Modified ");
print(date("m/j/y h:i a", $last_modified));?>
</span>