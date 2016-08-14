<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview @if ($menu == 'home') active @endif">
                <a href="{{ route('home') }}">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <li class="treeview @if ($menu == 'meetup') active @endif">
                <a href="{{ route('meetup') }}">
                    <i class="fa fa-credit-card"></i> <span>Meet-ups</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>