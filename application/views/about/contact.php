<?php $this->layout->setLayout(array('title' => '帮我客 -- 联系我们')); ?>

<div class="about">
    <?php $this->load->view('about/_header', array('title' => '联系我们')) ?>
    <div class="row">
        <div class="span3">
            <?php $this->load->view('about/_menu', array('activity' => 'contact')) ?>
        </div>
        <div class="span9">
            <div>
                <p>
                    <b>有关内容版权</b>
                    <div>marketing@bangwoke.com</div>
                </p>
                <p>
                    <b>有关合作</b>
                    <div>marketing@bangwoke.com</div>
                </p>
                <p>
                    <b>有关其他任何事情</b>
                    <div>service@bangwoke.com</div>
                </p>
            </div>
        </div>
    </div>
</div>