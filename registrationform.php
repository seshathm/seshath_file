<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/vecteezy_abstract-circle-logo-icon_12986755.png">
    <title>User Information Form</title>
    <link rel="stylesheet" href="style2.css">
    
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>
    <form action="save.php" method="post" id="userForm">
        <label>Name</label>
        <input type="text"  name="name" placeholder="Enter your name" required>

        <label>Mobile Number</label>
        <input type="number"  name="mobile" placeholder="Enter your mobile number" required>

        <label>Email</label>
        <input type="email"  name="email" placeholder="Enter your email" required>

        <label>Age</label>
        <input type="number"  name="age" placeholder="Enter your age" required>

        <label>Gender</label>
        <select type="text" name="gender" required>
            <option value="#" disabled selected>Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <button type="submit" value="Register">Submit</button>
    </form>
    <div class="form-footer">
        <p>&copy; Seshath Company</p>
    </div>
</div>


</body>
</html>
