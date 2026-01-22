<?php

namespace App\Http\Controllers;

class EmployeeConferenceController extends Controller
{
    public function index()
    {
        $conferences = $this->getFakeConferences();
        return view('employee.conferences.index', ['conferences' => $conferences]);
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
                'registrations' => [
                    ['name' => 'Mantas', 'email' => 'mantas@example.com'],
                    ['name' => 'Ieva', 'email' => 'ieva@example.com'],
                ],
            ],
            2 => [
                'id' => 2,
                'title' => 'Web saugumas',
                'description' => 'Praktiniai patarimai apie saugumą web aplikacijose.',
                'speakers' => 'Ona Onaitė',
                'date' => date('Y-m-d', strtotime('+14 days')),
                'time' => '16:30',
                'address' => 'Kaunas, Laisvės al. 10',
                'registrations' => [
                    ['name' => 'Rūta', 'email' => 'ruta@example.com'],
                ],
            ],
        ];
    }

    public function show($id)
    {
        $conferences = $this->getFakeConferences();

        if (!isset($conferences[$id])) {
            abort(404);
        }

        return view('employee.conferences.show', ['conference' => $conferences[$id]]);
    }
}

