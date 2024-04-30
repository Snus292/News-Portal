<?php
ob_start();
?>
<h1>所有服务</h1>
<br>

<?php
ViewServices::AllServices($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>