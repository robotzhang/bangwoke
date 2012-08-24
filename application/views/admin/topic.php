<form class="form-horizontal" method="post" action="<?php echo site_url() ?>/admin/create_topic">
    <fieldset>
        <legend>新建一个电影专题</legend>
        <div class="control-group">
            <label for="topic[name]" class="control-label">名称</label>
            <div class="controls">
                <input type="text" name="topic[name]" class="input-xxlarge" value="">
            </div>
        </div>
        <div class="control-group">
            <label for="topic[price]" class="control-label">价格</label>
            <div class="controls">
                <input type="text" name="topic[price]" class="input-xlarge" value="">
            </div>
        </div>
        <div class="control-group">
            <label for="topic[discount_price]" class="control-label">折扣价</label>
            <div class="controls">
                <input type="text" name="topic[discount_price]" class="input-xlarge" value="">
            </div>
        </div>
        <div class="control-group">
            <label for="topic[summry]" class="control-label">介绍</label>
            <div class="controls">
                <textarea name="topic[summry]" class="input-xxlarge"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn  btn-success" type="submit">创建</button>
            <button class="btn" type="reset">取消</button>
        </div>
    </fieldset>
</form>