<?php $this->layout->setLayout(array(
    'title' => '帮我客 -- '.movie_name($movie),
    'description' => mb_substr($movie->summary, 0, 100).'...'
)); ?>
<style type="text/css">
    .movies li { margin-bottom: 20px; }
    .movies .movie_img { float: left; box-shadow: 0 1px 2px #B0B3B6; border:#DADEE1 1px solid; border-radius: 5px; padding: 1px; }
    .movies .movie_img img { width: 67px;  border-radius: 5px; }
    .movies .movie_info { margin-left: 90px; box-shadow: 0 1px 2px #B0B3B6; padding: 15px; border:#DADEE1 1px solid; border-radius: 5px; }
    .movies .movie_info .pop-triangle { width: 13px; height: 17px; position: absolute; margin-left: -28px; margin-top: 10px; background: url(<?php echo base_url('static/images/common/narrow.png') ?>);  }
</style>

<div class="row">
    <div class="movies span9">
        <div class="movie_img pull-left">
            <img src="<?php echo $movie->img ?>"/>
        </div>
        <div class="movie_info">
            <div class="pop-triangle"></div>
            <div style="line-height: 25px;">
                <a style="color: #333;" href="<?php echo site_url('movies/'.$movie->id) ?>">
                    <strong>
                        <?php echo movie_name($movie) ?>
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

            <?php if (!empty($movie->player)): ?>
            <a name="player"></a>
            <div class="player" style="text-align: center; margin: 20px auto;">
                <object width="550" height="400" type="application/x-shockwave-flash" data="<?php echo $movie->player ?>">
                    <param value="<?php echo $movie->player ?>" name="movie">
                    <param name="wmode" value="transparent">
                    <param name="allowFullScreen" value="true">
                    <param name="allowScriptAccess" value="always">
                    <param name="flashvars" value="autoplay=1">
                </object>
            </div>
            <?php endif ?>
        </div>
    </div>
    <div class="span3">
        <div class="box">
            <p><strong>所属影集</strong></p>
            <div><a href="<?php echo site_url('topics/'.$movie->topic->id) ?>"><?php echo $movie->topic->name ?></a></div>
            <div style="margin: 10px 0;">
                <a class="btn btn-danger" href="<?php echo site_url('topics/'.$movie->topic->id) ?>">即刻拥有</a>
                <span style="color: #999; font-size: 12px;">高清DVD套装</span>
            </div>
        </div>
    </div>
</div>
