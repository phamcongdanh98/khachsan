<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatPhong extends Model
{
    protected $table="datphong";
    protected $fillable = [
        'ngaynhanphong',
        'ngaytraphong',
        'soluongphong',
        'check',
        'idPhong'.
        'idKhachHang'
    ];

    public function phong()
    {
    	return $this->belongsTo('App\Phong','idPhong','id');
    }
    public function khachang()
    {
    	return $this->belongsTo('App\KhachHang','idKhachHang','id');
    }
}
