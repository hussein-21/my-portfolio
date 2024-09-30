<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Currency Converter</title>
</head>

<body>
  <h1>Currency Converter</h1>
   <?php
        
    if(isset($_POST['usd']) && isset($_POST['convertto'])) {
        $usd = floatval($_POST['usd']);
        $convertto = mb_substr($_POST['convertto'],0,15);
        $amount =  "";


            if ($convertto == "EUR")
            {   
                $rate =  0.908265;
                $amount = $usd * $rate;
                $convertto = "Euros";
            }

            elseif ($convertto == "CAD")
            {
                $rate = 1.353906;
                $amount = $usd * $rate;	
                $convertto = "CD";
            }

            elseif ($convertto == "JPY")
            {   
                $rate =  134.584240;
                $amount = $usd * $rate;	
                $convertto = 'JY';
            }

            elseif ($convertto == "QAR")
            {
                $rate = 3.640000;
                $amount = $usd * $rate;
                $convertto = 'QR';
            }

            elseif ($convertto == "INR")
            {
                $rate = 81.907911;
                $amount = $usd * $rate;
                $convertto = "INR";
            }
            echo "<p>$usd U.S dollars = " . number_format($amount, 2, '.', ',') . " $convertto</p>";
            

    }
    ?>
    <input type="button" value="Another Conversion" onclick="window.history.back()" /> 
    


</body>
</html>