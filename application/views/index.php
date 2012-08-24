<div class="row">
    <?php foreach ($topics as $key => $topic): ?>
    <div class="span6">
        <h2><?php echo $topic->name ?></h2>
        <ol>
            <?php foreach ($topic->movies as $k => $movie): ?>
            <li><?php echo $movie->name_cn ? $movie->name_cn : $movie->name ?></li>
            <?php endforeach ?>
        </ol>
    </div>
    <?php endforeach ?>
</div>