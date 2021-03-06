<form class="form-horizontal" method="post" action="<?php echo site_url('admin/movies/create') ?>">
    <fieldset>
        <legend>将从豆瓣爬取的数据入库</legend>
        <div class="control-group">
            <label for="movie[topic_id]" class="control-label">所属影集</label>
            <div class="controls">
                <input type="text" name="movie[topic_id]" class="input-xlarge" value="">
            </div>
        </div>
        <?php foreach ($movie as $k => $v): ?>
        <div class="control-group">
            <label for="movie[<?php echo $k ?>]" class="control-label"><?php echo $k ?></label>
            <div class="controls">
                <input type="text" name="movie[<?php echo $k ?>]" class="input-xxlarge" value="<?php echo is_array($v) ? join(',', $v) : $v ?>">
            </div>
        </div>
        <?php endforeach ?>
        <div class="form-actions">
            <button class="btn  btn-success" type="submit">入库</button>
            <button class="btn" type="reset">取消</button>
        </div>
    </fieldset>
</form>