<?php $this->layout->setLayout(array('title' => '帮我客 -- 意见反馈')); ?>

<div class="about">
    <?php $this->load->view('about/_header', array('title' => '意见反馈')) ?>
    <div class="row">
        <div class="span3">
            <?php $this->load->view('about/_menu', array('activity' => 'feedback')) ?>
        </div>
        <div class="span9">
            <div class="feedback">
                <blockquote>
                    <p><b>关于这个网站有什么吐槽的？</b></p>
                    <p><b>关于我们选的电影有什么要说的？</b></p>
                    <p><b>想要我们增加什么功能？</b></p>
                    <p><b>产品的定价太高？</b></p>
                    <p><b>所有的一切，我们热烈而诚恳得期望你能告诉我们...</b></p>
                </blockquote>
                <?php if (!isset($success) || !$success): ?>
                <form class="form-vertical" method="post" action="<?php echo site_url('about/feedback') ?>">
                    <fieldset>
                        <input type="hidden" name="url" value="<?php echo isset($_GET['url']) ? $_GET['url'] : site_url()?>" />
                        <div class="control-group">
                            <label for="feedback[content]" class="control-label"><span class="require">*</span> 任何你想说的：</label>
                            <div class="controls">
                                <textarea name="feedback[content]" class="input-xxlarge" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="feedback[contact]" class="control-label">
                                <span class="require">*</span> 联系方式
                                <span class="thin">(qq、邮箱，当然也可以是手机)</span>
                            </label>
                            <div class="controls">
                                <input class="input-xxlarge" type="text" name="feedback[contact]" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-primery" type="submit">告诉我们</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <?php else: ?>
                <div>
                    <p>反馈已成功提交，你的支持是我们前进的动力！</p>
                    <p><strong>感激涕零！</strong></p>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>