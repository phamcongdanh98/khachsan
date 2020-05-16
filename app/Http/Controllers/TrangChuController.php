<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiPhong;
use App\LoaiBaiViet;
use App\LienHe;
use App\Slide;
use App\Phong;
use Mail;


class TrangChuController extends Controller
{
	public function __construct()
	{
		$loaiphong=LoaiPhong::all();
    	$loaibaiviet=LoaiBaiViet::all();
        $slide=Slide::where('tinhtrang','=','Hiển Thị')->get();
        $phong=Phong::orderBy('id','DESC')->get();
		view()->share('loaiphong',$loaiphong);
        view()->share('loaibaiviet',$loaibaiviet);
        view()->share('slide',$slide);
        view()->share('phong',$phong);
	}

    public function viewTrangChu()
    {
    	return view('nguoidung.pages.trangchu');
    }

    public function viewLienHe()
    {
    	return view('nguoidung.pages.lienhe');
    }
    public function themLienHe(Request $request)
    {



        $lienhe = new LienHe;
        $lienhe->ten=$request->ten;
        $lienhe->sdt=$request->sdt;
        $lienhe->email=$request->email;
        $lienhe->loinhan=$request->loinhan;
        $lienhe->check='0';
        $lienhe->save();

        $to_name = "Khách sạn One Night";
        $to_email = $request->email;
        $noidung= $lienhe->loinhan;
        $ten=$lienhe->ten;
        $data = array("name"=>$ten,"body"=>$noidung);             
        Mail::send('nguoidung.sendmail.send_mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('testmail');
        $message->from($to_email,$to_name);

    });
        return redirect()->route('lienhe')->with('thongbao','Cảm ơn bạn đã liên hệ');
    }

    public function send_mail()
    {
        $to_name = "Danh Pham 1";
        $to_email = "danhkid000@gmail.com";
        
        $data = array("name"=>"noi dung ten","body"=>'Noi dung la'); 
            
        Mail::send('nguoidung.sendmail.send_mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('test mail nhé');
        $message->from($to_email,$to_name);

    });
        return redirect('/');
    }

}