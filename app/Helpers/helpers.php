<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Mcamara\LaravelLocalization\LaravelLocalization;

if (!function_exists('gratavarUrl')) {
    function gravatarUrl($email, $size = 60, $default = 'mm', $rating = 'g')
    {
        return 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($email)))."?s={$size}&d={$default}&r={$rating}";
    }
}
function setActive($path, $active = 'active')
{
    if (is_array($path)) {
        foreach ($path as $k => $v) {
            $path[$k] = getLang().'/'.$v;
        }
    } else {
        $path = getLang().'/'.$path;
    }

    return call_user_func_array('Request::is', (array) $path) ? $active : '';
}

function getLang()
{
    return app()->getLocale();
//    return LaravelLocalization::getCurrentLocale();
}

/**
 * @param null $url
 *
 * @return mixed
 */
function langURL($url = null)
{

    //return LaravelLocalization::getLocalizedURL(getLang(), $url);

    return getLang().$url;
}

/**
 * @param $route
 * @param array $parameters
 *
 * @return mixed
 */
function langRoute($route, $parameters = array())
{
    return URL::route(getLang().'.'.$route, $parameters);
}

/**
 * @param $route
 *
 * @return mixed
 */
function langRedirectRoute($route)
{
    return Redirect::route(getLang().'.'.$route);
}
