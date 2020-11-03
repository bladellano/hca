<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="header-page"></div>

<div class="container post">

  <nav aria-label="breadcrumb">
    <p></p>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item" aria-current="page">Notícias</li>
    </ol>
  </nav>

  <hr>

  <div class="row">
    <div class="col-md-9">

      <p> <i class="fa fa-calendar-alt"></i> <?php echo toDatePtBr($post["created_at"]); ?></p>
      <h3><?php echo $post["title"]; ?></h3>
      <img src='<?php echo url($post["image"]); ?>'>
      <?php echo $post["description"]; ?>
      <p class="text-muted">Autor: <?php echo $post["author"]; ?></p>
    </div>
    <div class="col-md-3">
      <h3>Recentes</h3>
      <?php $counter1=-1;  if( isset($posts) && ( is_array($posts) || $posts instanceof Traversable ) && sizeof($posts) ) foreach( $posts as $key1 => $value1 ){ $counter1++; ?>
      <p><i class="fa fa-calendar-alt text-black-50"></i>
        <small class="text-muted"><?php echo toDatePtBr($value1["created_at"]); ?></small>
        <br>
        <a href="/post/<?php echo $value1["slug"]; ?>"><?php echo resume($value1["title"],55); ?></a>
      </p>
      <hr>
      <?php } ?>
    </div>
  </div>

</div><!-- container -->