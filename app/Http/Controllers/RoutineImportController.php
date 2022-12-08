<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\RoutineImport;
use Illuminate\Support\Facades\DB;
use Excel;

class RoutineImportController extends Controller
{
    public function importRoutine(Request $request)
    {
        Excel::import(new RoutineImport, $request->file('file'));
        $data = 'Successfully Imported Routines.';
        return view('dashboard')->with('imported', $data);
    }

    public function deleteAll(Request $request)
    { 
       DB::table('routines')->truncate();
       $data = 'Successfully Delete All Routines.';
       return view('dashboard')->with('data',$data);
    }

    public function deleteCSE(Request $request)
    {
        $deleted = DB::table('routines')->where('dept', '=', 'cse')->delete();
        $data = 'Successfully Delete CSE Routines.';
        return view('dashboard')->with('data',$data);
    }

    public function deleteEEE(Request $request)
    {
        $deleted = DB::table('routines')->where('dept', '=', 'eee')->delete();
        $data = 'Successfully Delete EEE Routines.';
        return view('dashboard')->with('data',$data);
    }

    public function deleteSE(Request $request)
    {
        $deleted = DB::table('routines')->where('dept', '=', 'se')->delete();
        $data = 'Successfully Delete SE Routines.';
        return view('dashboard')->with('data',$data);
    }

    public function deleteENG(Request $request)
    {
        $deleted = DB::table('routines')->where('dept', '=', 'eng')->delete();
        $data = 'Successfully Delete Eng Routines.';
        return view('dashboard')->with('data',$data);
    }

    public function deleteLAW(Request $request)
    {
        $deleted = DB::table('routines')->where('dept', '=', 'law')->delete();
        $data = 'Successfully Delete LAW Routines.';
        return view('dashboard')->with('data',$data);
    }

}
