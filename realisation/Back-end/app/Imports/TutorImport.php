<?php
namespace App\Imports;
use App\Models\Tutor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tutor([
            'fistname' => $row['fistname'],
            'lastname' => $row['lastname'], 
            'email'    => $row['email'], 
            'imgURL' => $row['imgURL'], 
        ]);
    }
}