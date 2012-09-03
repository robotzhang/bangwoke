<?php $this->layout->setLayout(array('title' => '帮我客 -- 影集大全')); ?>
<ul class="unstyled">
    <?php foreach ($records as $record): ?>
    <li>
        <a href="<?php echo site_url('topics/'.$record->id) ?>"><?php echo $record->name ?></a>
        <div>
            <?php echo $record->summry ?>
        </div>
    </li>
    <?php endforeach ?>
</ul>
<div class="pagination pagination-centered"><?php echo $pagination; ?></div>