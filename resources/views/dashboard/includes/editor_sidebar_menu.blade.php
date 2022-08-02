<ul class="sidebar-menu">

    <li>
        <a href="/dashboard" class="sidebar-header">
            <i class="icon-desktop"></i><span> Home</span>
        </a>
    </li>

    <li>
        <a href="javascript:void(0)" class="sidebar-header">
            <i class="icon-blackboard"></i> <span>Website Information</span>
            <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{route('editor_basic_information_index')}}"><i class="fa fa-angle-right"></i>Basic Info</a></li>
            <li><a href="{{route('editor_page_information_index')}}"><i class="fa fa-angle-right"></i>Page Info</a></li>
            <li><a href="{{route('editor_page_image_index')}}"><i class="fa fa-angle-right"></i>Image Info</a></li>
        </ul>
    </li>
    <li>
        <a href="{{route('editor_sister_concern_information_index')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Sister Concerns</span> 
        </a>
    </li>
    <li>
        <a href="{{route('editor_client_information_index')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Client </span> 
        </a>
    </li>
    <li>
        <a href="{{route('editor_product_information_index')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Product</span> 
        </a>
    </li>
    <li>
        <a href="{{route('editor_equipment_information_index')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Plant & Equipment </span> 
        </a>
    </li>
    {{-- <li>
        <a href="{{route('editor_gallery_image_information_index')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Photo Gallery </span> 
        </a>
    </li> --}}
    <li>
        <a href="{{route('editor_gallery_video_information_index')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Video Gallery </span> 
        </a>
    </li>
    <li>
        <a href="{{route('editor_product_order_information_index')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Order Contact </span> 
        </a>
    </li>
    <li>
        <a href="{{route('editor_all_subscribe_info')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Subscribe Info </span> 
        </a>
    </li>
    <li>
        <a href="{{route('editor_all_any_question_info')}}" class="sidebar-header">
            <i class="icon-pencil-alt"></i> <span>Any Question Info</span> 
        </a>
    </li>
</ul>
