<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Contact::select('name', 'email', 'phone_number', 'company_name', 'location', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone',
            'Company',
            'Location',
            'Submitted At',
        ];
    }
}
