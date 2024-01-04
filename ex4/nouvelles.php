<?php
$articles = [
    ["id"=>0, "title"=>"Google Chrome", "text"=>"Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!"],
    ["id"=>1, "title"=>"Mozilla Firefox", "text"=>"Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018."],
    ["id"=>2, "title"=>"Microsoft Edge", "text"=>"Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer."],
];
$view = "SUMMARY";
$title = "";
$text = "";
?>
<!doctype html>
<html lang="fr">

<body>

<main>
    <?php if ($view === "detail") { ?>
        <article>
            <h2>$title</h2>
            <p>$text</p>
        </article>
    <?php } else { ?>
        <h2>Popular today :</h2>
        <?php foreach ($articles as $article) { ?>
        <ul>
            <li><?= $article["title"] ?></li>
        </ul>
        <?php } ?>
    <?php } ?>
</main>

</body>

</html>