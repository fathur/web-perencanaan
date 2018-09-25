<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 05.54
 */

namespace App\Http\Controllers;


use App\Rest\Agenda;
use App\Rest\Media;

class CalendarController extends Controller
{
    protected $agenda;

    public function __construct()
    {
        $this->agenda = new Agenda();
    }


    public function index()
    {
        $agenda = $this->agenda->get();

        $media = [];
        foreach ($agenda as $item) {
            if (isset($item->_links->{'wp:featuredmedia'}) || $item->_links->{'wp:featuredmedia'} != 0) {
                foreach ($item->_links->{'wp:featuredmedia'} as $mediaItem) {
                    $m = new Media();

                    foreach ($m->getByUrl($mediaItem->href) as $id => $value) {
                        $media[$mediaItem->href] = $m->getByUrl($mediaItem->href)[$id];
                    }
                }
            }
        }

        return view('calendar.index', compact('agenda', 'media'));
    }

    public function show($slug)
    {
        $agenda = $this->agenda->getBySlug($slug);
        return view('calendar.show', compact('agenda'));
    }
}
