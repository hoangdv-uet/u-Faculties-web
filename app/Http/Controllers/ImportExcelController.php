<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    public function importexcel(Request $request) 
    {
		$this->validate($request, [
		  'select_file'  => 'required|mimes:xls,xlsx'
		], 
		[ 'select_file.mimes' => 'Vui Lòng Chọn đúng định dạng của file >.<']);

		$users = Excel::import(new UsersImport(), $request->file('select_file'));
	
      return back()->with('success', 'Nhập Dữ liệu từ excel thành công mỹ mãn :)');
    }
}
	