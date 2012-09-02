<div class="mb10">
    <!--a class="btn" href="<?php echo site_url('admin/movies/create') ?>">
        <i class="icon-plus-sign"></i>
        新建电影
    </a-->
    <a class="btn" href="<?php echo site_url('admin/movies/spider') ?>">
        <i class="icon-plus-sign"></i>
        从豆瓣爬取
    </a>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>名称</th>
            <th>影集</th>
            <th>豆瓣id</th>
            <td>操作</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movies as $movie): ?>
        <tr>
            <td><?php echo $movie->id ?></td>
            <td><?php echo movie_name($movie) ?></td>
            <td><?php echo $movie->topic_id ?></td>
            <td><?php echo $movie->douban_id ?></td>
            <td>
                <a title="编辑" href="<?php echo site_url('admin/movies/edit?id='.$movie->id) ?>"><i class="icon-edit"></i></a>
                |
                <a title="删除" onclick="if(!confirm('确定删除？'))return false;" href="<?php echo site_url('admin/movies/delete?id='.$movie->id) ?>"><i class="icon-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>