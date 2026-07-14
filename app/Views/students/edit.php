<!DOCTYPE html>
<html>

<head>

<title>Edit Student</title>

</head>

<body>

<h2>Edit Student</h2>

<form action="<?= base_url('students/update/'.$student['id']) ?>" method="post">

<label>Name</label>

<br>

<input
type="text"
name="name"
value="<?= $student['name']; ?>">

<br><br>

<label>Email</label>

<br>

<input
type="email"
name="email"
value="<?= $student['email']; ?>">

<br><br>

<label>Course</label>

<br>

<input
type="text"
name="course"
value="<?= $student['course']; ?>">

<br><br>

<button type="submit">

Update Student

</button>

</form>

</body>

</html>