<div class="mb10">
    <a class="btn" href="<?php echo site_url('admin/topics/create') ?>">
        <i class="icon-plus-sign"></i>
        新建影集
    </a>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>名称</th>
            <th>价格</th>
            <td>操作</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($topics as $topic): ?>
        <tr>
            <td><?php echo $topic->id ?></td>
            <td><?php echo $topic->name ?></td>
            <td><?php echo $topic->price ?></td>
            <td>
                <a title="编辑" href="<?php echo site_url('admin/topics/edit?id='.$topic->id) ?>"><i class="icon-edit"></i></a>
                |
                <a title="删除" onclick="if(!confirm('确定删除？'))return false;" href="<?php echo site_url('admin/topics/delete?id='.$topic->id) ?>"><i class="icon-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div class="pagination pagination-centered"><?php echo $pagination; ?></div>