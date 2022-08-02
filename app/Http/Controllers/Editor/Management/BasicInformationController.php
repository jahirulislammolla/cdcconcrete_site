<?php

namespace App\Http\Controllers\Editor\Management;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class BasicInformationController extends Controller
{
    public function index()
    {
        return view('dashboard.editor.basic_information.index');
    }
    public function update(Request $request)
    {
            foreach($request->all() as $key => $item)
            {
                $info=WebsiteInfo::where('type_name',$key)->first();
                if($info)
                {
                    $info->value=$item;
                    $info->save();
                }
                
            }
             
        return redirect()->route("editor_basic_information_index");
    }
}
