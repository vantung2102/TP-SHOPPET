<?php

    function load_css($str = '')
    {
        $css_path = "public/css/{$str}.css";
        return $css_path;
    }

    function load_images($str = '')
    {
        $images_path = "public/images/$str";
        return $images_path;
    }

    function load_js($str = '')
    {
        $js_path = "public/css/{$str}.js";
        return $js_path;
    }