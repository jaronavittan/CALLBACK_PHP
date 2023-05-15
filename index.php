<!DOCTYPE html>
<html>
<body>

<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["sourpatch", "gumballs", "turkey", " butternut squash"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

</body>
</html>
