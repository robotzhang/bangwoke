<h2><?php echo $topic->name ?></h2>
<blockquote><?php echo $topic->summry ?></blockquote>
<ul class="unstyled">
    <?php foreach ($topic->movies as $key => $movie): ?>
    <li class="clearfix">
        <div class="pull-left"><img src="<?php echo $movie->img ?>"/></div>
        <div>
            <h3>
                <?php echo !empty($movie->name_cn) && $movie->name_cn != $movie->name ? $movie->name_cn.' / '.$movie->name : $movie->name ?>
            </h3>
        </div>
    </li>
    <?php endforeach ?>
</ul>