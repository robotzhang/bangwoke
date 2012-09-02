<?php $this->layout->setLayout(array('title' => '帮我客 -- 选片团队')); ?>
<style type="text/css">
    .site { padding-top: 0; }
    .about .about_header { position: absolute; left: 0; width: 100%; height: 170px;background: url(https://a248.e.akamai.net/assets.github.com/images/modules/about_page/parallax_bg.jpg?1340935010) 0 0 repeat-x; }
    #about-header { height: 190px; position: relative; color: #fff; }
    .about .about_menu { background-color: #EFEFEF; padding: 5px; border-radius: 2px; margin-bottom: 20px; }
    .about .about_menu ul { background-color: #FAFAFB; border: 1px solid #D8D8D8; border-radius: 2px; margin: 0; }
    .about .about_menu ul li { border-bottom: 1px solid #EEEEEE; border-top: 1px solid #FFFFFF; }
    .about .about_menu ul li:first-child { border-top: medium none; }
    .about .about_menu ul li:last-child { border-bottom: medium none; }
    .about .about_menu a { display: block; padding: 8px 10px; text-shadow: 0 1px 0 #FFFFFF; }
    .about .about_menu a:hover { background-color: #FDFDFD; text-decoration: none; color: #08C; }
    .about .about_menu a.selected { background: none repeat scroll 0 0 #FFFFFF; border-left: 2px solid #D26911; box-shadow: 0 0 1px rgba(0, 0, 0, 0.1) inset; color: #222222; cursor: default; font-weight: bold; }

</style>
<div class="about">
    <div class="about_header"></div>
    <div class="clearfix" id="about-header">
        <div class="row">
            <div class="span9" style="font-size: 20px; line-height: 170px; text-align: center;">
                “ 快速获取值得珍藏的电影 ”
            </div>
            <div class="span3" style="margin-top: 15px;">
                <img src="<?php echo base_url('static/images/about/eve_128_128.png') ?>" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span3">
            <div class="about_menu">
                <ul class="unstyled">
                    <li><a href="<?php echo site_url('about') ?>">关于我们</a></li>
                    <li><a class="selected" href="<?php echo site_url('about/team') ?>">选片团队</a></li>
                    <li><a href="javascript:void(0);">理念态度</a></li>
                    <li><a href="javascript:void(0);">联系我们</a></li>
                    <li><a href="javascript:void(0);">意见反馈</a></li>
                </ul>
            </div>
        </div>
        <div class="span9">
            <div>
                <p>阅片无数...</p>
                <p>爱思考，爱讨论，话题从午饭吃什么到宇宙最终的走向...</p>
                <p>混迹互联网数年的小文艺...</p>
                <p>最重要的：都是有故事的一群人！</p>
                <p>当然我们也期待你的帮助...</p>
                <p><a class="btn btn-success" href="javascript:void(0);">我要选片</a> </p>
            </div>
        </div>
    </div>
</div>