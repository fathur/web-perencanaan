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
