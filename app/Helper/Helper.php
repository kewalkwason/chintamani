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

function send_otp($mobile, $message, $dlt_template_id)
{
    $dlt_entity_id = '1101597950000040722';
    $messages = urlencode($message);

    $mobile_no = $mobile;
    $url = '';

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $headers = array(
        "X-Custom-Header: header-value",
        "Content-Type: application/json"
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_HEADER, true);
    $response = curl_exec($curl);
    return $response;
}
