<style type="text/css">
    .users { margin: 0 auto; width: 400px; }
</style>
<div class="users">
    <form class="form-vertical" method="post" action="<?php echo site_url() ?>/login">
        <fieldset>
            <?php if (!empty($errors)): ?>
            <div class="control-group">
                <div class="errors"><?php echo $errors['all'] ?></div>
            </div>
            <?php endif ?>
            <div class="control-group">
                <label for="user[email]" class="control-label">邮 箱</label>
                <div class="controls">
                    <input type="text" name="user[email]" value="">
                </div>
            </div>
            <div class="control-group">
                <label for="user[password]" class="control-label">密 码</label>
                <div class="controls">
                    <input type="text" name="user[password]" value="">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button class="btn btn-primery" type="submit">登陆</button>
                    <span style="font-size: 12px; color: #777; margin-left: 10px;">还没账号？<a href="<?php echo site_url() ?>/register">注册</a></span>
                </div>
            </div>
        </fieldset>
    </form>
</div>