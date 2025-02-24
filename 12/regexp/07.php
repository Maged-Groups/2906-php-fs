<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0 0 10px;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
        }

        nav {
            background-color: #266;
            display: flex;
            justify-content: center;
            padding: 30px 0;
        }

        strong {
            color: antiquewhite;
            font-size: 25px;
        }

        p {
            margin-left: 30px;
            margin-top: 60px;
            font-size: 20px;
            display: flex;
            justify-content: center;
        }

        input {
            margin-left: 215px;
            margin-top: 20px;
        }

        div {
            padding: 30px;
        }

        button {
            padding: 3px;
            margin-left: 10px;
            background-color: #499;
            border: none;
            cursor: pointer;
            color: white;
        }

        button:hover {
            background-color: yellowgreen;
            color: white;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <?php
    echo '<nav>';
    echo '<strong>Welcome to our page</strong>';
    echo '</nav>';
    ?>
    <form method="POST">
        <input type="text" name="mobile" placeholder="Enter your number" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mobile = $_POST["mobile"];
        $pattern = "/^(010|011|012|015)[0-9]{8}$/";
        if (preg_match($pattern, $mobile)) {
            echo "<p class='success'>✅ Valid Egyptian mobile number!</p>";
        } else {
            echo "<p class='error'>❌ Invalid mobile number. Try again.</p>";
        }
    }
    ?>
</body>

</html>