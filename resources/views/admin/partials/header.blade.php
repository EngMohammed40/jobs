<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="الوضع الليلي">
                            <i class="notify ficon feather icon-users" data-notify = '1'></i>
                            @if(auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\UserNotification')->count() != 0)
                                <span class="badge badge-pill badge-primary badge-up cart-item-count">
                        {{auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\UserNotification')->count() }}
                        </span>
                            @endif
                        </a>
                        <ul class=" dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right" >
                            @foreach(auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\UserNotification') as $notification)
                                <li  class="unread-notification scrollable-container media-list">
                                    <p>{{$notification->data['text']}}</p>
                                    <a class="cart-item" href="{{route('users.edit',$notification->data['id'])}}">
                                        {{$notification->data['name']}}
                                    </a>
                                </li>
                            @endforeach

                            @foreach(auth()->user()->readNotifications->where('type','=', 'App\Notifications\UserNotification') as $notification)
                                <li class="scrollable-container media-list">
                                    <p>{{$notification->data['text']}}</p>
                                    <a class="cart-item" href="{{route('users.edit',$notification->data['id'])}}">
                                        {{$notification->data['name']}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>

                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="notify ficon fa fa-chrome" data-notify = '2'></i>
                            @if(auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\WebsitesNotification')->count() != 0)
                                <span class="badge badge-pill badge-primary badge-up">{{auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\WebsitesNotification')->count() }}</span>
                            @endif
                        </a>
                        <ul class=" dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right" >
                            @foreach(auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\WebsitesNotification') as $notification)
                                <li  class="unread-notification scrollable-container media-list">
                                    <p>{{$notification->data['text']}}</p>
                                    <a class="cart-item" href="{{route('websites.edit',$notification->data['id'])}}">
                                        {{$notification->data['name']}}
                                    </a>
                                </li>
                            @endforeach

                            @foreach(auth()->user()->readNotifications->where('type','=', 'App\Notifications\WebsitesNotification') as $notification)
                                <li class="scrollable-container media-list">
                                    <p>{{$notification->data['text']}}</p>
                                    <a class="cart-item" href="{{route('websites.edit',$notification->data['id'])}}">
                                        {{$notification->data['name']}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>


                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="notify ficon feather icon-bell" data-notify = '3'></i>
                            @if(auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\WebsiteEditNotification')->count() != 0)
                                <span class="badge badge-pill badge-primary badge-up">{{auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\WebsiteEditNotification')->count() }}</span>
                            @endif

                        </a>
                        <ul class=" dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right" >
                            @foreach(auth()->user()->unReadNotifications->where('type','=', 'App\Notifications\WebsiteEditNotification') as $notification)
                                <li class="unread-notification scrollable-container media-list">
                                    <p>{{$notification->data['text']}}</p>
                                    <a class="cart-item" href="{{route('websites_not_updated_edit',$notification->data['id'])}}">
                                        {{$notification->data['name']}}
                                    </a>
                                </li>
                            @endforeach

                            @foreach(auth()->user()->readNotifications->where('type','=', 'App\Notifications\WebsiteEditNotification') as $notification)
                                <li class="scrollable-container media-list">
                                    <p>{{$notification->data['text']}}</p>
                                    <a class="cart-item" href="{{route('websites_not_updated_edit',$notification->data['id'])}}">
                                        {{$notification->data['name']}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>



                </ul>
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block">
                            <a onclick="mode('dark-layout')" class="nav-link mode" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="الوضع الليلي">
                                <i class="ficon feather icon-moon"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a onclick="mode('semi-dark-layout')"  class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="وضع نصف ليلي">
                                <i class="ficon fa fa-adjust"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a onclick="mode('light-layout')" class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="الوضع الصباحي">
                                <i class="ficon feather icon-sun"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/admin/app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/admin/app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/admin/app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/admin/app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/admin/app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/admin/app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/admin/app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/admin/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
