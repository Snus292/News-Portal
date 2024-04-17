<?php
ob_start();
?>
<h1>TOP 3 services</h1>
<br>
<div class="horizontal-news">
    <?php ViewServices::ServicesByCategory($arr); ?>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>
