<?php

namespace App\Http\Controllers;

use App\Rest\Media;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function extractMedia($obj)
    {
        $media = new Media();
        if (isset($obj->featured_media)) {
            return $obj->featured_media == 0 ? null : $media->find($obj->featured_media);
        }

        return null;
    }
}
