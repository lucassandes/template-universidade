<?php
//////////////////////////////////////////////////////////
// Button
// example. [btn size='sm' type='info' link='http://devdm.com' icon="glyphicon-heart"] Go To the DevDm.com Website [/btn]
//////////////////////////////////////////////////////////
if (!function_exists('btn_func')) {

    function btn_func($atts, $content = NULL) {
        extract( shortcode_atts( array(
            'size' => '',
            'type' => '',
            'link' => '#',
            'icon' => ''
        ), $atts));
        if ($size != '') {
            $size = ' btn-' . $size;
        } else {
            $size = ' btn-default';
        }
        if ($icon != '') {
            $icon = '<span class="glyphicon '. $icon .'"></span>';
        }
        if ($type != '') {
            $type = ' btn-' . $type;
        } else {
            $type = 'btn-default';
        }
        $btn = "<a href='". $link ."' class='btn" . $size . "" . $type. "'>" . $icon . $content . "</a>";
        return $btn;
    }
    add_shortcode('btn', 'btn_func');
}


if (!function_exists('col_func')) {

    function col_func($atts, $content = NULL) {
        extract( shortcode_atts( array(
            'size' => '',
            'tam' => '',
        ), $atts));
        if ($tam != '') {
            $device = $tam;
        } else {
            $size = 'md';
        }

        if ($size != '') {
            $size = $size;
        } else {
            $size = 'md';
        }


        //$btn = "<a href='". $link ."' class='btn" . $size . "" . $type. "'>" . $icon . $content . "</a>";
        $col = '<div class="col-'.$size.'-'.$tam.'">'. do_shortcode( $content ).'</div>';
        return $col;
    }
    add_shortcode('col', 'col_func');
}


if (!function_exists('clear_func')) {

    function clear_func() {

        //$btn = "<a href='". $link ."' class='btn" . $size . "" . $type. "'>" . $icon . $content . "</a>";
        $clear = '<div class="clear"></div>';
        return $clear;
    }
    add_shortcode('clear', 'clear_func');
}
//////////////////////////////////////////////////////////
// Alert Box
// example. [alert type='info' dismiss='yes' size='3' title='Alert Block Title'] Go To the DevDm.com Website [/alert]
//////////////////////////////////////////////////////////
if (!function_exists('alert_func')) {
    function alert_func($atts, $content = NULL) {
        extract( shortcode_atts( array(
            'type' => '',
            'dismiss' => '',
            'size' => '',
            'title' => ''
        ), $atts));

        if ($dismiss == 'yes') {
            $dismiss = "data-dismiss='alert'";
            $dismisslink ="<a class='close'>&times;</a>";
        } else {
            $dismiss = '';
            $dismisslink = '';
        }

        if ($title != '') {
            $title = "<h4 class='alert-heading'>".$title."</h4>";
            $block = " alert-block ";
        } else {
            $title = "";
            $block = "";
        }

        if ($type != '') {
            $type = " alert-" . $type ." ";
        }

        if ($size != '') {
            $size = " col-md-" . $size;
        }


        $alert = "<div class='alert". $block ."". $type ."". $size ."'". $dismiss .">";
        $alert .= $dismisslink . $title;
        $alert .= "<p>". $content . "</p>";
        $alert .= "</div>";
        return $alert;
    }

    add_shortcode('alert', 'alert_func');
}
add_filter('widget_text', 'do_shortcode');