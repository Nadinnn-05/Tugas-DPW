<?php
session_start();

function bersihkan_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Data user valid (simulasi database)
$valid_users = [
    "admin" => "admin123",
    "user1" => "pass123"
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $username = bersihkan_input($_POST["username"]);
        $password = bersihkan_input($_POST["password"]);

        if (empty($username) || empty($password)) {
            throw new Exception("Username dan password wajib diisi!");
        }

        if (!array_key_exists($username, $valid_users)) {
            throw new Exception("Username tidak ditemukan!");
        }

        if ($valid_users[$username] !== $password) {
            throw new Exception("Password salah!");
        }

        // Login berhasil — simpan ke session
        $_SESSION["username"] = $username;
        $_SESSION["login"]    = true;

        header("Location: dashboard.php");
        exit();

    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

// Cek jika sudah login
if (isset($_SESSION["login"]) && $_SESSION["login"] === true) {
    echo "Selamat datang, " . $_SESSION["username"] . "! ";
    echo '<a href="logout.php">Logout</a>';
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <style> .error { color: red; font-size: 0.85em; } </style>
</head>
<body>
<h2>Login</h2>
<?php if ($error): ?>
    <p class="error"><?php echo $error; ?></p>
<?php endif; ?>
<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>
</body>
</html>