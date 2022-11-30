<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-text">
                    <a href="{{ route('panel.home') }}" class="nav-link"> لوحة الإدارة </a>
                </div>
            </div>
        </div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>الإحصائيات</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-heading">
                <div class="heading">
                    <span>إدارة صفحات الموقع</span>
                </div>
            </li>
            <li class="menu">
                <a href="#home" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-bars"></i>
                        <span>الرئيسية</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="home" data-bs-parent="#home">
                    <li class="menu">
                        <a href="#homeAbout" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="fa-regular fa-circle-question"></i>
                                <span>من نحن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="homeAbout" data-bs-parent="#homeAbout">
                            <li>
                                <a href="{{route('panel.home.about')}}">عن الشركة</a>
                            </li>
                            <li>
                                <a href="{{route('panel.home.manager')}}">كلمة مدير الشركة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homeServices" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-flashlight"></i>
                                <span>الخدمات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="homeServices" data-bs-parent="#homeServices">
                            <li>
                                <a href="{{route('panel.home.services.index')}}">قائمة الخدمات</a>
                            </li>
                            <li>
                                <a href="{{route('panel.home.services.create')}}">إضافة خدمة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homeTestimonials" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-lightbulb"></i>
                                <span>آراء الزبائن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="homeTestimonials"
                            data-bs-parent="#homeTestimonials">
                            <li>
                                <a href="{{route('panel.home.testimonials.index')}}">قائمة الآراء</a>
                            </li>
                            <li>
                                <a href="{{route('panel.home.testimonials.create')}}">إضافة رأي زبون</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homepartners" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-users"></i>
                                <span>الشركاء</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="homepartners"
                            data-bs-parent="#homepartners">
                            <li>
                                <a href="{{route('panel.home.partners.index')}}">قائمة الشركاء</a>
                            </li>
                            <li>
                                <a href="{{route('panel.home.partners.create')}}">إضافة شريك</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homeSliders" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="homeSliders"
                            data-bs-parent="#homeSliders">
                            <li>
                                <a href="{{route('panel.home.sliders.index')}}">قائمة الصور</a>
                            </li>
                            <li>
                                <a href="{{route('panel.home.sliders.create')}}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="menu">
                <a href="#sport" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-volleyball"></i>
                        <span>الرياضة</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="sport" data-bs-parent="#sport">
                    <li class="menu">
                        <a href="#sportAbout" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-regular fa-circle-question"></i>
                                <span>من نحن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="sportAbout" data-bs-parent="#sportAbout">
                            <li>
                                <a href="{{route('panel.sport.about')}}">عن الرياضة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#sportActivites" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-weight-hanging"></i>
                                <span>الانشطة</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="sportActivites"
                            data-bs-parent="#sportActivites">
                            <li>
                                <a href="{{route('panel.sport.activities.index')}}">قائمة الانشطة</a>
                            </li>
                            <li>
                                <a href="{{route('panel.sport.activities.create')}}">إضافة نشاط</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#sportSliders" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="sportSliders"
                            data-bs-parent="#sportSliders">
                            <li>
                                <a href="{{route('panel.sport.sliders.index')}}">قائمة الصور</a>
                            </li>
                            <li>
                                <a href="{{route('panel.sport.sliders.create')}}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#trade" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-truck-medical"></i>
                        <span>التجارة</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="trade" data-bs-parent="#trade">
                    <li class="menu">
                        <a href="#tradeAbout" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-regular fa-circle-question"></i>
                                <span>من نحن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tradeAbout" data-bs-parent="#tradeAbout">
                            <li>
                                <a href="{{route('panel.trade.about')}}">عن التجارة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#tradeFields" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-bag-shopping"></i>
                                <span>المجالات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tradeFields"
                            data-bs-parent="#tradeFields">
                            <li>
                                <a href="{{route('panel.trade.fields.index')}}">قائمة المجالات</a>
                            </li>
                            <li>
                                <a href="{{route('panel.trade.fields.create')}}">إضافة مجال</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#tradePhotos" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صورة المجالات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tradePhotos"
                            data-bs-parent="#tradePhotos">
                            <li>
                                <a href="{{route('panel.trade.fields-images.index')}}">قائمة الصور</a>
                            </li>
                            <li>
                                <a href="{{route('panel.trade.fields-images.create')}}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#tradeSliders" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tradeSliders"
                            data-bs-parent="#tradeSliders">
                            <li>
                                <a href="{{route('panel.trade.sliders.index')}}">قائمة الصور</a>
                            </li>
                            <li>
                                <a href="{{route('panel.trade.sliders.create')}}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#teamWork" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-people-group"></i>
                        <span>فريق العمل</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="teamWork" data-bs-parent="#teamWork">
                    <li>
                        <a href="{{route('panel.teamworks.index')}}">عرض</a>
                    </li>
                    <li>
                        <a href="{{route('panel.teamworks.create')}}">اضافة</a>
                    </li>
                </ul>
            </li>
            {{-- <li class="menu">
                <a href="" data-active="" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fa-regular fa-circle-question"></i>
                        <span>من نحن</span>
                    </div>
                </a>
            </li> --}}
            <li class="menu">
                <a href="{{route('panel.settings')}}"
                    data-active="{{ \Route::currentRouteName() == 'panel.settings' ? 'true' : 'false' }}"
                    aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fa-solid fa-gear"></i>
                        <span>الإعدادات</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</div>