<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview @if (isset($menu) && $menu == 'home') active @endif">
                <a href="{{ route('home') }}">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <li class="treeview @if (isset($menu) && $menu == 'meetup') active @endif">
                <a href="{{ route('meetup') }}">
                    <i class="fa fa-credit-card"></i> <span>Meet-ups</span>
                </a>
            </li>
            @if ($totalMagazine >= 1)
                <li class="treeview @if (isset($menu) && $menu == 'magazine') active @endif">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Magazine</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach ($magazines as $magazine)
                            <li>
                                <a href="{{ url('magazine', [ strtolower($magazine->short_name) ]) }}">
                                    <i class="fa fa-tablet"></i>
                                    {{ $magazine->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
            @if (Auth::check())
                <li class="treeview @if (isset($menu) && $menu == 'favourite') active @endif">
                    <a href="{{ url('/user/favourite') }}">
                        <i class="fa fa-star"></i> <span>Favourite</span>
                    </a>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>