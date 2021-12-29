<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\LazyCollection;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UploadCsvStudent extends Component
{
    use WithFileUploads;

    public $upload;

    public $description;
    public $contents;
    public $path;
    public $data;public $file;
    public $row; public $import;

    public $saveSuccess = false;

    public $rules = [
        'upload' => 'required|mimes:csv,txt|max:1024'
        // 'description' => 'required'
    ];

    public function save()
    {
        $this->validate();

        // store the csv under the local filesytem, defined in config/filesystems.php ( /storage/app folder)
        // storeAs (path, filename, disk)
        $this->upload->storeAs('','dataset.csv', 'local');
        $this->saveSuccess = true;

        // get path
        $path = Storage::path('dataset.csv');

        Excel::import(new UsersImport, 'dataset.csv');

        // $this->contents = Storage::get('dataset.csv');
        // $this->contents = $path;

        // read csv

        // $row = 0;
        // $import = fopen($path, 'r');
        // while ($data = fgetcsv($import)) {
        //     $row++;
        //     //skip header row
        //     if ($row == 1) {
        //         continue;
        //     }
        //     $importData_arr[$i][] = $data [$c];
        // }

        // using LazyCollection

        // LazyCollection::make(function () use ($path) {
        //     $file = fopen($path, 'r');
        //     while ($data = fgetcsv($file)) {
        //         yield $data;
        //     }
        // })->skip(1)->each(function ($data) {
        //     $this->contents = $data[0];
        // });

    }

    public function render()
    {
        return view('livewire.upload-csv-student');
    }
}
