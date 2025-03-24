<?php
$page = isset($_GET['page']) ? $_GET['page']:'home';

$page = ['zbeub'];

include 'common/navbar.php';

if (in_array($page, $pages)) {
    include 'pages/' + $page + '.php';
} else {
    include '404.php';
}
?>