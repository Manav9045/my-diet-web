<!DOCTYPE html>

<html>

<head>

<title>Student Registration Form</title>

</head> <body>

<h1>Student Registration Form</h1>

<form action="" method="post">

<label for="name">Name:</label>

<input type="text" name="name" required><br><br>

<label for="email">Email:</label>

<input type="email" name="email" required><br><br>

<label for="phone">Phone:</label>

<input type="tel" name="phone" required><br><br>

<label for="gender">Gender:</label>

<input type="radio" name="gender" value="male" required> Male <input type="radio" name="gender" value="female" required>

Female<br><br>

<label for "course">Course:</label> <select name "course" required>
option value "Select a course</option> option value "Computer Science" Computer Science/option>

option value "Engineering">Engineering</option> <option value "Business">Business</option

>

<select><br><br>

<input type "submit" name="submit" value="Submit"> <form>

php

if(isset($_POST['submit'])){

Sname=$_POST['name'];

Semail $_POST['email'];

Sphone=$_POST['phone'];

Sgender=S_POST['gender'];

Scourse=$_POST['course'];

echo "<h2>Registration Details</h2>";

echo "Name:". Sname. "<br>";

echo "Email: ". Semail. "<br>";

echo "Phone:". Sphone."<br>";

echo "Gender: ".$gender. "<br>";

echo "Course:". $course. "<br>";

?>

</body>

</html>