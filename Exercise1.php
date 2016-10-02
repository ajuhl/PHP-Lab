<?php
//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//Inside test1.php
function multiply($x, $y) {
    $z = $x * $y;
    return $z;
}
echo '<table><tr>';
echo '<td> </td>';
for($i=1; $i<101; $i++) {
  echo '<td>'. $i . '</td>';
}
echo '</tr>';
for($i=1; $i<101; $i++) {
  echo "<tr><td>" . $i . '</td>';
  for($j=1; $j<101; $j++) {
    echo '<td>'. multiply($i, $j) . '</td>';
  }
  echo '</tr>';
}
echo '</table>';

?>
