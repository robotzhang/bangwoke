<?php $this->layout->setLayout(array('title' => '帮我客 -- 电影大全')); ?>
<style type="text/css">
    .movies li { margin-bottom: 20px; }
    .movies .movie_img { float: left; box-shadow: 0 1px 2px #B0B3B6; border:#DADEE1 1px solid; border-radius: 5px; padding: 1px; }
    .movies .movie_img img { width: 67px;  border-radius: 5px; }
    .movies .movie_info { margin-left: 90px; box-shadow: 0 1px 2px #B0B3B6; padding: 15px; border:#DADEE1 1px solid; border-radius: 5px; }
    .movies .movie_info .pop-triangle { width: 13px; height: 17px; position: absolute; margin-left: -28px; margin-top: 10px; background: url(<?php echo base_url('static/images/common/narrow.png') ?>);  }
</style>

<ul class="movies unstyled">
    <?php foreach ($movies as $movie): ?>
    <li>
        <div class="pull-left">
            <div class="movie_img mb10">
                <img src="<?php echo $movie->img ?>"/>
            </div>
            <?php if (!empty($movie->player)): ?>
            <div style="text-align: center;">
                <a title="免费在线观看" class="btn btn-small btn-success" href="<?php echo site_url('movies/'.$movie->id.'#player') ?>">
                    <!--i class="icon-play-circle icon-white"></i-->在线观看
                </a>
            </div>
            <?php endif ?>
        </div>
        <div class="movie_info">
            <div class="pop-triangle"></div>
            <div style="line-height: 25px;">
                <a style="color: #333;" href="<?php echo site_url('movies/'.$movie->id) ?>">
                    <strong>
                        <?php echo movie_name($movie); ?>
                    </strong>
                </a>
                <div class="pull-right">
                    <span><?php echo $movie->year ?></span>年
                    / <span><?php echo $movie->country ?></span>
                    / <span><?php echo trim(preg_replace("/[^0-9]/", "", array_shift(explode(",", $movie->duration)))) ?></span> 分钟
                    / <em style="font-size: 18px; font-family: Constantia,Georgia; color: #ff4500;"><?php echo $movie->rating ?></em> 分
                </div>
            </div>
            <div>导演：<?php echo $movie->director?></div>
            <div>主演：<?php echo str_replace(",", " / ", $movie->cast) ?></div>
            <div style="margin-top: 5px; text-indent: 13px;"><?php echo rtrim($movie->summary, "©豆瓣") ?></div>
        </div>
    </li>
    <?php endforeach ?>
</ul>
<div class="pagination pagination-centered"><?php echo $pagination; ?></div>