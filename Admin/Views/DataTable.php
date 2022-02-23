<?php
include('Model/Db.php');
include('Model/dashboard.php');
$dashboard = new Dashboard();
$dashboards = $dashboard->getAll();
?>
<div class="container">
    <div class="row">
        <div class="2"></div>
        <div class="8">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Symbol</th>
                <th scope="col">Rate</th>
                <th scope="col">Short Name</th>
                <th scope="col">Country</th>
                <th scope="col">Action</th>
                
                </tr>
            </thead>
            <tbody>
                <?php foreach($dashboards as $dashboard) { ?>
                <tr>
                    <td><?php echo $dashboard['Name'] ;?></td>
                    <td><?php echo $dashboard['Symbol'] ;?></td>
                    <td><?php echo $dashboard['Rate'] ;?></td>
                    <td><?php echo $dashboard['ShortName'] ;?></td>
                    <td><?php echo $dashboard['Country'] ;?></td>
                    <td>
                        <a href="Controller/dashboard.php?action=edit&id=<?php echo $dashboard['id'] ;?>" class="text-success p-lg-2 bg-dark bg-gradient" style="text-decoration: none">Edit</a>
                        <a href="Controller/dashboard.php?action=delete&id=<?php echo $dashboard['id'] ;?>"class="text-danger p-lg-2 bg-dark bg-gradient" style="text-decoration: none">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <div class="2"></div>
    </div>
</div>
