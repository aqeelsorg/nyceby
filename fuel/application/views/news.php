<?php

$slug = uri_segment(2);

if (!empty($slug))
{
    $news_item = fuel_model('news', array('find' => 'one', 'where' => array('slug' => $slug)));
	
	fuel_set_var('layout', '_layouts/news'); 
	
    if (empty($news_item)) show_404();
}
else
{
    $news = fuel_model('news');
}
?>
 
<h1>News</h1>
 
<?php if (!empty($news_item)) : ?>
 
<?php fuel_set_var('page_title', $news_item->headline); ?>
 
<?php fuel_set_var('layout', '_layouts/news'); ?>
 
<div class="news_item" style="height:600px;">
    <h2><?=$news_item->headline?></h2>
    <div class="date"><?=$news_item->release_date_formatted?></div>
    <?=$news_item->content_formatted?>
</div>
 
<?php else: ?>
 
 
<?php foreach($news as $item) : ?>
 
<div class="news_item" style="height:365px;">
    <h2><a href="<?=$item->url?>"><?=$item->slug?></a></h2>
    <div class="date"><?=$item->release_date_formatted?></div>
    <?=$item->get_excerpt_formatted(300, 'Read Full Story Â»')?>
 
    <hr />
</div>
 
<?php endforeach; ?>
 
<?php endif; ?>
