<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <title>Data</title>
</head>
<body>
    <center><h4>Data Table</h4></center>
    <table class="table table-bordered" style="width: 70%; margin-left:200px">
        <tr>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Address 1</th>
            <th scope="col">Address 2</th>
        </tr>
        <tr>
            <td scope="row"><?php echo $data['last-name'] ?></td>
            <td><?php echo $data['first-name'] ?></td>
            <td><?php echo $data['address1'] ?></td>
            <td><?php echo $data['address2'] ?></td>
        </tr>
    </table>
</body>
</html>