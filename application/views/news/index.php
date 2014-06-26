<?php foreach ($news as $news_item): ?>

    <h2><?php echo '<h1>'.$news_item['title'].'</h1>' ?></h2>
    <div class="main">
        <h3>Autor: <a href="news/views/<?php echo $news_item['autor'];?>"> <?php echo $news_item['autor'] ?></a></h3>
        
        <?php echo $news_item['text'] ?>
        
         
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">Ver Notícia</a></p>

<?php endforeach ?>