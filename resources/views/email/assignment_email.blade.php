<div width="100%"
        style="margin: 40px 0 !important; padding: 0 0 !important; font-family: 'Montserrat', sans-serif; color: #494949; height: 100% !important; width: 100% !important;">
        <div style="max-width: 600px; margin: 0 auto;" class="m_884722770173574965email-container">
            <table role="presentation"
                style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;">
                <tbody>
                    <tr>
                        <td>
                            <img style="padding-bottom: 40px;" src="http://dev.ictvillage.org/assets/img/favicon.png"
                                alt="Programming Hero" data-image-whitelisted="" class="CToWUd" />
                        </td>
                        <td class="m_884722770173574965date"
                            style="padding-bottom: 40px; font-weight: bold; color: #aaaaaa; text-align: right;">
                            {{Carbon\Carbon::now()->format('d F, Y')}}
                        </td>
                    </tr>

                    <tr>
                        <td valign="middle" class="m_884722770173574965hero" style="
                                padding: 2em 0 4em 0;
                                background-image: url(https://mail.google.com/mail/?ui=2&amp;ik=5161dd30a4&amp;attid=0.1&amp;permmsgid=msg-f:1718732624109817285&amp;th=17da2a3723f0cdc5&amp;view=fimg&amp;fur=ip&amp;permmsgid=msg-f:1718732624109817285&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ9FEeVsYTISqc0CSnrBrINUM44ptZuXwnq0xa0-bZVr3yuHkFAXievs6CBOrwn--LzYY5pdTA-7rDUR_fyS6b8194cHHyGVW2k35uMp-qeVoiAM9DTvf43PnUM&amp;disp=emb&amp;zw);
                                background-size: 100% 100%;
                                width: 100%;
                                margin: 30px 0;
                            " colspan="2"
                            background="https://ci5.googleusercontent.com/proxy/qYLDSMMCPtAdFZ9DHz2So7Hc5NFUUt2Yp4cGzm0ynWi_WPU4OVNU=s0-d-e1-ft#http://images/bg.png">
                            <table
                                style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h1 style="text-align: center; color: #122e5b; font-size: 26px;">
                                                Assignment Result
                                            </h1>
                                            <img src="https://mail.google.com/mail/u/3?ui=2&amp;ik=5161dd30a4&amp;attid=0.3&amp;permmsgid=msg-f:1718732624109817285&amp;th=17da2a3723f0cdc5&amp;view=fimg&amp;fur=ip&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ9n5hH08KLCN6Cl7az82DA1y0gBptLmd_2k5k3Sc_LGXW2965fj34LsJGuK6238kX8Xy61Ur1kSeML-YUUASd8jAYhtyZkLlXC26GCiJylPa730CwB2d5Kj7PM&amp;disp=emb"
                                                alt=""
                                                style="width: 280px; max-width: 400px; height: auto; margin: 40px auto; display: block;"
                                                data-image-whitelisted="" class="CToWUd" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <button class="m_884722770173574965btn"
                                                    style="background: #bf1e30; height: auto; padding: 0px 16px; width: 192px; background-color: #bf1e30; border: 0; color: #ffffff; border-radius: 5px; font-weight: 600; font-size: 16px;">
                                                    <p style="margin: 7px 0 0 0; line-height: 30px;">
                                                        Your Score
                                                    </p>
                                                    <h1 style="margin: 0px 0px 7px 0;">
                                                        {{ $submissions->mark }}/{{ $assignment->mark }}
                                                    </h1>
                                                </button>
                                            </center>
                                            <div class="m_884722770173574965full-width"
                                                style="padding: 0 2.5em; margin-top: 35px; width: 518px;">
                                                <h1 style="text-align: center; color: #122e5b; font-size: 24px;">
                                                    Assignment: {{$assignment->title}}
                                                </h1>
                                                <h3 style="text-align: center; color: #bf1e30; font-size: 16px;">
                                                    Examiner's Feedback
                                                </h3>
                                                {!! $submissions->review !!}
                                            </div>
                                            <br />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table role="presentation"
                style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;">
                <tbody>
                    <tr>
                        <td style="text-align: center;" colspan="2">
                            <h2 class="m_884722770173574965brand-title"
                                style="padding-top: 40px; font-style: normal; font-weight: bold; font-size: 15px; color: #3965ff;">
                                Team ICTVILLAGE
                            </h2>
                            <h3 class="m_884722770173574965brand-subtitle"
                                style="font-family: 'Caveat', cursive; font-style: normal; font-weight: normal; font-size: 14px; color: #6b7f9f;">
                                Your Fun and Personalized way to learn!
                            </h3>
                            <table
                                style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;">
                                <tbody>
                                    <tr class="m_884722770173574965social-media">
                                        <td>
                                            <!-- facebook -->
                                            @if(\App\Models\WebsiteInfo::where('title','fb_link')->exists())
                                            <a href="{{\App\Models\WebsiteInfo::where('title','fb_link')->first()->value}}"
                                                style="text-decoration: none;" target="_blank">
                                                <img src="https://mail.google.com/mail/u/3?ui=2&amp;ik=5161dd30a4&amp;attid=0.4&amp;permmsgid=msg-f:1718732624109817285&amp;th=17da2a3723f0cdc5&amp;view=fimg&amp;fur=ip&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ9EfXBBWX2xZBclmu4NGoDcnGx0beQX9V1bQvwX39UNpJXOdn-HGetNc2nDiEh6rzi-ugFIXYfoIDiNPBeiV58IpJfIA7gFt9vBNa9Ho6KOI_EdDfAbajWCLLI&amp;disp=emb"
                                                    alt="" style="margin: 7px;" data-image-whitelisted=""
                                                    class="CToWUd" />
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- twitter -->
                                            @if(\App\Models\WebsiteInfo::where('title','twitter_link')->exists())
                                            <a href="{{\App\Models\WebsiteInfo::where('title','twitter_link')->first()->value}}"
                                                style="text-decoration: none;" target="_blank">
                                                <img src="https://mail.google.com/mail/u/3?ui=2&amp;ik=5161dd30a4&amp;attid=0.5&amp;permmsgid=msg-f:1718732624109817285&amp;th=17da2a3723f0cdc5&amp;view=fimg&amp;fur=ip&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ8qsOJ1z2IdfLEWjX_xpTWdX6drUFklaKT5-ir0gyImZcGwx_Kip5AgShJxx2g-mAsOmUz7fuNuuppLOq3diiChSEUTXP3wqrtJyiyNt68iwbU_Mk97nscbeDI&amp;disp=emb"
                                                    alt="" style="margin: 7px;" data-image-whitelisted=""
                                                    class="CToWUd" />
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- youtube -->
                                            @if(\App\Models\WebsiteInfo::where('title','youtube_link')->exists())
                                            <a href="{{\App\Models\WebsiteInfo::where('title','youtube_link')->first()->value}}"
                                                style="text-decoration: none;" target="_blank">
                                                <img src="https://mail.google.com/mail/u/3?ui=2&amp;ik=5161dd30a4&amp;attid=0.6&amp;permmsgid=msg-f:1718732624109817285&amp;th=17da2a3723f0cdc5&amp;view=fimg&amp;fur=ip&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ9ilkpNsB6gzMfmx0A05a20RiuXyjqEAgAkUQ3XDVkWN0uQ5HBvlIAp79nP0ge8fQc1KCD_m53IjKvMIZGH4be4OXvjoOPehXp5RW92oNuQerRmcZKI9ltZPAw&amp;disp=emb"
                                                    alt="" style="margin: 7px;" data-image-whitelisted=""
                                                    class="CToWUd" />
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- linkedin -->
                                            @if(\App\Models\WebsiteInfo::where('title','linkedin_link')->exists())
                                            <a href="{{\App\Models\WebsiteInfo::where('title','linkedin_link')->first()->value}}"
                                                style="text-decoration: none;" target="_blank">
                                                <img src="https://mail.google.com/mail/u/3?ui=2&amp;ik=5161dd30a4&amp;attid=0.7&amp;permmsgid=msg-f:1718732624109817285&amp;th=17da2a3723f0cdc5&amp;view=fimg&amp;fur=ip&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ_jxehpl5p85SYkzUR6RQSoYoFRgKa1DLkVMo0f9l2okSEv2wgqYFg0V5bQmjDY0QLCBNZELxDtHWryBaaECjkoTQabx-7FT6DZMbPsNNRDr0GQlW18C49VFq0&amp;disp=emb"
                                                    alt="" style="margin: 7px;" data-image-whitelisted=""
                                                    class="CToWUd" />
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- instagram -->
                                            @if(\App\Models\WebsiteInfo::where('title','instagram_link')->exists())
                                            <a href="{{\App\Models\WebsiteInfo::where('title','instagram_link')->first()->value}}"
                                                style="text-decoration: none;" target="_blank">
                                                <img src="https://mail.google.com/mail/u/3?ui=2&amp;ik=5161dd30a4&amp;attid=0.8&amp;permmsgid=msg-f:1718732624109817285&amp;th=17da2a3723f0cdc5&amp;view=fimg&amp;fur=ip&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ9_7JBffGN3MTH1ZKyk4_0eVs9q5F-WKnF3NMcsnmM6obM02W6klGwZdMJHwJZglUZG-34dyC9hBQc2m5KPda-7HVqoEjI_vVEbRjauzht7pucYUg3k33o3xHU&amp;disp=emb"
                                                    alt="" style="margin: 7px;" data-image-whitelisted=""
                                                    class="CToWUd" />
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;">
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <p
                                                style="line-height: 20px; color: #000000; margin: 0; font-size: 13px; font-weight: 500;">
                                                <span>
                                                    Site:
                                                    <a href="http://dev.ictvillage.org"
                                                        style="text-decoration: none; color: #000000; margin: 0; line-height: 20px; font-size: 13px; font-weight: 500;"
                                                        target="_blank">
                                                        dev.ictvillage.org
                                                    </a>
                                                </span>
                                                <span> | </span>
                                                <span>
                                                    Phone:
                                                    @if(\App\Models\WebsiteInfo::where('title','mobile')->exists())
                                                    <a href="tel:{{\App\Models\WebsiteInfo::where('title','mobile')->first()->value}}"
                                                        style="text-decoration: none; color: #000000; margin: 0; line-height: 20px; font-size: 13px; font-weight: 500;"
                                                        target="_blank">{{\App\Models\WebsiteInfo::where('title','mobile')->first()->value}}</a>
                                                    @endif
                                                </span>
                                                <span> | </span>
                                                <span>
                                                    Whatsapp:
                                                    @if(\App\Models\WebsiteInfo::where('title','whatapp_link')->exists())
                                                    <a href="tel:{{\App\Models\WebsiteInfo::where('title','whatapp_link')->first()->value}}"
                                                        style="text-decoration: none; color: #000000; margin: 0; line-height: 20px; font-size: 13px; font-weight: 500;"
                                                        target="_blank">{{\App\Models\WebsiteInfo::where('title','whatapp_link')->first()->value}}</a>
                                                    @endif
                                                </span>
                                                <span> | </span>
                                                <span>
                                                    Telegram:
                                                    @if(\App\Models\WebsiteInfo::where('title','telegram_link')->exists())
                                                    <a href="tel:{{\App\Models\WebsiteInfo::where('title','telegram_link')->first()->value}}"
                                                        style="text-decoration: none; color: #000000; margin: 0; line-height: 20px; font-size: 13px; font-weight: 500;"
                                                        target="_blank">{{\App\Models\WebsiteInfo::where('title','telegram_link')->first()->value}}</a>
                                                    @endif
                                                </span>
                                                <span> | </span>
                                                <span>
                                                    Messenger:
                                                    @if(\App\Models\WebsiteInfo::where('title','messenger_link')->exists())
                                                    <a href="tel:{{\App\Models\WebsiteInfo::where('title','messenger_link')->first()->value}}"
                                                        style="text-decoration: none; color: #000000; margin: 0; line-height: 20px; font-size: 13px; font-weight: 500;"
                                                        target="_blank">{{\App\Models\WebsiteInfo::where('title','messenger_link')->first()->value}}</a>
                                                    @endif
                                                </span>
                                            </p>
                                            <p
                                                style="line-height: 20px; color: #000000; margin: 0; font-size: 13px; font-weight: 500;">
                                                @if(\App\Models\WebsiteInfo::where('title','address')->exists())
                                                {{\App\Models\WebsiteInfo::where('title','address')->first()->value}}
                                                @endif
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
