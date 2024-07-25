<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            text-align: center;
        }
        form {
            margin: 0 8rem;
            border: 1px solid;
        }
        label {
            display: block;
        }
        input {
            display: block;
            margin: 0 auto;
            padding: 5px;
        }
        button {
            margin: 10px auto;
            display: block;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label>Username:</label>
        <input name="username">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <button >Login</button>
    </form>
    <script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uname = $_POST["username"];
            $pass = $_POST["password"];
            $file = fopen("loginDetails.txt", "r");

            $content = fgets($file);
            if ($content == $uname . ":" . $pass) {
                echo "alert('Access granted!')";
            } else {
                echo "alert('Incorrect')";
            }
        }
        ?>
    </script>
</body>
</html>