<?php foreach ($news as $news_item): ?>
 <p><a href="http://127.0.0.1/aulaci/index.php/news/create">Criar Notícia</a></p>
    <h2><?php echo '<h1>'.$news_item['title'].'</h1>' ?></h2>
    <div class="main">
        <h3>Autor: <a href="news/views/<?php echo $news_item['autor'];?>"> <?php echo $news_item['autor'] ?></a></h3>
      

  <?php
$texto = $news_item['text'];

echo substr($texto, 0, 30);  // eu não sou besta
echo "..."; ?>
        
        
        <?php ?>
        
         
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">Ver Notícia</a></p><br/>
       

<?php endforeach ?>