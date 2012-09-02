<a style="color: #333;" href="<?php echo site_url('movies/'.$movie->id) ?>">
    <strong>
        <?php echo !empty($movie->name_cn) && $movie->name_cn != $movie->name ? $movie->name_cn.' / '.$movie->name : $movie->name ?>
    </strong>
</a>
<div class="pull-right">
    <span><?php echo $movie->year ?></span>年
    / <span><?php echo $movie->country ?></span>
    / <span><?php echo trim(preg_replace("/[^0-9]/", "", array_shift(explode(",", $movie->duration)))) ?></span> 分钟
    / <em style="font-size: 18px; font-family: Constantia,Georgia; color: #ff4500;"><?php echo $movie->rating ?></em> 分
</div>
<div>导演：<?php echo $movie->director?></div>
<div>主演：<?php echo str_replace(",", " / ", $movie->cast) ?></div>
<div style="margin-top: 5px; text-indent: 13px;"><?php echo rtrim($movie->summary, "©豆瓣") ?></div>