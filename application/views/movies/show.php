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
        <div class="movie_info clearfix">
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

            <!-- JiaThis Button BEGIN -->
            <div class="jiathis_style" style="margin-top: 10px;">
                <span class="jiathis_txt">分享到：</span>
                <a class="jiathis_button_qzone"></a>
                <a class="jiathis_button_tsina"></a>
                <a class="jiathis_button_tqq"></a>
                <a class="jiathis_button_renren"></a>
                <a class="jiathis_button_kaixin001"></a>
                <a href="http://www.jiathis.com/share?uid=1678347" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
            </div>
            <script type="text/javascript">var jiathis_config = {data_track_clickback:true};</script>
            <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=1344774277688302" charset="utf-8"></script>
            <!-- JiaThis Button END -->
        </div>

        <!-- Duoshuo Comment BEGIN -->
        <div style="margin-top: 20px;" class="ds-thread box" data-thread-key="" data-title="" data-author-key="" data-url=""></div>
        <script type="text/javascript">
            var duoshuoQuery = {short_name:"bangwoke"};
            (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = 'http://static.duoshuo.com/embed.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0]
                    || document.getElementsByTagName('body')[0]).appendChild(ds);
            })();
        </script>
        <!-- Duoshuo Comment END -->
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
