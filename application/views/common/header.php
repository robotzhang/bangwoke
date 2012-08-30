<div class="header">
    <div class="container">
        <a href="/"><img src="<?php echo base_url() ?>static/images/logo.png"/>快速获取值得珍藏的电影</a>
        <div class="member pull-right">
            <?php if (is_login()): ?>
            欢迎：<?php echo substr(current_user()->email, 0, strpos(current_user()->email, '@')); ?>
            <?php else: ?>
            <ul class="unstyled clearfix">
                <li class="first"><a href="<?php echo site_url().'/register' ?>">注册</a></li>
                <li class="last"><a href="<?php echo site_url().'/login' ?>">登录</a></li>
            </ul>
            <?php endif ?>
        </div>
    </div>
</div>