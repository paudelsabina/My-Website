<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $math=  $_POST['math'];
    $science= $_POST['science'];
    $social= $_POST['social'];
    $english= $_POST['english'];
    $nepali=  $_POST['nepali'];
    
    $total = $math+$science+$social+$english+$nepali;
    $percentage = ($total / 500)*100;
    
    if ($percentage >= 90) 
    {
        $grade = 'A';
    }
     elseif ($percentage >= 80)
    {
        $grade = 'A-';
    } 
    elseif ($percentage >= 70) 
    {
        $grade = 'B+';
    } 
    elseif ($percentage >= 60) 
    {
        $grade = 'B';
    }
    elseif($percentage>=50)
    {
        $grade= 'B-';
    }

     else 
    {
        $grade= 'Fail';
    }
    
    $data = array($name, $roll, $math, $science, $social, $english, $nepali, $total, $percentage, $grade);
    $file = fopen('results.csv', 'a');
    fputcsv($file, $data);
    fclose($file);
    
    header("Location: result.php?roll= $roll");
    exit;
}
?>