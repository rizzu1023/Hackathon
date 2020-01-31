<?php

namespace App\Http\Controllers;

use App\Event;
use App\Schedule;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('Admin.Schedule.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        $teams = Team::all();
        return view('Admin.Schedule.create',compact('teams','events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Schedule::Create([
            'dates' => $request->dates,
            'times' => $request->times,
            'event_id' => $request->event_id,
            'team1_id' => $request->team1_id,
            'team2_id' => $request->team2_id,
            'winner' => $request->winner,
    ]);
        return redirect::route('schedule.index')->with('message', 'Schedule Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect::route('Schedule.index')->with('message','Schedule Deleted');
    }
}
