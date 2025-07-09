<?php

namespace App\Exports;

use App\Models\GetInTouch;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GetInTouchExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return GetInTouch::select('name', 'phone_number', 'email', 'company_name', 'looking_for', 'location')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Phone Number',
            'Email',
            'Company Name',
            'Looking For',
            'Location',
        ];
    }
}
