<form class="form-horizontal" method="get" action="<?php echo site_url() ?>/admin/spider">
    <fieldset>
        <legend>从豆瓣爬取数据</legend>
        <?php if ($this->session->flashdata('info')): ?>
        <div class="control-group">
            <div class="badge badge-warning"><?php echo $this->session->flashdata('info') ?></div>
        </div>
        <?php endif ?>
        <div class="control-group">
            <label for="id" class="control-label">电影id</label>
            <div class="controls">
                <input type="text" name="id" class="input-xlarge">
                <p class="help-block">
                    可以通过豆瓣的<a target="_blank" href="http://movie.douban.com/">电影搜索</a>来确定电影id
                </p>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn  btn-success" type="submit">爬取</button>
            <button class="btn" type="reset">取消</button>
        </div>
    </fieldset>
</form>