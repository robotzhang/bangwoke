<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="40">id</th>
            <th>用户</th>
            <th width="300">订单</th>
            <th>金额(￥)</th>
            <th>状态</th>
            <th>创建时间</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>
        <tr>
            <td><?php echo $order->id ?></td>
            <td><?php echo $order->user_id ?></td>
            <td><?php echo $order->subject ?></td>
            <td><?php echo $order->total ?></td>
            <td><?php
                switch($order->status) {
                    case 0: echo '新订单'; break;
                    case 1: echo '已支付'; break;
                    case 2: echo '已发货'; break;
                    case 3: echo '已完成'; break;
                }
                ?></td>
            <td><?php echo $order->created_at ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div class="pagination pagination-centered"><?php echo $pagination; ?></div>