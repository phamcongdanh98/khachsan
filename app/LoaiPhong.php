<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anhphong;
use App\Phong;

class LoaiPhong extends Model
{
    protected $table='loaiphong';
    protected $fillable = ['tenloai'];

    public function phong()
    {
    	return $this->hasMany('App\Phong','idLoaiPhong','id');
    }

    public static function delloaiphong($id){
        $phong2 = Phong::where('idLoaiPhong',$id);
        foreach($phong2 as $list)
        {
            $anhphong2=AnhPhong::where('idPhong',$list->id)->delete();

        }
        $phong3 = Phong::where('idLoaiPhong',$id)->delete();
    	loaiPhong::find($id)->delete();
    }
}
