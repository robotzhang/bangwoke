<?php $this->layout->setLayout(array('title' => '帮我客 -- 选片团队')); ?>

<div class="about">
    <?php $this->load->view('about/_header', array('title' => '选片团队')) ?>
    <div class="row">
        <div class="span3">
            <?php $this->load->view('about/_menu', array('activity' => 'team')) ?>
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