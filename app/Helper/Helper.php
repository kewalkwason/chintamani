<?php
/* @This helper is used for Common functions*/

use Illuminate\Container\Container;
use App\Models\Remark;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


if (!function_exists('pr')) {
    function pr($request)
    {
        echo '<pre>';
        print_r($request);
        die;
    }
}

if (!function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param  string|null  $abstract
     * @param  array  $parameters
     * @return mixed|\Illuminate\Contracts\Foundation\Application
     */
    function app($abstract = null, array $parameters = [])
    {
        if (is_null($abstract)) {
            return Container::getInstance();
        }

        return Container::getInstance()->make($abstract, $parameters);
    }
}

if (!function_exists('base_path')) {
    /**
     * Get the path to the base of the install.
     *
     * @param  string  $path
     * @return string
     */
    function base_path($path = '')
    {
        return app()->basePath($path);
    }
}

function getRemarks($order_id)
{
    $result = Remark::where('order_id', $order_id)->where('type', '!=', '1')->where('type', '!=', '2')->first();
    return $result ?? '';
}
