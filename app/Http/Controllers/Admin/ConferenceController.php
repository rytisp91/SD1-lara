<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = $this->getFakeConferences();
        return view('admin.conferences.index', ['conferences' => $conferences]);
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
                'date' => date('Y-m-d', strtotime('-10 days')),
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

        return view('admin.conferences.show', ['conference' => $conferences[$id]]);
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('ui.saved_success'));
    }

    public function edit($id)
    {
        $conferences = $this->getFakeConferences();

        if (!isset($conferences[$id])) {
            abort(404);
        }

        return view('admin.conferences.edit', ['conference' => $conferences[$id]]);
    }

    public function update(ConferenceRequest $request, $id)
    {
        // DB nenaudojam – tik demo sėkmė
        return redirect()
            ->route('admin.conferences.edit', ['id' => $id])
            ->with('success', __('ui.saved_success'));
    }

    public function destroy($id)
    {
        $conferences = $this->getFakeConferences();

        if (!isset($conferences[$id])) {
            abort(404);
        }

        $conference = $conferences[$id];

        if ($this->isPastConference($conference)) {
            return redirect()
                ->route('admin.conferences.index')
                ->with('error', __('ui.cannot_delete_past_conference'));
        }

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('ui.deleted_success'));
    }

    private function isPastConference(array $conference): bool
    {
        $confDateTime = strtotime($conference['date'] . ' ' . $conference['time']);
        return $confDateTime < time();
    }
}
