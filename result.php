<?php
$roll = $_GET['roll'];
$found = false;
$result = [];

if (($file = fopen('results.csv', 'r')) !== FALSE) {
    while (($data = fgetcsv($file)) !== FALSE) {
        if ($data[1] == $roll) {
            $result = $data;
            $found = true;
            break;
        }
    }
    fclose($file);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>
    <h2>Student Result</h2>
    <?php if ($found): ?>
        <p>Name: <?php echo htmlspecialchars($result[0]); ?></p>
        <p>Roll Number: <?php echo htmlspecialchars($result[1]); ?></p>
        <p>Subject 1 Marks: <?php echo htmlspecialchars($result[2]); ?></p>
        <p>Subject 2 Marks: <?php echo htmlspecialchars($result[3]); ?></p>
        <p>Subject 3 Marks: <?php echo htmlspecialchars($result[4]); ?></p>
        <p>Subject 4 Marks: <?php echo htmlspecialchars($result[5]); ?></p>
        <p>Subject 5 Marks: <?php echo htmlspecialchars($result[6]); ?></p>
        <p>Total Marks: <?php echo htmlspecialchars($result[7]); ?></p>
        <p>Percentage: <?php echo htmlspecialchars($result[8]); ?></p>
        <p>Grade: <?php echo htmlspecialchars($result[9]); ?></p>
        <p>Status: <?php echo htmlspecialchars($result[10]); ?></p>
    <?php else: ?>
        <p>Result not found for Roll Number: <?php echo htmlspecialchars($roll); ?></p>
    <?php endif; ?>
</body>
</html>