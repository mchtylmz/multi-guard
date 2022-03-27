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

if (!function_exists('current_base')) {
    /**
     * @return string
     */
    function current_base(): string
    {
        if (request()->admin()) {
            return dashboard();
        }
        return base();
    }
}
