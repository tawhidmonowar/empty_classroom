<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function getTime(Request $request)
    {
        $rawData = $request->input();
        $timeArray= explode(" ", $rawData['time']);

        if (!isset($timeArray[1])) {
            $timeArray[1]=date('H:i');
        }

        $temp=':00';
        $start_time = $timeArray[1];
        $start_time.=$temp;
        $end_time = date('h:i:s', strtotime($start_time) + strtotime('01:50:00'));
        $timestamp = strtotime($timeArray[0]);
        $day = date('D', $timestamp);
        $send_day = $day;
        if ($day=='Sat') {
            $send_day = 'Saturday';
        }
        else if ($day=='Sun') {
            $send_day = 'Sunday';
        }
        else if ($day=='Mon') {
            $send_day = 'Monday';
        }
        else if ($day=='Tue') {
            $send_day = 'Tuesday';
        }
        else if ($day=='Wed') {
            $send_day = 'Wednesday';
        }
        else if ($day=='Thu') {
            $send_day = 'Thursday';
        }
        else if ($day=='Fri') {
            $send_day = 'Friday';
        }
       
        $rooms = DB::table('classrooms')
        ->select('classrooms.room_number', 'classrooms.floor_number', 'classrooms.seats')
        ->whereNotIn('classrooms.room_number', function($q) use($day, $start_time, $end_time, $send_day) {
            $q->select('classrooms.room_number')->from('classrooms')->join('routines','classrooms.room_number','=','routines.room_number')
            ->where('day','=',$day)
            ->where('routines.start_time', '>=', $start_time)
            ->where('routines.end_time','<=', $end_time);
        })->get();

        return view('home')->with('rooms',$rooms)->with('day',$send_day)->with('time',$start_time);
    }

    public function home()
    {
        return view('home');
    }
}
