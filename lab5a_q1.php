<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    $name = "Nur Balqis Shazwani Binti Norazmi";
    $matric = "CI220061";
    $course = "FSKTM";
    $yearOfStudy = "2024/2025";
    $address = "Kolej Kediaman Perwira, Parit Raja, Johor";
    ?>

    <table>
    <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>    
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric"; ?></td>    
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>    
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearOfStudy"; ?></td>    
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>    
        </tr>
    </table>
</body>
</html>