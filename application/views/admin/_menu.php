<?php
    $action = $this->uri->segment(1);
    $action_next = $this->uri->segment(2);
?>

<ul class="nav nav-tabs">
    <li <?php if ($action_next == '' || $action_next == 'topics') echo 'class="active"' ?>><a href="<?php echo site_url('admin/topics') ?>">影集维护</a></li>
    <li <?php if ($action_next == 'movies') echo 'class="active"' ?>><a href="<?php echo site_url('admin/movies') ?>">电影维护</a></li>
    <li <?php if ($action_next == 'orders') echo 'class="active"' ?>><a href="<?php echo site_url('admin/orders') ?>">订单维护</a></li>
    <li <?php if ($action_next == 'users') echo 'class="active"' ?>><a href="<?php echo site_url('admin/users') ?>">用户维护</a></li>
</ul>