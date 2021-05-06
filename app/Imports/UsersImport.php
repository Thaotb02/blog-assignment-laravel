<?php

namespace App\Imports;

use App\Model\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
           'name'=>$row[0],
            'birth_date'=>$row[1],
            'phone_number'=>$row[2],
            'email'=>$row[3],
             'password'=>$row[4],
             'role'=>$row[5],
             'is_active'=>$row[6]
        ]);
    }
}
