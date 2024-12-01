<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>
        Lab5a Question 2
    </title>
</head>
<body>
    <style>
        table,tr,td,th{
            border:1px solid black;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $students = [
                    [
                        'name' => 'Alice',
                        'program' => 'BIP',
                        'age' => '21'
                    ],
                    [
                        'name' => 'Bob',
                        'program' => 'BIS',
                        'age' => '20'
                    ],
                    [
                        'name' => 'Raju',
                        'program' => 'BIT',
                        'age' => '22'
                    ],
                ];

        foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['program']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>