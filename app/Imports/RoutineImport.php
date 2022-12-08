<?php

namespace App\Imports;

use App\Models\Routine;
use Maatwebsite\Excel\Concerns\ToModel;

class RoutineImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Routine([
            'day'=>$row[0],
            'start_time'=>$row[1],
            'end_time'=>$row[2],
            'room_number'=>$row[3],
            'dept'=>$row[4]
        ]);
    }
}
