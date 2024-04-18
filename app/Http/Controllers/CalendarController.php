<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    public function calendar()
    {
        return view('calendar');
    }

    public function getEvents()
    {
        $schedules=Calendar::all();
        return response()->json($schedules);

    }
    public function deleteEvent($id){
        $calendar=Calendar::findOrFail($id);
        $calendar->delete();

        return response()->json(['message'=>'Event deleted successfully']);


    }
}
