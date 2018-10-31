<?php
include('../../../functions/dbqueries.php');
include('views/cmsHeader-view.php');

include('views/'.$_GET['page'].'-view.php');
include('views/cmsFooter-view.php');
?>