<?php
ob_start();
?>
<h1>前 3 名服务</h1>
<br>
<div class="horizontal-news">
    <?php ViewServices::ServicesByCategory($arr); ?>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>
