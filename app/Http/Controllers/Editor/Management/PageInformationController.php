<?php

namespace App\Http\Controllers\Editor\Management;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as interImage;
use Throwable;
class PageInformationController extends Controller
{
    public function index()
    {
        return view('dashboard.editor.page_information.index');
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
        return redirect()->route("editor_page_information_index");
    }
    public function image_index()
    {
        return view('dashboard.editor.page_information.image_index');
    }
    public function image_update(Request $request)
    {
        $name_file=['home_image','quality_control_image','concrete_block_image','rmc_product_image','company_image'];
        foreach($name_file as $key)
        {
            if(isset($key))
            {
                $info=WebsiteInfo::where('type_name',$key)->first();
                if ($request->hasFile($key)) {
                    try {
                        $file = $request->file($key);
                        $extension = $file->getClientOriginalExtension();
                        $temp_name  = uniqid(10) . time();
        
                        $image = interImage::make($file);
                        if($key=='home_image' || $key=='quality_control_image'){
                            $canvas = interImage::canvas(1920, 720);
                            $image->resize(1920, 720, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                            $canvas->insert($image, 'center-center');
        
                            $path = 'uploads/website_image/image_1920x720_' . $temp_name . '.' . $extension;
                        }
                        if($key=='concrete_block_image' || $key=='rmc_product_image'){
                            $canvas = interImage::canvas(600, 415);
                            $image->resize(600, 415, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                            $canvas->insert($image, 'center-center');
        
                            $path = 'uploads/website_image/image_600x415_' . $temp_name . '.' . $extension;
                        }
                        if($key=='company_image'){
                            $canvas = interImage::canvas(1024, 768);
                            $image->resize(1024, 768, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                            $canvas->insert($image, 'center-center');
        
                            $path = 'uploads/website_image/image_1024x768_' . $temp_name . '.' . $extension;
                        }
                        $canvas->save($path);
                        $info->value = $path;
                    } catch (Throwable $e) {
                        report($e);
                        return response()->json($e->getMessage(), 500);
                    }
                }
                $info->save();
            }
        }
        return redirect()->route("editor_page_image_index");
    }
}
