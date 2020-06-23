<div class="containcard" id="articles">
            <h1 class="mt-3 pb-3 mb-4 border-bottom text-center">
                Article Section
            </h1>
            <?php $i=1; foreach ($articles as $article) : ?>
        <div class="accordian">
        <details> <summary>
        <?php echo $article['title']; ?> <svg class="control-icon control-icon-expand" width='24' height='24' role='presentation'> <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#expand-more' /></svg><svg class='control-icon control-icon-close' width='24' height='24' role='presentation'><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#close'/> </svg><h3>By: <?php echo $article['user']; ?></h3> </summary> <p> <?php echo $article['Content']; ?></p> </details>";

        <?php $i++; endforeach; ?>

<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
  </svg>

  
</div>
</div>
</div>