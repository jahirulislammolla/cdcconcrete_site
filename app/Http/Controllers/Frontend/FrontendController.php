<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AskAnyQuestion;
use App\Models\CdcClientInfo;
use App\Models\CdcEquipment;
use App\Models\CdcProduct;
use App\Models\CdcProductOrder;
use App\Models\CdcSisterConcern;
use App\Models\GalleryVideo;
use App\Models\SeminarInfo;
use App\Models\SeminarRegistrationInfo;
use App\Models\SubscribeInfo;
use App\Models\WebsiteBlogCategoryInfo;
use App\Models\WebsiteBlogCommentsInfo;
use App\Models\WebsiteBlogInfo;
use App\Models\WebsiteContactAnyQuestion;
use App\Models\WebsiteCourseAdmissionInfo;
use App\Models\WebsiteCourseComment;
use App\Models\WebsiteCourseInfo;
use App\Models\WebsiteCourseNextBatchRegisterInfo;
use App\Models\WebsiteInfo;
use App\Models\WebsiteInstructor;
use App\Models\WebsiteSpecialityInformation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class FrontendController extends Controller
{
    public function login(Request $req){
        return view('auth.login');
    }

    public function register(Request $req){
        return view('auth.login');
    }
    public function reset(Request $req){
        
        return view('auth.passwords.reset');
    }
    public function email(Request $req){

        return view('auth.passwords.email');
    }
    public function postSubscribe(Request $req)
    {
        $check = SubscribeInfo::insert([
            'email' => $req['email'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        return $check;
    }
    public function index()
    {
        $client = CdcClientInfo::all();
        $sister_concern = CdcSisterConcern::all();
        return view('fontend.home',['client'=>$client,"sister_concern"=>$sister_concern]);
    }
    public function rmc_product()
    {
        $product_order = CdcProductOrder::all();
        return view('fontend.rmc_product',['product_order'=>$product_order]);
    }
    public function concrete_block()
    {
        $product = CdcProduct::all();
        $product_order = CdcProductOrder::all();
        return view('fontend.concrete_block',['product'=>$product,'product_order'=>$product_order]);
    }
    public function quality_control()
    {
        return view('fontend.quality_control');
    }
    public function contact_us()
    {
        return view('fontend.contact');
    }
    public function plants_equipments()
    {
        $equipment = CdcEquipment::paginate(12);
        return view('fontend.plants_equipments',['equipment'=>$equipment]);
    }
    public function gallery()
    {
        $gallery_video = GalleryVideo::paginate(9);
        return view('fontend.gallery',['gallery_video'=>$gallery_video]);
    }
    public function any_question(Request $req)
    {
        $check = AskAnyQuestion::insert([
            'name' => $req['name'],
            'phone' => $req['phone'],
            'email' => $req['email'],
            'question' => $req['question'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        return $check;
    }
    public function subscribe_email(Request $req)
    {
        $check = SubscribeInfo::insert([
            'subscribe_email' => $req['subscribe_email'],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        return $check;
    }
}
