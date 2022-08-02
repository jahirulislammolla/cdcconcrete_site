<?php

namespace App\Http\Controllers\Editor\Management;

use App\Http\Controllers\Controller;
use App\Models\CdcClientInfo;
use App\Models\CdcEquipment;
use App\Models\CdcProduct;
use App\Models\CdcProductOrder;
use App\Models\CdcSisterConcern;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as interImage;
use Throwable;

class AllInformationController extends Controller
{
    public function sister_concern_index()
    {
        $all = CdcSisterConcern::paginate(10);
        return view('dashboard.editor.all_information.sister_concern_index',['all'=>$all]);
    }
    public function sister_concern_create(Request $request)
    {
        $sister_concern = CdcSisterConcern::create($request->except(['image']));
        if ($request->hasFile('image')) {

            try {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(150, 150);
                $image->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/sister_concern/image_150x150_' . $temp_name . '.' . $extension;
                $canvas->save($path);
                $sister_concern->image = $path;
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
        }
        $sister_concern->save();
        return redirect()->route("editor_sister_concern_information_index");
    }
    public function sister_concern_update(Request $request)
    {
        // dd($request->all());
        $sister_concern = CdcSisterConcern::where('id',$request->id)->first();
        $sister_concern->fill($request->except(['image','id']));
        if ($request->hasFile('image')) {
            try {
                $file = $request->file('image');
                
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(150, 150);
                $image->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/sister_concern/image_150x150_' . $temp_name . '.' . $extension;
                $canvas->save($path);
                $sister_concern->image = $path;
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
        }
        $sister_concern->save();
        return redirect()->route("editor_sister_concern_information_index");
    }
    public function sister_concern_delete(Request $request)
    {
        $sister_concern = CdcSisterConcern::where('id',$request->id)->first();
        $sister_concern->delete();
        return redirect()->route("editor_sister_concern_information_index");
    }

    public function client_index()
    {
        $all = CdcClientInfo::paginate(10);
        return view('dashboard.editor.all_information.client_index',['all'=>$all]);
    }
    public function client_create(Request $request)
    {
        $client = CdcClientInfo::create($request->except(['image']));
        if ($request->hasFile('image')) {
            try {
                $file = $request->file('image');
                
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(225, 225);
                $image->resize(225, 225, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/client/image_225x225_' . $temp_name . '.' . $extension;
                $canvas->save($path);
                $client->image = $path;
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
        }
        $client->save();
        return redirect()->route("editor_client_information_index");
    }
    public function client_update(Request $request)
    {
        $client = CdcClientInfo::where('id',$request->id)->first();
        $client->fill($request->except(['image']));
        if ($request->hasFile('image')) {

            try {
                $file = $request->file('image');
                
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(225, 225);
                $image->resize(225, 225, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/client/image_225x225_' . $temp_name . '.' . $extension;
                $canvas->save($path);
                $client->image = $path;
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
        }
        $client->save();
        return redirect()->route("editor_client_information_index");
    }
    public function client_delete(Request $request)
    {
        $client = CdcClientInfo::where('id',$request->id)->first();
        $client->delete();
        return redirect()->route("editor_client_information_index");
    }
    public function product_index()
    {
        $all = CdcProduct::paginate(10);
        return view('dashboard.editor.all_information.product_index',['all'=>$all]);
    }
    public function product_create(Request $request)
    {
        $product = CdcProduct::create($request->except(['image']));
        if ($request->hasFile('image')) {
            try {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(500, 400);
                $image->resize(500, 400, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/product/image_500x400_' . $temp_name . '.' . $extension;
                $canvas->save($path);
                $product->image = $path;
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
        }
        $product->save();
        return redirect()->route("editor_product_information_index");
    }
    public function product_update(Request $request)
    {
        $product = CdcProduct::where('id',$request->id)->first();
        $product->fill($request->except(['image']));
        if ($request->hasFile('image')) {
            try {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(500, 400);
                $image->resize(500, 400, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/product/image_500x400_' . $temp_name . '.' . $extension;
                $canvas->save($path);
                $product->image = $path;
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
        }
        $product->save();
        return redirect()->route("editor_product_information_index");
    }
    public function product_delete(Request $request)
    {
        $product = CdcProduct::where('id',$request->id)->first();
        $product->delete();
        return redirect()->route("editor_product_information_index");
    }
    public function equipment_index()
    {
        $all = CdcEquipment::paginate(10);
        return view('dashboard.editor.all_information.equipment_index',['all'=>$all]);
    }
    public function equipment_create(Request $request)
    {
        $equipment = CdcEquipment::create($request->except(['image']));
        
        if ($request->hasFile('image')) {
            try {
                // dd( $equipment );
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(600, 400);
                $image->resize(600, 400, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/equipment/image_600x400_' . $temp_name . '.' . $extension;
                $canvas->save($path);
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
            $equipment->image = $path;
        }
        $equipment->save();
        return redirect()->route("editor_equipment_information_index");
    }
    public function equipment_update(Request $request)
    {
        $equipment = CdcEquipment::where('id',$request->id)->first();
        $equipment->fill($request->except(['image']));
        if ($request->hasFile('image')) {
            try {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $temp_name  = uniqid(10) . time();

                $image = interImage::make($file);

                // book size
                $canvas = interImage::canvas(600, 400);
                $image->resize(600, 400, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $canvas->insert($image, 'center-center');

                $path = 'uploads/equipment/image_600x400_' . $temp_name . '.' . $extension;
                $canvas->save($path);
                $equipment->image = $path;
            } catch (Throwable $e) {
                report($e);
                return response()->json($e->getMessage(), 500);
            }
        }
        $equipment->save();
        return redirect()->route("editor_equipment_information_index");
    }
    public function equipment_delete(Request $request)
    {
        $equipment = CdcEquipment::where('id',$request->id)->first();
        $equipment->delete();
        return redirect()->route("editor_equipment_information_index");
    }
    public function gallery_video_index()
    {
        $all = GalleryVideo::paginate(10);
        return view('dashboard.editor.all_information.gallery_video_index',['all'=>$all]);
    }
    public function gallery_video_create(Request $request)
    {
        $gallery_video = GalleryVideo::create($request->all());
        
        return redirect()->route("editor_gallery_video_information_index");
    }
    public function gallery_video_update(Request $request)
    {
        $gallery_video = GalleryVideo::where('id',$request->id)->first();
        $gallery_video->fill($request->all());
        $gallery_video->save();
        return redirect()->route("editor_gallery_video_information_index");
    }
    public function gallery_video_delete(Request $request)
    {
        $gallery_video = GalleryVideo::where('id',$request->id)->first();
        $gallery_video->delete();
        return redirect()->route("editor_gallery_video_information_index");
    }

    public function product_order_index()
    {
        $all = CdcProductOrder::paginate(10);
        return view('dashboard.editor.all_information.product_order_index',['all'=>$all]);
    }
    public function product_order_create(Request $request)
    {
        $product_order = CdcProductOrder::create($request->all());
        return redirect()->route("editor_product_order_information_index");
    }
    public function product_order_update(Request $request)
    {
        $product_order = CdcProductOrder::where('id',$request->id)->first();
        $product_order->fill($request->all());
        $product_order->save();
        return redirect()->route("editor_product_order_information_index");
    }
    public function product_order_delete(Request $request)
    {
        $product_order = CdcProductOrder::where('id',$request->id)->first();
        $product_order->delete();
        return redirect()->route("editor_product_order_information_index");
    }
}
