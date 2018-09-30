<?php


if (!function_exists('two_digit')) {
    /**
     * Throw an HttpException with the given data.
     *
     * @param int $num
     * @return string
     */
    function two_digit(int $num)
    {

        if (strlen($num) > 2) {
            return substr($num, -2);
        }

        return sprintf("%02d", $num);

    }
}

if (!function_exists('fa_file')) {
    /**
     * Throw an HttpException with the given data.
     *
     * @param $object
     * @return array
     */
    function fa_file($object)
    {
        if (is_null($object))
            return ['fa-file', 'file'];

        switch ($object->mime_type) {
            case 'application/pdf':
                return ['fa-file-pdf', 'pdf'];
                break;
            case 'video/mp4':
                return ['fa-file-video', 'video'];
                break;
            default:
                return ['fa-file', 'file'];

        }
    }
}
