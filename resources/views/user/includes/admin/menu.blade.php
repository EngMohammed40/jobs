    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
         <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/rtl/vertical-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
            </ul>
        </div>    
         
        <div class="main-menu-content">
            
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                 
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  
                
                

                @can('roles-show')

                <li class=" nav-item"><a href="{{route('roles.index')}}"><i class="feather icon-user"></i><span class="menu-title">الادوار</span></a>
                </li>

                @endcan

                @can('users')

                <li class=" nav-item"><a href="{{route('users.index')}}"><i class="feather icon-user"></i><span class="menu-title">الاعضاء</span></a>
                </li>

                @endcan

                @can('ads-show')

                <li class=" nav-item"><a href="{{route('ads.index')}}"><i class="feather icon-user"></i><span class="menu-title">المساحات الاعلانية</span></a>
                </li>

                @endcan

                 @can('countries-show')

                <li class=" nav-item"><a href="{{route('countries.index')}}"><i class="feather icon-user"></i><span class="menu-title">الدول</span></a>
                </li>

                @endcan

                 @can('cities-show')

                <li class=" nav-item"><a href="{{route('cities.index')}}"><i class="feather icon-user"></i><span class="menu-title">المدن</span></a>
                </li>

                @endcan

                @can('website-edit')

                <li class=" nav-item"><a href="{{route('website.index')}}"><i class="feather icon-user"></i><span class="menu-title">بيانات الموقع</span></a>
                </li>

                @endcan

                @can('bank-accounts-show')

                <li class=" nav-item"><a href="{{route('bank-accounts.index')}}"><i class="feather icon-user"></i><span class="menu-title">الحسابات البنكية</span></a>
                </li>

                @endcan

                
                @can('articles-show')

                <li class=" nav-item"><a href="{{route('articles.index')}}"><i class="feather icon-user"></i><span class="menu-title">المقالات</span></a>
                </li>

                @endcan

                @can('pages-show')

                <li class=" nav-item"><a href="{{route('pages.index')}}"><i class="feather icon-user"></i><span class="menu-title">صفحات الموقع</span></a>
                </li>

                @endcan

                @can('expertises-show')

                <li class=" nav-item"><a href="{{route('expertises.index')}}"><i class="feather icon-user"></i><span class="menu-title">التخصصات</span></a>
                </li>

                @endcan

                @can('regions-show')

                <li class=" nav-item"><a href="{{route('regions.index')}}"><i class="feather icon-user"></i><span class="menu-title">المناطق</span></a>
                </li>

                @endcan
               
            </ul>
        </div>
    </div>