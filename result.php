<?php
if (isset($_GET["roll"])) 
{
    $roll = $_GET["roll"];
    $fp = fopen("results.csv", "r");
    while (($data = fgetcsv($fp)) !== FALSE) 
    {
        if ($data[1] == $roll) 
        {
            $name = $data[0];
            $math = $data[2];
            $science = $data[3];
            $social = $data[4];
            $english = $data[5];
            $nepali = $data[6];
            $total = $data[7];
            $percentage = $data[8];
            $grade = $data[9];
            break;
        }
    }
    fclose($fp);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>
<center>
    <h1>Sukuna Multiple Campus</h1>
    <h2>Sundaraicha-12, Morang</h2>
    <h3> BICTE 3rd Sem</h3>
</center>
    <p>Name: <?php echo $name; ?></p>
    <p>Roll Number: <?php echo $roll; ?></p>

    <p><center><strong> MARKSHEET</strong></center></p>
<center>
<table border="5px">
<tr>
        <th>No.</th> <th> Subjects</th> <th>Full Marks</th> <th>Pass Marks</th> <th> Obtained Marks
</tr>

<tr>
    <td>1.</td><td>math</td><td>100</td><td>50</td><td><?php echo $math; ?></p></td>
</tr>

<tr>
    <td>2.</td><td>Science</td><td>100</td><td>50</td><td><?php echo $science; ?></p></td>
</tr>

<tr>
    <td>3.</td><td>Social</td><td>100</td><td>50</td><td><?php echo $social; ?></p></td>
</tr>

<tr>
    <td>4.</td><td>English</td><td>100</td><td>50</td><td><?php echo $english; ?></p></td>
</tr>

<tr>
    <td>5.</td><td>Nepali</td><td>100</td><td>50</td><td><?php echo $nepali; ?></p></td>
</tr>

<tr>
    <td colspan="2"></td><td colspan="2">Total Marks</td><td><?php echo $total; ?></p></td>
</tr>

<tr>
<td colspan="5">Result:</td>
</tr>
</table>
</center>
   <p> <?php echo $total; ?></p>
    <?php echo $percentage; ?>%</p>
    <?php echo $grade; ?></p>
</body>
</html>
