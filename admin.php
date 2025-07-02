<?php
session_start();

$validUser = 'admin';
$validPass = '12345';

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $validUser && $_POST['password'] === $validPass) {
        $_SESSION['logged_in'] = true;
    } else {
        echo "<p style='color:red'>Invalid credentials</p>";
    }
}

if (isset($_POST['title_en']) && isset($_POST['title_ar']) && $_SESSION['logged_in']) {
    $newPost = [
        'title_en' => $_POST['title_en'],
        'title_ar' => $_POST['title_ar'],
        'desc_en' => $_POST['desc_en'],
        'desc_ar' => $_POST['desc_ar'],
        'date' => date("Y-m-d H:i:s")
    ];

    $data = json_decode(file_get_contents('data.json'), true);
    $data[] = $newPost;
    file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo "<p style='color:green'>Post added successfully!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .logo {
            width: 150px;
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

    <!-- ✅ Logo displayed at top -->
    <img src="logo.jpg" alt="Logo" class="logo">

<?php if (!isset($_SESSION['logged_in'])): ?>
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
<?php else: ?>
    <h2>Add News Post</h2>
    <form method="post">
        <input type="text" name="title_en" placeholder="Title (English)" required><br><br>
        <input type="text" name="title_ar" placeholder="Title (Arabic)" required><br><br>
        <textarea name="desc_en" placeholder="Description (English)" required></textarea><br><br>
        <textarea name="desc_ar" placeholder="Description (Arabic)" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <a href="admin.php?logout=true">Logout</a>
<?php endif; ?>

</body>
</html>
