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
        $agendas = Agenda::published()
            ->paginate(10);

        return view('agenda.index', compact('agendas'));

    }

    public function show($slug)
    {
        return view('agenda.show');
    }
}
