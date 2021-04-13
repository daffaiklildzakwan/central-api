<?php

use App\Helpers\coreui\CoreUIFacades;

if (!function_exists('cui')) {
    function cui()
    {
        return app()->get('cui');
    }
}


if (!function_exists('notify')) {
    function notify($type, $message, $title = null)
    {
        toastr($message, $type);
    }
}

if (!function_exists('cui_breadcrumb')) {
    function cui_breadcrumb($levels = [])
    {
        return cui()->breadcrumb($levels);
    }
}

if (!function_exists('cui_toolbar_btn')) {
    function cui_toolbar_btn($url, $icon, $text = '')
    {
        return cui()->toolbar_btn($url, $icon, $text);
    }
}

if (!function_exists('cui_toolbar_delete')) {
    function cui_toolbar_delete($url, $id, $icon, $text, $message = null)
    {
        return cui()->toolbar_delete($url, $id, $icon, $text, $message);
    }
}

