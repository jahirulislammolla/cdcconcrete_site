@php
    $page=[
        "seo"=>'cdconcrete, concrete, rmc, block',
        'description'=>"cdcconcrete",
        'title'=>"RMC Product",
        'image'=>"/assets/img/logo_image.jpg",
        ];
@endphp
@extends('fontend.layouts.fontend',['title'=>'RMC Product',$page])
@section("content")
    <section id='rmc_section_one'>
        <div class="container">
            <h2 class="title">Ready Mix Concrete</h2>
            <div class="text-justify">
                <p>
                    Strength of Concrete is the most important thing in your Construction. The degree of strength varies according to the size of the construction structure. And this strength depends on the quality of the concrete you use. CDC Ready Mix Concrete ensures the required and desired level of strength for your building.
                </p>
                <p>
                    Production Operate by software & automated PLC controller.
                    Production capacity of Batching plant is 60m3/hour (Average 25000 cft/ day)
                    03 No’s high performing concrete pumps, This pump is capable to rise up to 
                    40th floor and horizontally 1000 ft. 24 hours non-stop production facility supported 
                    by 02 No’s diesel generator.
                </p>
                <p> 
                    14 no’s Brand-new Transit Mixture Trucks with 8m3 capacity.
                    2 no’s Cement silos having a total capacity of 200 metric tons
                    Capable of producing high strength concrete as per customers requirement.
                    Well-equipped Concrete Research and Laboratory. We have 02 no’s deep tube well for ensuring fresh water.
                    02 no’s Pickup to carry concrete pumps and pipes, 1 covered van for laboratory use.
                    Own digital diesel filling station having storage of 15,000 liters.
                    Own Weight Bridge Scale for checking the measurement by weight.
                    Use Local & Multinational brand cement as per client desire.
                </p>
            </div>
            <div class="table_div">
                <table>
                    <tr>
                        <th>Compressive Level</th>
                        <th>PSI 2500</th>
                        <th>PSI 3000</th>
                        <th>PSI 3500</th>
                        <th>PSI 4000</th>
                        <th>PSI 4500</th>
                        <th>PSI 5000</th>
                        <th>PSI 5500</th>
                        <th>PSI 6000</th>
                        <th>PSI 6500</th>
                        <th>PSI 7000</th>
                        <th>Above</th>
                    </tr>
                </table>
            </div>
            <div class="online_order_div text-center">
                <a href="#" class="online_order " data-toggle="modal" data-target="#myModal">
                        <span> CALL FOR ORDER <i class="fas fa-mouse-pointer"></i></span>
                </a>
            </div>
            <h2 class="title pt-3">Ready Mix Concrete Ingredients</h2>
            <div class="ingedients_div">
                <ul class="list-group">
                    <li class="list-group-item"><span class="item_header">Cement:</span> Cement Brand ‘‘Bashundhara/ Seven Rings Cement/ LafargeHolicm’ is used exclusively in the production of CDC Ready-Mix Concrete. </li>
                    <li class="list-group-item"><span class="item_header">Fine Aggregate (Sand):</span> Clean “Sylhet Sand” directly sourced from Sylhet which can be found in convenient sizes for mixing purposes.</li>
                    <li class="list-group-item"><span class="item_header">Coarse Aggregate (Stones):</span> 100% “Boulder Crushed” imported stones from India & Oman alongside local Sylhet stone is used in the production of CDC Ready-Mix Concrete according to customers’ specifications.</li>
                    <li class="list-group-item"><span class="item_header">Water:</span> Freshwater from a deep tube well established in each plant is used in CDC Ready-Mix Concrete.</li>
                    <li class="list-group-item"> <span class="item_header">Chemical Admixture:</span>  For the purpose of super plasticizing and retarding, imported admixture from Germany & India is used in CDC Ready-Mix Concrete.</li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" style="display: none; z-index:99999;" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalCreateLabel">PLEASE CONFIRM YOUR ORDER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="modal-body">
                                <div class="row mb-3 justify-content-around">
                                    @foreach ($product_order as $item)
                                    <div class="col-md-6">
                                        <div class="contact">
                                            <div class="icon_div">
                                                <div class="contact_icon">
                                                    <i class="far fa-id-badge text-white"></i>
                                                </div>
                                            </div>
                                            <h5 class="contact_title text-center">{{$item->name}}</h5>
                                            <h6 class="contact_title text-center">{{$item->degination}}</h6>
                                            <div class="contact_desc">
                                                @isset($item->number_1)
                                                <p>Mobile: <a href="tel:+88{{$item->number_1}}">{{$item->number_1}}</a></p>
                                                @endisset
                                                @isset($item->number_2)
                                                <p>Mobile: <a href="tel:+88{{$item->number_2}}">{{$item->number_2}}</a></p>
                                                @endisset
                                                @isset($item->number_3)
                                                <p>Mobile: <a href="tel:+88{{$item->number_3}}">{{$item->number_3}}</a></p>
                                                @endisset
                                                @isset($item->number_4)
                                                <p>Mobile: <a href="tel:+88{{$item->number_4}}">{{$item->number_4}}</a></p>
                                                @endisset
                                                <p>WhatsApp: <a href="https://wa.me/+88{{$item->whatsapp}}">{{$item->whatsapp}}</a></p>
                                                <p>Email: <a href="mailto:{{$item->email}}">{{$item->email}}</a></p>
                                            </div>				                    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                    
                            <!-- Modal footer -->
                            <div class="modal-footer justify-content-center">
                                <div class="form-group mb-3 text-center">
                                    <button type="button" class="btn btn-info pl-3 pr-3" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
