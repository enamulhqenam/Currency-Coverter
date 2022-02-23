<?php 
include('Views/header.php');

$view = $_REQUEST['view'];

switch($view)
{
    case 'DashboardTable':
        include('Views/DataTable.php');
        break;
    case 'DataTableEdit':
        include('Views/DataTableEdit.php');
        break;

    default:
    include('Views/dashboard.php');
    break;
}

include('Views/footer.php'); 
?>