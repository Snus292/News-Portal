<?php
ob_start();
?>
<h1>our services</h1>
<br>

<?php
//var_dump($arr);
ViewServices::ServicesByCategory($arr);

$content = ob_get_clean();
include_once 'view/layout.php';

?>