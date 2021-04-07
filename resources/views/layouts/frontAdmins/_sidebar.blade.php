<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                @if (auth()->user()->role == 'admin utama')
                <li>
                    <a href="{{route('posts')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        {{-- <span class="badge badge-pill badge-info float-right">04</span> --}}
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-data"></i>
                        <span key="t-layouts">Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Admin</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('dataAdmin')}}" key="t-light-sidebar">Data Admin</a></li>
                                {{-- <li><a href="{{route('posts')}}" key="t-compact-sidebar">Posting Saya</a></li> --}}
                                <li><a href="{{route('allPosts')}}" key="t-compact-sidebar">Semua Posting</a></li>
                                <li><a href="{{route('postsVidio')}}" key="t-compact-sidebar">Semua Posting Vidio</a></li>
                                <li><a href="{{route('createCategory')}}" key="t-icon-sidebar">Category</a></li>
                                <li><a href="{{route('createTag')}}" key="t-icon-sidebar">Tag</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Pengguna</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('dataClient')}}" key="t-horizontal">Data Pengguna</a></li>
                                <li><a href="{{route('postPengguna')}}" key="t-topbar-light">Posting Informasi</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- <li class="menu-title" key="t-apps">Apps</li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Chat</span>
                    </a>
                </li> --}}
                @endif

                @if (auth()->user()->role == 'admin')
                <li>
                    <a href="{{route('posts')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        {{-- <span class="badge badge-pill badge-info float-right">04</span> --}}
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-data"></i>
                        <span key="t-layouts">Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Admin</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('dataAdmin')}}" key="t-light-sidebar">Data Admin</a></li>
                                
                                <li><a href="{{route('allPosts')}}" key="t-compact-sidebar">Semua Posting</a></li>
                                <li><a href="{{route('createCategory')}}" key="t-icon-sidebar">Category</a></li>
                                <li><a href="{{route('createTag')}}" key="t-icon-sidebar">Tag</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Pengguna</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('dataClient')}}" key="t-horizontal">Data Pengguna</a></li>
                                <li><a href="{{route('postPengguna')}}" key="t-topbar-light">Posting Informasi</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                
                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->