<aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="header">MAIN NAVIGATION</li>
         <li class="{{ request()->routeIs('admin.author.index') ? 'active' : '' }}"><a href="{{ route('admin.author.index') }}"><i class="fa fa-user"></i> <span>Penulis</span></a></li>
         <li class="{{ request()->routeIs('admin.book.index') ? 'active' : '' }}"><a href="{{ route('admin.book.index') }}"><i class="fa fa-book"></i> <span>Buku</span></a></li>
         <li class="{{ request()->routeIs('admin.borrow.index') ? 'active' : '' }}"><a href="{{ route('admin.borrow.index') }}"><i class="fa fa-book"></i> <span>Buku Sedang Dipinjam</span></a></li>
         <li class="{{ request()->routeIs('admin.report.top-book') ? 'active' : '' }}"><a href="{{ route('admin.report.top-book') }}"><i class="fa fa-file-text"></i> <span>Laporan Buku</span></a></li>
         <li class="{{ request()->routeIs('admin.report.top-user') ? 'active' : '' }}"><a href="{{ route('admin.report.top-user') }}"><i class="fa fa-users"></i> <span>User</span></a></li>
      </ul>
   </section>
   <!-- /.sidebar -->
</aside>