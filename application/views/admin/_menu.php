<?php
    $action = $this->uri->segment(1);
    $action_next = $this->uri->segment(2);
?>

<div class="menu">
    <ul class="unstyled">
        <li><a <?php if ($action_next == '' || $action_next == 'topics') echo 'class="selected"' ?> href="<?php echo site_url('admin/topics') ?>">影集维护</a></li>
        <li><a <?php if ($action_next == 'movies') echo 'class="selected"' ?> href="<?php echo site_url('admin/movies') ?>">电影维护</a></li>
        <li><a <?php if ($action_next == 'orders') echo 'class="selected"' ?> href="javascript:void(0);">订单维护</a></li>
        <li><a <?php if ($action_next == 'users') echo 'class="selected"' ?> href="<?php echo site_url('admin/users') ?>">用户维护</a></li>
    </ul>
</div>