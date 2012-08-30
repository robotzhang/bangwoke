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

    .sidebar { float: right; width: 210px; }
    .sidebar .box { box-shadow: 0 1px 2px #B0B3B6; border:#DADEE1 1px solid; padding: 10px; border-radius: 5px; }
    .sidebar .box ul { margin-bottom: 0; }

    .movies { margin-top: 50px; width: 710px; float: left; }
    .movies .title { font-size: 16px; margin-bottom: 20px; }
    .movies li { margin-bottom: 20px; }
    .movies .movie_img { float: left; box-shadow: 0 1px 2px #B0B3B6; border:#DADEE1 1px solid; border-radius: 5px; padding: 1px; }
    .movies .movie_img img { width: 67px;  border-radius: 5px; }
    .movies .movie_info { margin-left: 90px; box-shadow: 0 1px 2px #B0B3B6; padding: 15px; border:#DADEE1 1px solid; border-radius: 5px; }
    .movies .movie_info .pop-triangle { width: 13px; height: 17px; position: absolute; margin-left: -28px; margin-top: 10px; background: url(<?php echo base_url() ?>/static/images/common/narrow.png);  }
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
            <li><b>价格</b><strong>50.00</strong> 元</li>
            <li><b>促销</b>全场免邮</li>
            <li><b>电影数量</b> 10 部</li>
            <li><b>碟片数量</b>10 张
                <span class="label label-info">DVD</span>
                <span class="label label-info">高清</span>
            </li>
        </ul>
        <div class="buys">
            <form action="<?php echo site_url() ?>/cart/add" method="post">
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
    <div class="title">该专辑包含的影片列表</div>
    <ul class="unstyled">
        <?php foreach ($topic->movies as $key => $movie): ?>
        <li>
            <a name="<?php echo 'movie_'.$movie->id ?>"></a>
            <div class="movie_img">
                <img src="<?php echo $movie->img ?>"/>
            </div>
            <div class="movie_info">
                <div class="pop-triangle"></div>
                <div style="line-height: 25px;">
                    <strong>
                    <?php echo !empty($movie->name_cn) && $movie->name_cn != $movie->name ? $movie->name_cn.' / '.$movie->name : $movie->name ?>
                    </strong>
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
</div>

<div class="sidebar" style="position: fixed; margin-left: 730px;">
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