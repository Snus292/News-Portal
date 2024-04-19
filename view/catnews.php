<?php
ob_start();
?>
<h1>Uudies (kategoorii)</h1>
<br>

<?php
//var_dump($arr);
ViewNews::NewsByCategory($arr);

$content = ob_get_clean();
include_once 'view/layout.php';

?>