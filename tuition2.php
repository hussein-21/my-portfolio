<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>HFC Tuition Calculator</title>
</head>

<body>
  <h1>Tuition Calculator</h1>
   <?php
        #GET AND FILTER USER INPUT
        $residency = mb_substr($_POST['residency'],0,1);
        $faid = mb_substr($_POST['faid'],0,1);
        $lower = mb_substr($_POST['lower'],0,2);
        $upper = mb_substr($_POST['upper'],0,2);

        #VALIDATE CREDIT HOURS
        if ($lower == "")
            $lower = 0; 
        if ($upper == "")
            $upper = 0;
        if ($lower == 0 and $upper == 0)
            exit("Invalid input. You must enter at least 1 credit hour. <a href=\"javascript:history.go(-1)\">Go back</a>");

        #DECISION STATEMENT TO CALCULATE CREDIT HOURS
        if ($residency == 1)
        {
            $residency = "in-district";
            $tuition = ($lower * 108) + ($upper * 200) + (($lower + $upper) * 24) + 50 + 60;
        }
        elseif ($residency == 2)
        {
            $residency = "Out-Of-District";
            $tuition = ($lower * 188) + ($upper * 265) + (($lower + $upper) * 24) + 50 + 60;
        }
        elseif ($residency == 3)
        {
            $residency = "Out of State / International";
            $tuition = ($lower * 273) + ($upper * 350) + (($lower + $upper) * 24) + 50 + 60;
        }

        #OUTPUT/DISPLAY TOTAL COST
        echo "<p>Total $residency tuition cost for $lower 100-200 Level Credit Hours, and $upper Level 300 & 400 Credit Hours is:$" . number_format($tuition,2) ."</p>";

        #DECISION STATEMENT FOR FINANCIAL AID
        if ($faid == 2)
        {
            $faid = "Yes";
                echo "<p>Helpful Financial Aid Information</p>
                    <p>
                        <ul>
                            <li><a href=\"https://www.hfcc.edu/financial-aid/grants\"></a>
                            <li><a href=\"https://www.hfcc.edu/payment\"></a>
                            <li><a href=\"https://www.hfcc.edu/payment/scholarships\"></a>
                        </ul>
                    </p>
                </p>";
        }

        elseif ($faid == 1)
        {
            $faid = "No";
                echo "<p></p>";
        }
    ?>


</body>
</html>