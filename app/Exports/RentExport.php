<?php

namespace App\Exports;

use App\Models\Rent;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Auth;

class RentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $id_user = Auth::user()->id;
        $role_user = Auth::user()->role;
        if ($role_user == 'admin'){
            return Rent::with('driver', 'car', 'approver')->get()->map(function ($rent) {
                return [
                    'id' => $rent->id,
                    'car_model' => $rent->car->model,
                    'driver_name' => $rent->driver->name, // Mengambil nama user dari relasi
                    'approver_name' => $rent->approver->name,
                    'usage_date' => $rent->usage_date,
                    'status' => $rent->approved,
                    // Sisipkan kolom-kolom lain yang ingin Anda ekspor
                ];
            });
        } else {
            return Rent::with('driver', 'car', 'approver')->where('boss_id', $id_user)->get()->map(function ($rent) {
                return [
                    'id' => $rent->id,
                    'car_model' => $rent->car->model,
                    'driver_name' => $rent->driver->name, // Mengambil nama user dari relasi
                    'approver_name' => $rent->approver->name,
                    'usage_date' => $rent->usage_date,
                    'status' => $rent->approved,
                    // Sisipkan kolom-kolom lain yang ingin Anda ekspor
                ];
            });
        }
        


    }

    public function headings(): array
    {
        return [
            'ID',
            'Car Model',
            'Driver Name',
            'Approver Name',
            'Usage Date',
            'Status',
        ];
    }
}
