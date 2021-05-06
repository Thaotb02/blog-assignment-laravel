<?php


namespace App\Exports;

use App\Model\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
    //Thêm hàng tiêu đề cho bảng
    // public function headings() :array {
    // 	return ["STT", "Tên tài khoản", "Email", "Loại"];
    // }
}