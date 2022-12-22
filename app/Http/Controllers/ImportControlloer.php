<?php

namespace App\Http\Controllers;

use App\Models\Import;
use App\Models\File;
use Illuminate\Http\Request;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;


class ImportControlloer extends Controller
{
    protected $file;
    protected $import;
    public function __construct(File $file, Import $import)
    {
        $this->file = $file;
        $this->import = $import;
    }

    public function importView(Request $request)
    {
        return view('welcome');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xlx,xls|max:2048'
        ]);
        Excel::import(new ImportUser, $request->file('file')->store('files'));
        $file = new File;
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $file->name = time().'_'.$request->file->getClientOriginalName();
            $file->file_path = '/storage/' . $filePath;
            $file->save();
            $files = File::get();
            return view('welcome', compact('files'));
        }
    }

    public function exportUsers(Request $request){
        return Excel::download(new ExportUser, 'users.xlsx');
    }
    public function viewDetail($id){
        $detail = Import::where('file_id',$id)->get();
    }
}
