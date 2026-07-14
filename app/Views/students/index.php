<!DOCTYPE html>
<html>

<head>
    <title>Students List</title>

    <style>

        table{
            border-collapse: collapse;
            width:80%;
            margin:auto;
        }

        table,th,td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }

        h2{
            text-align:center;
        }

        .btn{
            padding:8px 15px;
            text-decoration:none;
            color:white;
            border-radius:5px;
        }

        .add{
            background:green;
        }

        .edit{
            background:blue;
        }

        .delete{
            background:red;
        }

    </style>

</head>

<body>

<h2>Students List</h2>

<center>

<a class="btn add" href="<?= base_url('students/create') ?>">
Add Student
</a>

</center>

<br>

<table>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Course</th>

<th>Action</th>

</tr>

<?php foreach($students as $row){ ?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= $row['name']; ?></td>

<td><?= $row['email']; ?></td>

<td><?= $row['course']; ?></td>

<td>

<a class="btn edit"
href="<?= base_url('students/edit/'.$row['id']) ?>">
Edit
</a>

<a class="btn delete"
href="<?= base_url('students/delete/'.$row['id']) ?>">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</body>

</html>