<?php $this->layout->setLayout(array(
    'title' => '帮我客 -- '.$topic->name,
    'description' => mb_substr($topic->summry, 0, 100).'...'
)); ?>
<style type="text/css">
    /*.site { background: url(http://movieso.b0.upaiyun.com/movie/71b928df2e9e23877fa6da753cf225dc.jpg) 0 0 no-repeat; background-size: cover; }*/
    .dashboard { color: #333; background-color: #FFFFF5; border: #E7E7CE 1px solid; border-radius: 5px; }
    .dashboard:hover { border-color: #EED97C; }

    .goods { color: #666; float: left; width: 400px; padding: 20px 50px; }
    .goods li { margin-bottom: 8px; }
    .goods b { float: left; width: 80px; color: #999; font-weight: normal; }
    .goods strong { color: #C00; font-size: 20px; font-weight: normal; vertical-align: baseline; }
    .buys { float: left; margin: 40px 0; }
    .buys .number { color: #878787; }
    .buys .number input { width: 50px; margin-left: 10px; margin-right: 5px; }

    .sidebar {  width: 210px; top: 380px; position: fixed; margin-left: 730px; }
    .sidebar .box { box-shadow: 0 1px 2px #B0B3B6; border:#DADEE1 1px solid; padding: 10px; border-radius: 5px; }
    .sidebar .box ul { margin-bottom: 0; }

    .movies { margin-top: 50px; width: 710px; float: left; }
    .movies .title { font-size: 16px; margin-bottom: 20px; }
    .movies li { margin-bottom: 20px; }
    .movies .movie_img { float: left; box-shadow: 0 1px 2px #B0B3B6; border:#DADEE1 1px solid; border-radius: 5px; padding: 1px; }
    .movies .movie_img img { width: 67px;  border-radius: 5px; }
    .movies .movie_info { margin-left: 90px; box-shadow: 0 1px 2px #B0B3B6; padding: 15px; border:#DADEE1 1px solid; border-radius: 5px; }
    .movies .movie_info .pop-triangle { width: 13px; height: 17px; position: absolute; margin-left: -28px; margin-top: 10px; background: url(<?php echo base_url('static/images/common/narrow.png') ?>);  }
</style>

<a name="buy"></a>
<div class="dashboard">
    <div style="padding: 13px 33px 0 33px;">
        <div>
            <strong style="font-size: 14px;"><?php echo $topic->name ?></strong>
            <span style="font-size: 12px; color: #999;">(<?php echo $topic->summry ?>)</span>
        </div>
    </div>
    <div class="clearfix" style="padding: 13px;">
        <ul class="goods unstyled">
            <li><b>价格</b><strong><?php echo $topic->price ?></strong> 元</li>
            <li><b>促销</b>全场免邮</li>
            <li><b>电影数量</b> <?php echo count($topic->movies) ?> 部</li>
            <li><b>碟片数量</b>10 张
                <span class="label label-info">DVD</span>
                <span class="label label-info">高清</span>
            </li>
        </ul>
        <div class="buys">
            <form action="<?php echo site_url('cart/add') ?>" method="post">
                <input type="hidden" name="cart[goods_type]" value="topic" />
                <input type="hidden" name="cart[goods_id]" value="<?php echo $topic->id ?>" />
                <input type="hidden" name="cart[id]" value="sku_topic_<?php echo $topic->id ?>" />
                <input type="hidden" name="cart[name]" value="<?php echo '《'.$topic->name.'》高清DVD套装' ?>" />
                <input type="hidden" name="cart[price]" value="<?php echo $topic->price ?>" />
                <input type="hidden" name="cart[url]" value="<?php echo current_url() ?>" />
                <div class="number">数量<input name="cart[qty]" type="text" value="1" />套 (库存无限)</div>
                <button class="btn btn-large btn-danger" type="submit"><i class="icon-shopping-cart icon-white"></i> 即刻拥有</button>
            </form>
        </div>
    </div>

    <div style="font-size: 12px; color: #777; border-top: #E7E7CE 1px solid; padding: 13px;">
        成本核算：
        电影院需要：90×10 = 900元
        正版碟：30×10 = 300 元
        非正版碟：10×10 = 100 元
        然后，如果自己下载需要花很多时间找片源，花很多时间下载，以及这么多的电费和电脑的损耗费。
    </div>
</div>

<div class="movies">
    <div class="title clearfix">
        <div class="pull-left">该专辑包含的影片列表</div>
        <!-- JiaThis Button BEGIN -->
        <div class="jiathis_style pull-left" style="display: inline; margin-left: 20px;">
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
    <ul class="unstyled">
        <?php foreach ($topic->movies as $key => $movie): ?>
        <li>
            <a name="<?php echo 'movie_'.$movie->id ?>"></a>
            <div class="pull-left">
                <div class="movie_img mb10">
                    <img src="<?php echo $movie->img ?>"/>
                </div>
                <?php if (!empty($movie->player)): ?>
                <div style="text-align: center;">
                    <a title="在线播放" class="btn btn-small btn-success" href="<?php echo site_url('movies/'.$movie->id.'#player') ?>">
                        <!--i class="icon-play-circle icon-white"></i-->在线观看
                    </a>
                </div>
                <?php endif ?>
            </div>

            <div class="movie_info">
                <div class="pop-triangle"></div>
                <div style="line-height: 25px;">
                    <a target="_blank" style="color: #333;" href="<?php echo site_url('movies/'.$movie->id) ?>">
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
            </div>
        </li>
        <?php endforeach ?>
    </ul>

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

<div class="sidebar">
    <div class="clearfix" style="margin-top: 90px;"></div>
    <div class="menu">
        <p><strong>快速阅读导航</strong></p>
        <ul class="unstyled">
            <li><a href="javascript:void(0);" onclick="window.scrollTo(0,0);"><b>即刻获取</b></a></li>
            <?php foreach ($topic->movies as $key => $movie): ?>
            <li>
                <a href="<?php echo current_url().'#movie_'.$movie->id ?>">
                    <?php echo !empty($movie->name_cn) && $movie->name_cn != $movie->name ? $movie->name_cn : $movie->name?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>