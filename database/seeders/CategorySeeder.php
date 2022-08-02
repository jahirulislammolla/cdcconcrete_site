<?php

namespace Database\Seeders;
use Carbon\Carbon;
use App\Models\WebsiteCourseCategory;
use Illuminate\Database\Seeder;

class WebsiteCourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteCourseCategory::truncate();
        $info_data= [
            "গ্রাফিক ডিজাইন"=>['গ্রাফিক ডিজাইন',1],
            "ওয়েব ডিজাইন & ডেভেলপম্যান্ট"=>['ওয়েব ডিজাইন & ডেভেলপম্যান্ট',"1"],
            "ডিজিটাল মার্কেটিং"=>['ডিজিটাল মার্কেটিং',1],
                   ];
        foreach ($info_data as $x => $val) {
                $info = new WebsiteCourseCategory();
                $info->title = $x;
                $info->description = $val[0];
                $info->status=$val[1];
                $info->created_at = Carbon::now()->toDateTimeString();
                $info->save();
            
        }
    }
}
