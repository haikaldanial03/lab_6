<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Muhammad Haikal Danial bin Yazlin";
        $matric = "AI230106";
        $course = "BIT21503 Web Development";
        $year = "Year 3";
        $address = "No 14, Jalan Limau 5, Taman Bintang, 86400 Parit Raja, Batu Pahat, Johor. ";
    ?>

    <table border="1" cellpadding="8">
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>
</body>
</html>
