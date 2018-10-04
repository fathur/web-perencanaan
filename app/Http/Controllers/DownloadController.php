<?php


namespace App\Http\Controllers;


class DownloadController
{
    public function force($identifier)
    {
        return response()->download($identifier);
    }
}
