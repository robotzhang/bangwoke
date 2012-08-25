<div class="row">
    <?php foreach ($topics as $key => $topic): ?>
    <div class="span6">
        <h3 style="font-weight: normal;">
            <a style="color: #333;" href="<?php echo site_url().'topics/'.$topic->id ?>"><?php echo $topic->name ?></a>
        </h3>
        <blockquote><?php echo $topic->summry ?></blockquote>
        <ol>
            <?php foreach ($topic->movies as $k => $movie): ?>
            <li><?php echo $movie->name_cn ? $movie->name_cn : $movie->name ?></li>
            <?php endforeach ?>
        </ol>
    </div>
    <?php endforeach ?>
</div>