<?php

namespace App\Exports;

use App\Models\User;
use App\Exports\Users;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class UsersExport implements FromCollection,WithHeadings, WithTitle
{
    use Exportable;
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return User::all();
    }

    public function headings():array
    {
        return [
            '#',
            'name',
            'email',
            'email_verified_at',
            'created_at',
            'update_at'
        ];
    }

    public function title(): string{

        return 'test';
    }
}
