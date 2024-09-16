<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\surat_keterangan_usaha;

class SuratUsahaExport implements FromCollection, WithHeadings, WithMapping
{
    protected $month;

    public function __construct($month)
    {
        $this->month = $month;
    }

    public function collection()
    {
        return surat_keterangan_usaha::whereYear('created_at', '=', substr($this->month, 0, 4))
            ->whereMonth('created_at', '=', substr($this->month, 5, 2))
            ->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'ID Number',
            'Jenis Kelamin',
            'Religion',
            'Nama Ibu Kandung',
            'Nomor HP',
            'Domisili',
            'Selama',
            'Tujuan Surat',
            'Letter Number',
            'Kode Surat',
            'Nomor Surat',
            'Jabatan',
        ];
    }

    public function map($row): array
    {
        return [
            $row->name,
            (string) $row->id_number, 
            $row->jenis_kelamin,
            $row->religion,
            $row->nama_ibu_kandung,
            $row->nomor_hp,
            $row->domisili,
            $row->selama,
            $row->tujuan_surat,
            $row->letter_number,
            $row->kode_surat,
            $row->nomor_surat,
            $row->jabatan,
        ];
    }
}
