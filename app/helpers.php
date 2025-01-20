<?php

function background()
{
    $key = 'page_background';
    $url = \Illuminate\Support\Facades\Cache::get($key);
    if($url){
        return $url;
    }
    $static_info = \App\Models\StaticInfo::first();
    if($static_info){
        $url = $static_info->background->url();
        \Illuminate\Support\Facades\Cache::put($key, $url, 60);
        return $url;
    }
    return '';
}

function logo()
{
    $key = 'page_logo';
    $url = \Illuminate\Support\Facades\Cache::get($key);
    if($url){
        return $url;
    }
    $static_info = \App\Models\StaticInfo::first();
    if($static_info){
        $url = $static_info->logo->url();
        \Illuminate\Support\Facades\Cache::put($key, $url, 60);
        return $url;
    }
    return '';
}
