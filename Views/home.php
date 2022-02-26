<?php
include('../Model/Db.php');
include('../Model/CurrencyModel.php');

$Currency = new CurrencyModel();
$CurrencyModels =$Currency->getAll();

if(isset($_POST['submit']) && $_POST['submit'] =='Convert')
{
    $FromCurrencyID   = $_POST['From_Curency'];
    $Amount           = $_POST['amount'];
    $ToCurrencyID     = $_POST['To_Currency'];

    $FromCurrency = $Currency->show($FromCurrencyID);
    $ToCurrency   = $Currency->show($ToCurrencyID);

    $FromCurrencyRate   = $FromCurrency[0]['Rate'];
    $ToCurrencyRate     = $ToCurrency[0]['Rate'];

    $CovertedAmount =  round(($ToCurrencyRate * $Amount) / $FromCurrencyRate,2);
// 
//    var_dump($ConvertedAmount);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- bootstarp css link start  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- bootstarp css link stop  -->
</head>
<body>
    <div class="header_write">
        <h1>The World's Trusted Currency Authority</h1>
        <h4>Live Exchange Rates</h4>
    </div>
    
    <div class="flex-container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"class="form-inline" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" id="exampleFormControlSelect1" name="From_Curency">
                    <option hidden>Select Currency</option>
                    <?php foreach ($CurrencyModels as $CurrencyModel) { ?>
                        <option value="<?php echo $CurrencyModel['id'] ;?>">
                        <?php echo $CurrencyModel['ShortName'];  ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="amount"></label>
                <input type="number" class="form-control" name="amount" aria-describedby="emailHelp" placeholder="Enter Amount">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" id="exampleFormControlSelect1" name="To_Currency">
                    <option hidden>Select Currency</option>
                    <?php foreach ($CurrencyModels as $CurrencyModel) { ?>
                        <option value="<?php echo $CurrencyModel['id'] ;?>">
                        <?php echo $CurrencyModel['ShortName'];  ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <input type="submit" name="submit" value="Convert" class="bnt" >
            </div>
        </form>
    </div>

         <span><?php echo $CovertedAmount ;?></span>
        
</body>
</html>