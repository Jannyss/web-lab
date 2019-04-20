<?php include "include/functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The best news for ADMIN!</title>
</head>
<body>
<div>
    <?php
    $articles = fetchArticles();
    while ($row = $articles->fetch_assoc()) {

        $content = "<div>
                         <div>
                            <h3>{$row['title']}</h3>
                            <p>Description: <b>{$row['text']}</b></p>
                            <p>Date and time of creation:<b>{$row['datetime']}</b></p>
                            <p>Author:<b> {$row['author']}</b></p>
                        </div>
                        <form action='delete.php' method='post'>
                            <input type='hidden' value='{$row['id']}' name='article_id'>
                            <button type='submit'>Delete</button>
                        </form>
                    </div>";
        echo $content;
    }
    ?>
</div>
</body>
</html>