<?php
$conn = mysqli_connect("localhost", "root", "", "hr_db");

// Display uploaded data
$sqlSelect = "SELECT * from hr_employees";

$result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0) {
    ?>
    <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <table class="table table-dark" style="width:100%; text-align-last: center;">
    <thead>
    <tr>
    <th style="border:1px solid black">Employee Number</th>
    <th style="border:1px solid black">Surname</th>
    <th style="border:1px solid black">Given Name</th>
    <th style="border:1px solid black">Birth Date</th>
    <th style="border:1px solid black">Gender</th>
    <th style="border:1px solid black">Hire Date</th>
    <th style="border:1px solid black">Initial Level</th>
    </tr>
    </thead>

    <?php
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tbody>
        <tr>
        <td><?php echo $row['hr_id'];?> </td>
        <td><?php echo $row['surname'];?> </td>
        <td><?php echo $row['givenName'];?> </td>
        <td><?php echo $row['birthDate'];?> </td>
        <td><?php echo $row['gender'];?> </td>
        <td><?php echo $row['hireDate'];?> </td>
        <td><?php echo $row['initialLevel'];?> </td>
        </tr>
        </tbody>
    <?php } ?>
    </table></body></html>
<?php } ?>
