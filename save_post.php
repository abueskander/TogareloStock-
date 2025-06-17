<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = strip_tags($_POST["title"]);
    $content = strip_tags($_POST["content"]);
    $author = strip_tags($_POST["author"]);

    $line = "$title|$content|$author\n";
    file_put_contents("posts.txt", $line, FILE_APPEND | LOCK_EX);

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
}
?>
