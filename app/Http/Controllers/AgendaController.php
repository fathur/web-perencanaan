<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 29/09/18
 * Time: 17.48
 */

namespace App\Http\Controllers;


use App\Model\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::published()->get();

        dd($agenda[0]->acf->dateTimePicker('date'));
    }
}
