<div class="menu">
    <ul class="unstyled">
        <li><a <?php if (empty($activity)) echo 'class="selected"' ?> href="<?php echo site_url('about') ?>">关于我们</a></li>
        <li><a <?php if ($activity == 'team') echo 'class="selected"' ?> href="<?php echo site_url('about/team') ?>">选片团队</a></li>
        <li><a <?php if ($activity == 'contact') echo 'class="selected"' ?> href="<?php echo site_url('about/contact') ?>">联系我们</a></li>
        <li><a <?php if ($activity == 'feedback') echo 'class="selected"' ?> href="<?php echo site_url('about/feedback') ?>">意见反馈</a></li>
    </ul>
</div>