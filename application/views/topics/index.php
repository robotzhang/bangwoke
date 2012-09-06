<?php $this->layout->setLayout(array('title' => '帮我客 -- 影集大全')); ?>
<ul class="breadcrumb">
    <li>
        <a href="<?php echo site_url() ?>">首页</a> <span class="divider">/</span>
    </li>
    <li class="active">影集大全</li>
</ul>
<div style="margin-bottom: 30px;" class="row">
    <?php foreach($topics as $topic): ?>
    <div class="span3 mb20">
        <div class="box" style="padding: 10px;adding: 10px; height: 280px; overflow: hidden; text-overflow: ellipsis;">
            <p><a href="<?php echo site_url('topics/'.$topic->id) ?>"><img src="<?php echo $topic->img ?>" width="210" /></a></p>
            <div><a style="color: #333;" href="<?php echo site_url('topics/'.$topic->id) ?>"><strong><?php echo $topic->name ?></strong></a></div>
            <div style="text-indent: 16px;"><?php echo $topic->summry ?></div>
        </div>
    </div>
    <?php endforeach ?>
</div>
<div class="pagination pagination-centered"><?php echo $pagination; ?></div>