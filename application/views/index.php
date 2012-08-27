<style type="text/css">
    .site { padding-top: 0; }
    .home_header_bg { position: absolute; left: 0; width: 100%; height: 350px;overflow: hidden; }
    .home_header { height: 390px; position: relative; color: #fff; }
    .topic_info .buy_action { margin-top: 30px; font-size: 16px; text-align: center; }
    .topic_info .buy_action a { font-size: 16px; margin-left: 20px;  }
    .topic_info { display: none;  width: 700px; border-radius: 5px; padding: 20px; color: white; background: rgba(0, 0, 0, 0.4); filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr='#66000000',EndColorStr='#66000000') }
    .topic_info .movie_list { border-top: #fff 1px solid; padding: 20px; padding-bottom: 0; }
    .topic_info blockquote { line-height: 25px; }
    .topic_info .movie_list li { float: left; width: 150px; overflow: hidden; text-overflow: ellipsis; line-height: 22px; white-space: nowrap; }

    .slides_container { width: 740px; height: 270px; margin: 40px; }
    .slide_nav { float: right; list-style: none; margin: 30px 0; padding: 3px 8px; border-radius: 3px; background: rgba(0, 0, 0, 0.4); }
    .slide_nav a { display: block; border: #000 1px solid; margin: 5px 0; }
    .slide_nav li.current a, .slide_nav a:hover { border-color: #fff; }
</style>

<script src="http://slidesjs.com/examples/product/js/slides.min.jquery.js"></script>
<script>
    $(document).ready(function() {
        $(".home_header").slides({
            generatePagination: false,
            paginationClass: 'slide_nav',
            generateNextPrev: false,
            hoverPause: true,
            play: 5000, // 自动播放
            animationComplete: function() {
                var id = $('.slide_nav .current').attr('show');
                $('.home_header_bg img').hide();
                $('#'+id).fadeIn();
            }
        });

        $('.slide_nav li a').click(function(){
            /*var id = $(this).parents('li').attr('show');
            $('.home_header_bg img').hide();
            $('#'+id).fadeIn();*/
        });
    });
</script>

<div class="home_header_bg">
    <img id="topic_img_1" src="<?php echo base_url() ?>/static/images/home/topic1.jpg"/>
    <img id="topic_img_2" src="<?php echo base_url() ?>/static/images/home/topic2.jpg"/>
</div>
<div class="home_header clearfix">
    <div class="slides_container clearfix pull-left">
        <div class="topic_info clearfix">
            <blockquote>
                <div class="blockquote_right">
                    执着、才华、勇气、信念和那虽然逝去但却让人时时想起的童年...影像，恰好是获取这些，感悟这些的源动力之一。这些电影，大丈夫怎能不看，怎能不珍藏？
                </div>
                <div class="buy_action">
                    男人必看10部电影...
                    <a target="_blank" class="btn btn-danger" href="<?php echo site_url() ?>/topics/1">即刻拥有 >> </a>
                </div>
            </blockquote>
            <div class="movie_list clearfix">
                <ul class="clearfix">
                    <li>执着：《阿甘正传》</li>
                    <li>才华：《东方不败》</li>
                    <li>人生：《美国往事》</li>
                    <li>爱情：《罗马假日》</li>
                    <li>勇气：《勇敢的心》 </li>
                    <li>责任：《辛德勒的名单》</li>
                    <li>信念：《肖申克的救赎》</li>
                    <li>童心：《Ｅ．Ｔ》</li>
                    <li>痛苦：《现代启示录》</li>
                    <li>哲思：《第七封印》</li>
                </ul>
            </div>
        </div>

        <div class="topic_info clearfix">
            <blockquote>
                <div class="blockquote_right">
                    是谁说漂亮女生没大脑，只懂得暧昧和傻笑？坚强、尊严、浪漫、才气同样是女人所拥有的气质，去学习，去验证——通过这10部电影！
                </div>
                <div class="buy_action">
                    女人必看10部电影...
                    <a class="btn btn-danger" href="<?php echo site_url() ?>/topics/1">即刻拥有 >> </a>
                </div>
            </blockquote>
            <div class="movie_list">
                <ul class="clearfix">
                    <li>坚强：《乱世佳人》</li>
                    <li>沟通：《钢琴课》</li>
                    <li>虚荣：《蒂凡尼的早餐》</li>
                    <li>尊严：《简爱》</li>
                    <li>才华：《白领丽人》(又名《上班女郎》)</li>
                    <li>亲情：《母女情深》</li>
                    <li>苦难：《紫色》</li>
                    <li>女权：《末路狂花》</li>
                    <li>浪漫：《漂亮女人》(又名《风月俏佳人》)</li>
                    <li>性爱：《女人那话儿》</li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="slide_nav">
        <li class="current" show="topic_img_1"><a title="男人必看" href="#0"><img src="http://img3.douban.com/spic/s1325435.jpg" width="55" height="90"></a></li>
        <li show="topic_img_2"><a title="女人必看" href="#1"><img src="http://img1.douban.com/spic/s3846882.jpg" width="55"  height="90"></a></li>
    </ul>
</div>

<div class="row">
    <div class="span4">
        <div class="pull-left"><img src="<?php echo base_url() ?>/static/images/home/logo_alipay.gif"/></div>
        <div style="border-right: #999 1px dotted; padding: 0 10px;">
            <p><strong>支付宝担保交易</strong></p>
            <div>快捷、<strong>安全</strong>、方便。我们致力于做最好的支付体验！</div>
        </div>
    </div>
    <div class="span4">
        <div class="pull-left"><img src="<?php echo base_url() ?>/static/images/home/heart_and_rose.png"/></div>
        <div style="border-right: #999 1px dotted; padding: 0 10px;">
            <p><strong>用心服务</strong></p>
            <div>专业的团队保证货品质量，客服永不下线！</div>
        </div>
    </div>
    <div class="span4">
        <div class="pull-left"><img src="<?php echo base_url() ?>/static/images/home/song.png"/></div>
        <div style="padding: 0 10px;">
            <p><strong>可选的、快捷的物流</strong></p>
            <div>发货选择最快、最安全的物流！</div>
            <div><strong>全场免邮费！</strong></div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px; color: #999; font-size: 12px; margin-bottom: -30px;">
    本站资源全部来自互联网仅供学习参考，请勿传播。 bangwoke.com不承担任何由于内容的合法性及健康性所引起的争议和法律责任。如您认为网友所发内容侵犯您的权益 请邮件告知给我们,收到邮件并确认后24小时内删除, 我们的邮件地址是： contact@bangwoke.com
</div>