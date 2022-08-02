<?php

namespace Database\Seeders;
use Carbon\Carbon;
use App\Models\WebsiteInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class WebsiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteInfo::truncate();
        $info_data= [
            "Office Address"=>['office_address','29/1 Goranchatbari, Beribadh, Adjacent Eastern Housing, 1216 Mirpur, Dhaka Division, Bangladesh.'],
            "Office Time"=>['office_time','9am to 5pm'],
            "Mobile Number"=>['mobile_number','01401139944'],
            "WhatsApp Number"=>['whatsapp_number','01712806206'],
            "Telegram Number"=>['telegram_number','01712806206'],
            "Phone Number"=>['phone_number','222222'],
            "Email Address"=>['email_address','cdcconcrete@gmail.com'],
            "Facebook Page link"=>['fb_page_link','https://www.facebook.com/cdcconcret/'],
            "Facebook Messanger link"=>['fb_messanger_link','https://www.facebook.com/messages/t/101729295552575/'],
            "Twitter Account"=>['twitter_account',''],
            "Youtube Account"=>['youtube_account', ''],
            "Instagram Account"=>['instagram_account', ''],
            "Linkedin Account"=>['linkedin_account', ''],
            "Pinterest Account"=>['pinterest_account',''],
            "CDC Concrete Moto" => ['cdc_moto','Aim to build a durable world, একটি টেকসই পৃথিবী গড়ার লক্ষ্য'],
            "About us" => ['about_us',''],
            "Mission" => ['mission',''],
            "Vision" => ['vision',''],
            "Quality Control" => ['quality_control',''],
            "Lab Facility" => ['lab_facility',''],
            "Buet Test" => ['buet_test',''],
            "Seo Title" => ['seo_title',''],
            "Seo Keywords" => ['seo_keywords',''],
            "Seo Description" => ['seo_description',''],
                   ];
        foreach ($info_data as $x => $val) {
                $info = new WebsiteInfo();
                $info->title = $x;
                $info->type_name = $val[0];
                $info->value = $val[1];
                $info->creator = 1;
                $info->created_at = Carbon::now()->toDateTimeString();
                $info->status=1;
                $info->save();
            
        }
    }
}
