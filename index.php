<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إضافة منشور</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
        }
        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 10px;
            resize: none;
        }
        button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .success {
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = trim($_POST['post']);
    if (!empty($post)) {
        file_put_contents('posts.txt', $post . PHP_EOL, FILE_APPEND);
        echo "<p class='success'>✅ تم حفظ المنشور بنجاح!</p>";
    } else {
        echo "<p class='success'>❌ لا يمكن حفظ منشور فارغ.</p>";
    }
}
?>

<form method="POST">
    <h3>أضف منشور جديد</h3>
    <textarea name="post" placeholder="اكتب المنشور هنا..."></textarea>
    <button type="submit">نشر</button>
</form>

</body>
</html>
