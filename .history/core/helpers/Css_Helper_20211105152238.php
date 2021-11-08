<?php

    function load_css($str = '')
    {
        $css_path = "public/css/{$str}.css";
        return $css_path;
    }

    function load_fonts($name = '', $str = '')
    {
        $font_path = "public/fonts/{$str}.css";
        return $font_path;
    }

    function load_images($name = '', $str = '')
    {
        $images_path = "public/images/$name/$str";
        return $images_path;
    }

    function load_js($str = '')
    {
        $js_path = "public/css/{$str}.js";
        return $js_path;
    }