<?php
include("Views/header-view.php");
?>
<section class="<?=(isset($contentMainClass)?$contentMainClass:"container");?>">
<?=$content?>	
</section>
<?php
include("Views/footer-view.php");
?>