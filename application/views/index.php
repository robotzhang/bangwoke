<div class="row">
    <div class="span6">
        <h2>男人必看10部电影...</h2>
        <ol>
            <li>执着：《阿甘正传》</li>
            <li>才华：《东方不败》</li>
            <li>人生：《美国往事》</li>
            <li>爱情：《罗马假日》</li>
            <li>勇气：《勇敢的心》 </li>
            <li>责任：《辛德勒的名单》</li>
            <li>信念：《肖申克的救赎》</li>
            <li>童心：《Ｅ．Ｔ》</li>
            <li>痛苦：《现代启示录》</li>
            <li>哲思：《第七封印》</li>
        </ol>
    </div>

    <div class="span6">
        <h2>女人必看10部电影...</h2>
        <ol>
            <li>坚强：《乱世佳人》</li>
            <li>沟通：《钢琴课》</li>
            <li>虚荣：《蒂凡尼的早餐》</li>
            <li>尊严：《简爱》</li>
            <li>才华：《白领丽人》(又名《上班女郎》)</li>
            <li>亲情：《母女情深》</li>
            <li>苦难：《紫色》</li>
            <li>女权：《末路狂花》</li>
            <li>浪漫：《漂亮女人》(又名《风月俏佳人》)</li>
            <li>性爱：《女人那话儿》</li>
        </ol>
    </div>
</div>

<div>
    <?php echo $json->title->{'$t'} ?>
</div>

<div>
    <img src="<?php echo $json->link[2]->{'@href'} ?>" />
</div>

<div>
    <?php foreach($json->title as $k => $v): ?>
    <?php echo $k ?> -- <?php echo $v ?>
    <?php endforeach ?>
</div>

<div>
    <?php foreach($json as $key => $value): ?>
    <div><?php echo $key ?> -- <?php var_dump($value) ?></div>
    <?php endforeach ?>
</div>