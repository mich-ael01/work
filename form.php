<?php
    $subscribe = isset($_POST['subscribe']) ? $_POST['subscribe'] : 'No';
    $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $country_code = isset($_POST['country_code']) ? $_POST['country_code'] : '';
    $adfile = isset($_POST['adfile']) ? $_POST['adfile'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $bio = isset($_POST['bio']) ? $_POST['bio'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>REGISTRATION FORM</title>
</head>
<body>
    <h1><strong>REGISTRATION FORM</strong></h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Age</th>
            <th>country</th>
            <th>Phone number</th>
            <th>Birthdate</th>
            <th>Additional File</th>
            <th>Bio</th>
            <th>Subscribe</th>
            
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $country; ?></td>
            <td><?php echo $number; ?></td>
            <td><?php echo $birthdate; ?></td>
            <td><?php echo $adfile; ?></td>
            <td><?php echo $bio; ?></td>
            <td><?php echo $subscribe; ?></td>
        </tr>
    </table>
</body>
</html>
