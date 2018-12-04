<?php $link = preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']);?>
<nav aria-label="Page navigation example">
<ul class="pagination">
  <?php if($link>1):?><li class="page-item"> <a class="page-link" href="/lessons/<?=$link-1?>">Назад</a></li><?php endif;?>
  <li class="page-item"> <a class="page-link" href="/lessons">Список</a></li>
  <li class="page-item"> <a class="page-link" href="/lessons/<?=$link+1?>">Следующий</a></li>
</ul>
</nav>