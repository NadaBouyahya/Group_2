<?php
namespace App\Exports;
use App\Models\Tutor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tutor::select("id", "firstname", "lastname", "email", "imgURL")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["id", "fistname", "lastname", "email", "imgURL"];
    }
}



