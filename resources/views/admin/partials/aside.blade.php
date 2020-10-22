<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="logo_img navbar-brand" href="{{route('admin.index')}}">
                    @php($logo = App\Models\WebsiteDetail::find('1')->website_logo)
                    @if($logo != '')
                        <img class="logo" src="{{asset('storage/website_images/'.$logo)}}">
                    @endif
                </a>
            </li>
        </ul>
    </div>

    <div class="main-menu-content">

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item {{str_contains(url()->current(), '/admin/home') ? 'active' : '' }}">
                <a href="{{route('admin.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                        الرئيسية
                    </span>
                </a>
            </li>

            <li class="has-sub nav-item {{str_contains(url()->current(), '/admin/user-management') ? ' sidebar-group-active open' : ''}}">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span class="menu-title" data-i18n="صلاحيات النظام">
                        صلاحيات النظام
                    </span>
                </a>
                <ul class="menu-content">
                    <li class="{{str_contains(url()->current(), '/admin/user-management') ? 'active' : ''}}">
                        <a href="{{route('admin.user-management.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="المسئولين">
                                المسئولين
                            </span>
                        </a>
                    </li>
                    <li class="{{str_contains(url()->current(), '/admin/role') ? 'active' : ''}}">
                        <a href="{{route('admin.role.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="الأدوار">
                                الأدوار
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-user"></i>
                    <span class="menu-title" data-i18n="الاعضاء">
                        المستخدمين
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.users.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض المستخدمين">
                                عرض المستخدمين
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.create')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n=" إضافة مستخدم">
                                إضافة مستخدم
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/home_admin') ? 'active' : '' }}">
                <a href="{{route('admin.home_admin.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                        الصفحة الرئيسية
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.home_admin.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                 بنرات الصفحة الرئيسية
                            </span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/corporations') ? 'active' : '' }}">
                <a href="{{route('admin.corporations_admin.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                         اصحاب العمل
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.corporations_admin.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                عرض الشركات
                            </span>
                        </a>
                    </li>
                 <li>
                        <a href="{{route('admin.corporations_banner.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                 البنر العلوي
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.corporations_features.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                 مزايا اصحاب العمل
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.corporations_rules.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                   شروط التسجيل
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

                    <li class=" nav-item {{str_contains(url()->current(), '/admin/companies') ? 'active' : '' }}">
                <a href="{{route('admin.companies.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                        شركات التوظيف
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.companies.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                عرض شركات التوظيف
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.companies_banner.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                البنر العلوي
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.companies_feature.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                مميزات اصحاب الشركات
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.companies_rules.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                  شروط التسجيل
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/companies') ? 'active' : '' }}">
                <a href="{{route('admin.companies.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                         اعلانات الافراد
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.companies.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                عرض وظائف الافراد
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.jobSeekerBanner.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                البنر العلوي
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/centers') ? 'active' : '' }}">
                <a href="{{route('admin.companies.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                         معاهد التدريب
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.companies.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                عرض  المعاهد
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/jobs') ? 'active' : '' }}">
                <a href="{{route('admin.jobs.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                        الوظائف
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.jobs.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                عرض الوظائف
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.jobs.create')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="إضافة وظيفة">
                                إضافة وظيفة
                            </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class=" nav-item {{str_contains(url()->current(), '/other-websites-free') ? 'active' : '' }}">
                <a href="{{route('admin.jobs.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">
                        مواقع ووظائف أخري
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.other-websites-upper-banner.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الوظائف">
                                البنر العلوي
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.other-websites-free.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="إضافة وظيفة">
                                المواقع المجانية
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.other-websites-paid.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="إضافة وظيفة">
                                المواقع المدفوعة
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.other-websites-lower-banner.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="إضافة وظيفة">
                                البنر السفلي
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-image"></i>
                    <span class="menu-title" data-i18n="المساحات الاعلانية">
                       المساحات الإعلانية
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.ads.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="عرض الإعلانات">
                                عرض الإعلانات
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.ads.create')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="إضافة إعلان">
                                إضافة إعلان
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-map"></i>
                    <span class="menu-title" data-i18n="المناطق">
                        المناطق
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.countries.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="المسئولين">
                                الدول
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.cities.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="الأدوار">
                                 المدن
                            </span>
                        </a>
                    </li>
                                        <li>
                        <a href="{{route('admin.regions.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="الأدوار">
                                 المناطق
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{(str_contains(url()->current(), '/admin/sections')) ? 'active' : ''}}">
                <a href="{{route('admin.sections.index')}}">
                    <i class="feather icon-paperclip"></i>
                    <span class="menu-title">
                        الاقسام
                    </span>
                </a>
            </li>

            <li class="nav-item {{str_contains(url()->current(), '/admin/bank-accounts') ? 'active' : ''}}">
                <a href="{{route('admin.bank-accounts.index')}}">
                    <i class="feather icon-credit-card"></i>
                    <span class="menu-title">
                        الحسابات البنكية
                    </span>
                </a>
            </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/articles') ? 'active' : ''}}">
                <a href="{{route('admin.articles.index')}}">
                    <i class="feather icon-layers"></i>
                    <span class="menu-title">
                        المقالات
                    </span>
                </a>
            </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/expertises') ? 'active' : ''}}"><a href="{{route('admin.expertises.index')}}"><i class="feather icon-user"></i><span class="menu-title">التخصصات</span></a>
                </li>

            <li class=" nav-item {{str_contains(url()->current(), '/admin/pages') ? 'active' : ''}}">
                <a href="{{route('admin.pages.index')}}">
                    <i class="feather icon-clipboard"></i>
                    <span class="menu-title">
                        صفحات الموقع
                    </span>
                </a>
            </li>

            <li class="nav-item {{(str_contains(url()->current(), '/admin/contacts')) ? 'active' : '' }}">
                <a href="{{route('admin.contacts.index')}}">
                    <i class="feather icon-message-square"></i>
                    <span class="menu-title">
                        الشكاوي والاقتراحات
                    </span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span class="menu-title" data-i18n="إعدادت الموقع">
                        إعدادت الموقع
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{route('admin.codes.index')}}">
                            <i class="feather icon-codepen"></i>
                            <span class="menu-item">
                                اضافة اكواد للموقع
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.website.index')}}">
                            <i class="fa fa-cogs"></i>
                            <span class="menu-item">
                                بيانات الموقع
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="feather icon-log-out"></i>
                    تسجيل الخروج
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            <li>

        </ul>
    </div>
</div>
