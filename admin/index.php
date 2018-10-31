<?php
include('../../../functions/dbqueries.php');
include('views/cmsHeader-view.php');
$page = (isset($_GET['page'])?$_GET['page']:'dashboard');
include('views/'.$page.'-view.php');
include('views/cmsFooter-view.php');
?>