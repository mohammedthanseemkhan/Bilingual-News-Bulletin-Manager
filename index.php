<?php
$data = json_decode(file_get_contents('data.json'), true);
$latest = array_reverse(array_slice($data, -5));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Bulletin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button onclick="toggleLanguage()">Toggle Language (EN / AR)</button>

    <div id="news-container">
        <?php foreach ($latest as $news): ?>
            <div class="news-box">
                <div class="lang en">
                    <h3><?= $news['title_en'] ?></h3>
                    <p><?= $news['desc_en'] ?></p>
                </div>
                <div class="lang ar" dir="rtl">
                    <h3><?= $news['title_ar'] ?></h3>
                    <p><?= $news['desc_ar'] ?></p>
                </div>
                <small><?= $news['date'] ?></small>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
