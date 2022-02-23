<?php 
include('Model/Db.php');
include('Model/dashboard.php');

?>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-7 bg-dark px-lg-5 pt-lg-5 pb-lg-5">
        <h2>Edit Your Currency </h2>
        <form action="Controller/dashboard.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>">
            <div class="form-group">
                <label for="Name">Currency Name</label>
                <input type="text" name="Name" value="<?php echo $_REQUEST['Name'];?>" class="form-control" placeholder="Enter Currency name">
            </div>
            <div class="form-group">
                <label for="Symbol">Currency Symbol</label>
                <input type="text" name="Symbol" value="<?php echo $_REQUEST['Symbol'];?>" class="form-control" placeholder="Currency Symbol">
            </div>
            <div class="form-group">
                <label for="Currency Rate1">Currency Rate</label>
                <input type="text" name="Rate" value="<?php echo $_REQUEST['Rate'];?>" class="form-control" placeholder="Currency Rate">
            </div>
            <div class="form-group">
                <label for="ShortName">Currency Short Name</label>
                <input type="taxt" name="ShortName" value="<?php echo $_REQUEST['ShortName'];?>" class="form-control" placeholder=" short name">
            </div>
            <div class="form-group">
                <label for="Country">Currency Country</label>
                <input type="taxt" name="Country" value="<?php echo $_REQUEST['Country'] ; ?>" class="form-control" placeholder="Countrty Name">
            </div>
            <input type="submit" name="submit" value="Update">
            <!-- <button type="submit" name="submit" value="Update" class="btn btn-primary">Submit</button> -->
        </form>
        </div>
        <div class="col-lg-3">
            <div class="container">
                <div class="row">
                    <div class="clo-6"></div>
                    <div class="clo-3 ">
                    </div>
                    <div class="clo-lg-3">
                    <iframe src="https://www.xe.com/" frameborder="0" style="height:500px; width:400px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
