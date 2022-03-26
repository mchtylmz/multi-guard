<?php

if (!function_exists('base')) {


    /**
     * @return string
     */
    function base(): string
    {
        return config('app.base_url');
    }
}


if (!function_exists('dashboard')) {

    /**
     * @return string
     */
    function dashboard(): string
    {
        return config('app.admin_subdomain') . '.' . base();
    }
}
