<?php
ob_start();
?>
<h1>TOP 3 NEWS</h1>
<br>
<div class="horizontal-news">
    <?php ViewNews::NewsByCategory($arr); ?>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>
