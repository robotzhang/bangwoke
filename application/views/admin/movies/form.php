<form class="form-horizontal" method="post" action="<?php echo site_url(empty($movie) ? 'admin/movies/create' : 'admin/movies/update') ?>">
    <fieldset>
        <legend><?php echo empty($movie) ? '新建' : '编辑' ?>电影</legend>
        <?php foreach ($movie as $k => $v): ?>
        <div class="control-group">
            <label for="movie[<?php echo $k ?>]" class="control-label"><?php echo $k ?></label>
            <div class="controls">
                <input type="text" name="movie[<?php echo $k ?>]" class="input-xxlarge" value="<?php echo is_array($v) ? join(',', $v) : $v ?>">
            </div>
        </div>
        <?php endforeach ?>
        <div class="form-actions">
            <button class="btn  btn-success" type="submit"><?php echo empty($movie) ? '创建' : '更新' ?></button>
            <button class="btn" type="reset">取消</button>
        </div>
    </fieldset>
</form>