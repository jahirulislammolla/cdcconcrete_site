<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\AskAnyQuestion;
use App\Models\SubscribeInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
{
    public function index()
    {
        return view('dashboard.editor.index');
    }
    public function all_subscribe_info(){
        $all=SubscribeInfo::paginate(20);
        return view('dashboard.editor.all_subscribe_info',['all'=>$all]);
    }
    public function subscribe_delete(Request $req){
        $data=SubscribeInfo::where('id',$req->id)->first();
        $data->delete();
        return redirect()->route('editor_all_subscribe_info');
    }
    public function all_any_question_info(){
        $all=AskAnyQuestion::paginate(15);
        return view('dashboard.editor.all_any_question_info',['all'=>$all]);
    }
    public function any_question_update(Request $req){
        AskAnyQuestion::where('id',$req->id)->update($req->all());
        return 'success';
    }
    public function any_question_delete(Request $req){
        $data=AskAnyQuestion::where('id',$req->id)->first();
        $data->delete();
        return redirect()->route('editor_all_any_question_info');
    }

}
