<?php 

if(! function_exists('url_slash_handle')){
    function url_slash_handle(string &$url) { // local
        if(! str_starts_with($url,'/')){
            $url = '/' . $url;
        }
        return $url;
    }
}

if(! function_exists('path_slash_handle')){
    function path_slash_handle(string &$path) { // local
        if(! str_starts_with($path,ds())){
            $url = str_replace('/',ds(),ds() . $path);
        }
        return $url;
    }
}

if(! function_exists('ds')){
    function ds() :string{
        return DIRECTORY_SEPARATOR;
    }
}

if(! function_exists('base_path')){
    function base_path($path = null) :string{
        return __DIR__ . ds() . '..' . ds() . '..' . path_slash_handle($path);
    }
}

if(! function_exists('public_path')){
    function public_path($path = null) :string{
        return __DIR__ . ds() . '..' . ds() . '..' . ds() . 'Public' . path_slash_handle($path);
    }
}

if(! function_exists('resource_path')){
    function resource_path($path = null) :string{
        return __DIR__ . ds() . '..' . ds() . '..' . ds() . 'Resources' . path_slash_handle($path);
    }
}

