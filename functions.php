<?php
    //excerpt截取一定长度的中文,长度上限需要去wp-includes内formatting.php内修改
    function chinese_excerpt($text, $lenth=40) {
    $text = mb_substr($text,0, $lenth);
     return $text;
    }
    add_filter('get_the_excerpt', 'chinese_excerpt');
    //修改excerpt后的[...]
    function new_excerpt_more($excerpt) {
    return "";
    }
    add_filter("excerpt_more", "new_excerpt_more");