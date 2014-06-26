<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo '<p><h3>Autor: ' . $news_item['autor'] . '</h3></p>';
echo $news_item['text'];
echo "</br></br><a href='http://127.0.0.1/aulaci/index.php/news'>Pagina Inicial</a>";