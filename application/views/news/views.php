<?php foreach ($news as $news_item): ?>

<?php echo '<h2>'.$news_item['title'].'</h2>';?>

<?php echo '<p><h3>Autor: ' . $news_item['autor'] . '</h3></p>'; ?>

<?php echo $news_item['text']; ?>

<?php echo "</br></br><a href='http://127.0.0.1/aulaci/index.php/news'>Pagina Inicial</a>";?>

<?php endforeach ?>