<?php $this->layout->setLayout(array('title' => '帮我客 -- 关于我们')); ?>

<div class="about">
    <?php $this->load->view('about/_header', array('title' => '快速获取值得珍藏的电影')) ?>
    <div class="row">
        <div class="span3">
            <?php $this->load->view('about/_menu', array('activity' => '')) ?>
        </div>
        <div class="span9">
            <div>
                <p>也许你喜欢教父，但是也许你却不知道原来还有枪火...</p>
                <p>也许你喜欢希德(马达加斯加)的欢乐，但是瓦力(机器人总动员)带给你的除了欢乐还有感动...</p>
                <p>然后忽然有一天，你想起那些曾经给你感动、带给你哲思、甚至改变了你人生的电影...</p>
                <p>搜索，找片源，然后就是漫长的下载过程...</p>
                <p>坑爹的是：下载完毕，发现是枪版、是错误版本——正如打了马赛克的《葫芦娃》</p>
                <p>那么，在<strong> 帮我客 </strong>：</p>
                <p>只需要选择你想要的电影然后<strong> 支付宝担保交易 </strong>，然后这些值得珍藏的<strong> 高清电影 </strong>就会刻成<strong> 高质量 </strong>碟片到你的手上。</p>
                <p>多么轻松！</p>
                <p><a class="btn btn-success" href="<?php echo site_url(); ?>">马上获取</a> </p>
            </div>
        </div>
    </div>
</div>