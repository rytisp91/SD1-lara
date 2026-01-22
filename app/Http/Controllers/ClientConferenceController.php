<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientConferenceController extends Controller
{
    public function index()
    {
        $conferences = $this->getFakeConferences();
        return view('client.conferences.index', ['conferences' => $conferences]);
    }

    private function getFakeConferences()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Laravel pagrindai',
                'description' => 'Įvadas į Laravel ir projekto struktūrą.',
                'speakers' => 'Jonas Jonaitis',
                'date' => date('Y-m-d', strtotime('+7 days')),
                'time' => '18:00',
                'address' => 'Vilnius, Gedimino pr. 1',
            ],
            2 => [
                'id' => 2,
                'title' => 'Web saugumas',
                'description' => 'Praktiniai patarimai apie saugumą web aplikacijose.',
                'speakers' => 'Ona Onaitė',
                'date' => date('Y-m-d', strtotime('+14 days')),
                'time' => '16:30',
                'address' => 'Kaunas, Laisvės al. 10',
            ],
        ];
    }

    public function show($id)
    {
        $conferences = $this->getFakeConferences();

        if (!isset($conferences[$id])) {
            abort(404);
        }

        return view('client.conferences.show', ['conference' => $conferences[$id]]);
    }

    public function register(Request $request, $id)
    {
        return redirect()
            ->route('client.conferences.show', ['id' => $id])
            ->with('success', __('ui.registration_success'));
    }
}
