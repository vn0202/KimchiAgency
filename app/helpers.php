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

function nameSite()
{
    $key = 'page_name_site';
    $name = \Illuminate\Support\Facades\Cache::get($key);
    if($name){
        return $name;
    }
    $static_info = \App\Models\StaticInfo::first();
    if($static_info){
        $name = $static_info->name;
        \Illuminate\Support\Facades\Cache::put($key, $name, 60);
        return $name;
    }}
