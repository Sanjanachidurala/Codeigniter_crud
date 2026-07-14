<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .container {
            width: 450px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button {
            background: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background: darkgreen;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body>

<div class="container">

    <h2>Add Student</h2>

    <form action="<?= base_url('students/store') ?>" method="post">

        <label>Name</label>

        <input
            type="text"
            name="name"
            placeholder="Enter Name"
            required>

        <label>Email</label>

        <input
            type="email"
            name="email"
            placeholder="Enter Email"
            required>

        <label>Course</label>

        <input
            type="text"
            name="course"
            placeholder="Enter Course"
            required>

        <button type="submit">
            Save Student
        </button>

    </form>

    <br>

    <a href="<?= base_url('students') ?>">
        Back to Student List
    </a>

</div>

</body>

</html>