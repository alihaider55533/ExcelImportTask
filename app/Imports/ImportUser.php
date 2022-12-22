<?php

namespace App\Imports;

use App\Models\Import;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUser implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Import([
            'name' => $row[0],
            'roll-no' => $row[1],
            'class' => $row[2],
            'department' => $row[3],
            'title' => $row[4],
        ]);
    }
}
