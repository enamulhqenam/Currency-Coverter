<?php
include('../Model/Db.php');
include('../Model/dashboard.php');

if(isset($_POST['submit']) && $_POST['submit']=='Insert')
{
    $data = [
        'Name'      => $_POST['Name'],
        'Symbol'    => $_POST['Symbol'],
        'Rate'      => $_POST['Rate'],
        'ShortName' => $_POST['ShortName'],
        'Country'   => $_POST['Country'],
    ];
    try {
        $Dashboard = new Dashboard();
        $Dashboard->store($data);
        header("Location:../index.php");
    } catch (Exception $error) {
        $error->getMessage();
    }
}
if(isset($_POST['submit']) && $_POST['submit']=='Update')
{
    $id = $_POST['id'];
    $data = [
        'Name'      => $_POST['Name'],
        'Symbol'    => $_POST['Symbol'],
        'Rate'      => $_POST['Rate'],
        'ShortName' => $_POST['ShortName'],
        'Country'   => $_POST['Country'],
    ];
    try {
        $Dashboards = new Dashboard();
        $Dashboards->update($id ,$data);
        
        // header("Location:../index.php?view=DashboardTable");
    }
    catch(Exception $error)
    {
        $error->getMessage();
    }
}
if(isset($_REQUEST['action']) && $_REQUEST['action']=='edit')
{
    $id = $_REQUEST['id'];
    $datatable = new Dashboard();
    $Dashboard = $datatable->show($id);

    $Name       = $Dashboard[0]['Name'];
    $Symbol     = $Dashboard[0]['Symbol'];
    $Rate       = $Dashboard[0]['Rate'];
    $ShortName  = $Dashboard[0]['ShortName'];
    $Country    = $Dashboard[0]['Country'];

    header("Location:../index.php?view=DataTableEdit&id==".$id."&Name=".$Name."&Symbol=".$Symbol."&Rate=".$Rate."&ShortName=".$ShortName."&Country=".$Country.'"');
}
?>