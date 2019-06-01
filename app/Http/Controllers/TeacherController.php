<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Lecture_Research;
use App\Lecture_qt;
use App\Department_User;
use App\User;
use App\Reseach_Field;
use App\User_Research;
use App\User_Lecture;
use DB;


class TeacherController extends Controller
{
    public function getUpdateInfo(){
        $id = Auth::User()->id;
        $user = User::where('id', $id)->first();

        //get reseach by user
        $research = User_Research::where('id_user', $id)->get(); 

        //get reseach 
        //get lecture_qt by user
        $lecture = User_Lecture::where('id_user', $id)->get();

        //get lecture 
        $lectureadd = DB::table('lecture_qt')
            ->join('research_field','research_field.id','=','lecture_qt.id_research_field')
            ->select('research_field.*')
            ->get();

        $res = Lecture_Research::all();
        //get all research
        $research_field = Reseach_Field::all();
    	return view('teacher.updateinfo', compact('user', 'research', 'lecture', 'research_field', 'lectureadd', 'res'));
    }

    // login
    public function getLoginTeacher(){
    	return view('teacher.login');
    }

    public function postLogin(Request $request){    
           $this->validate($request,
            [
                'username'=>'required|min:4',
                'password'=>'required|min:6',
                
            ],
            [
                'username.required'=>'Vui lòng nhập Tài Khoản!',
                'username.min'=>'Tài Khoản phải có ít nhất 4 ký tự',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
            ]
        );
        
        $user = array('username'=>$request->username, 'password'=>$request->password, 'role'=>$request->role);
        if(Auth::attempt($user)){
            return redirect('/search-teacher');
        }

        else{
            return redirect('/teacher/login')->with('message','Đăng Nhập thất bại');
        }
        
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/teacher/login');
    }

    //ajax add lecture_qt
    public function addLecture_qt(Request $req) {
        $result = false;
        $id = Auth::User()->id;
        foreach($req->allVals as $allVals){
            $lecture = User_Lecture::where('id_lecture_qt', $allVals)
                                    ->where('id_user', $id)->first();
            if($lecture != null){
                $result = true;
            }

            else
            {
            $lecture_qt = new User_Lecture;
            $lecture_qt->id_user = $id;
            $lecture_qt->id_lecture_qt = $allVals;
            $lecture_qt->save();
            }
        }
        return response()->json($result);
    }

    //ajax add lecture_research
    public function addRes(Request $req) {
        $id = Auth::User()->id;
        $lecture = User_Research::where('id_lecture_research', $req->id_lecture_research)
                                ->where('id_user', $id)->first();
        if($lecture != null){
            return redirect()->back()->with('success', 'Thành Công');
        }

        else
        {
        $lecture_qt = new User_Research;
        $lecture_qt->id_user = $id;
        $lecture_qt->id_lecture_research = $req->id_lecture_research;
        $lecture_qt->save();
        }
        return redirect()->back()->with('message', 'Thành Công');
    }

    //delete lecture_qt
    public function deleteLecture_qt($id){
        $lecture = User_Lecture::where('id_lecture_qt', $id)->first();
        $lecture->delete();
        return redirect()->back()->with('message', 'Đã Xóa');
    }

    //delete lecture_res
    public function deleteLecture_res($id){
        $lecture = User_Research::where('id_lecture_research', $id)->first();
        $lecture->delete();
        return redirect()->back()->with('success', 'Đã Xóa');
    }

    //updateinfo
    public function getUpdate($id){
        $user = User::where('id', $id)->first();
        return view('teacher.update', compact('user'));
    }

    public function postUpdateInfo($id , Request $req){
        $user = User::where('id', $id)->first();
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->hocvi = $req->hocvi;
        if($req->hasFile('avatar')){
            $file = $req->File('avatar');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi == 'jpg' || $duoi == 'png'){
                $savefile = str_random(4)."_".$name;
            while(file_exists("source/img/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/img/", $savefile);
            $user->avatar = $savefile;  
            }

            else{

                return redirect()->back()->with('loi', 'file không đúng định dạng');
            }
    
        }
        else{
            $user->avatar = $user->avatar;
        }  
        $user->save();
        return redirect()->back()->with('message', 'Cập nhật Thành Công');
    }

    
}
