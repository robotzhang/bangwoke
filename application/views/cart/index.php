<?php $this->layout->setLayout(array('title' => ' 帮我客 -- 我的购物车')); ?>
<style type="text/css">
    .cart { color: #666; }
    .cart .steps { margin-bottom: 10px; }
    .cart .steps li { float: left; height: 25px; line-height: 25px; font-weight: 700; text-align: center; width: 162px; background-color: #F1F1F1; color: #999; }
    .cart .steps li b { width: 22px; height: 25px; display: block; float: right; background: url(<?php echo base_url('static/images/cart/progress_bg.png') ?>) no-repeat; }
    .cart .steps li b.step_1 { background-position: 0 -25px; }
    .cart .steps li b.step_2 {  }
    .cart .steps .current { color: #F60; background-color: #FFE6BC; }

    .cart .table { border: #DDDDDD 1px solid; border-radius: 5px; border-collapse: separate; }
    .cart .table th{ line-height: 25px; text-align: center; background-color: #F3F3F3; color: #666666; font-weight: normal; border-right: #fff 1px solid; }
    .cart .table th:last-child { border-right: none; }
    .cart .table td { text-align: center; line-height: 35px; }
    .cart .table tr:hover td { background: none; }
    .cart div.total { text-align: right; padding: 5px 10px; }
    .cart span.total { color: #C00; font-size: 20px; font-weight: 400; font-family: Verdana,Arial; }
    .cart .actions {  }
</style>
<div class="cart">
    <div class="steps clearfix">
        <ul class="unstyled clearfix">
            <li class="current"><b class="step_1"></b>1.我的购物车</li>
            <li><b class="step_2"></b>2.填写核对订单信息</li>
            <li>3.成功提交订单</li>
        </ul>
    </div>

    <table class="table">
        <thead>
            <tr>
                <!--th>全选</th-->
                <th>商品</th>
                <th width="100">帮我价</th>
                <th width="100">库存</th>
                <th width="100">数量</th>
                <th width="100">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->cart->contents() as $items): ?>
            <tr>
                <!--td width="50"><input type="checkbox" /></td-->
                <td style="text-align: left; padding-left: 20px;"><a target="_blank" href="<?php echo $items['url'] ?>"><?php echo $items['name']; ?></a></td>
                <td style="color: #333;">￥<?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="color: #999;">现货</td>
                <td><?php echo $items['qty']; ?></td>
                <td><a href="<?php echo site_url('/cart/remove?rowid='.$items['rowid']) ?>">删除</a></td>
            </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="5" style="background-color: #F3F3F3;">
                    <div class="total">
                        <span>
                            共 <span style="color: #FF6600;"><?php echo $this->cart->total_items(); ?></span> 件商品
                        </span>
                        总计
                        <span class="total">￥<?php echo $this->cart->format_number($this->cart->total()) ?></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="actions">
        <a class="btn btn-large primary" href="<?php echo site_url() ?>">继续购物</a>
        <a class="btn btn-large btn-danger pull-right" href="<?php echo site_url('cart/todo') ?>"><b>去结算</b></a>
    </div>
</div>