<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <form method="post" action="store-user.php">
        <div>
            <label>First Name</label>
            <input type="text" name="first_name">
        </div>

        <div>
            <label>Last Name</label>
            <input type="text" name="last_name">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Mobile</label>
            <input type="text" name="mobile">
        </div>

        <div>
            <label>Date of birth</label>
            <input type="date" />
        </div>

        <div>
            <label>Yearly Salary</label>
            <input type="number" />
        </div>

        <div>
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div>
            <label>Confirm your Password</label>
            <input type="password" name="password_confirmation">
        </div>


        <div>
            <button type="Submit">Submit</button>
            <button type="reset">Reset All</button>
            <button type="button">No Action (use with JS)</button>

            <input type="button" value="No Action (use with JS) [input]">
            <input type="reset" value="Reset All [input]">
            <input type="submit" value="Submit [input]">
        </div>
        
    </form>

</body>

</html>