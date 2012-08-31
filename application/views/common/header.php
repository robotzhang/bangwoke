<div class="header">
    <div class="container">
        <a href="/"><img src="<?php echo base_url() ?>static/images/logo.png"/>快速获取值得珍藏的电影</a>
        <div class="member clearfix pull-right">
            <?php if (is_login()): ?>
            <a class="btn" style="margin: 15px;" href="<?php echo site_url() ?>/cart"><i class="icon-shopping-cart"></i>
                购物车 <span style="color: #DA4F49;"><?php echo $this->cart->total_items() ?></span>
            </a>
            欢迎：<?php echo substr(current_user()->email, 0, strpos(current_user()->email, '@')); ?>
            <a href="<?php echo site_url().'/logout?url='.current_url() ?>">退出</a>
            <?php else: ?>
            <ul class="unstyled clearfix pull-right">
                <li>
                    <a class="btn" style="margin: 15px;" href="<?php echo site_url() ?>/cart"><i class="icon-shopping-cart"></i>
                        购物车 <span style="color: #DA4F49;"><?php echo $this->cart->total_items() ?></span>
                    </a>
                </li>
                <li class="first"><a href="<?php echo site_url().'/register?url='.current_url() ?>">注册</a></li>
                <li class="last"><a href="<?php echo site_url().'/login?url='.current_url() ?>">登录</a></li>
            </ul>
            <?php endif ?>
        </div>
    </div>
</div>