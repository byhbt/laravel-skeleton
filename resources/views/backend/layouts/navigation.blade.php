<!-- search form (Optional) -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
    </div>
</form>
<!-- /.search form -->

<!-- Sidebar Menu -->
<ul class="sidebar-menu">
    <li class="header">{{ _('Content') }}</li>
    <li class="treeview">
        <a href="#"><i class="fa fa-file-text-o"></i> <span>{{ _('Posts') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#">{{ _('List') }}</a></li>
            <li><a href="#">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-folder-open"></i> <span>{{ _('Categories') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#">{{ _('List') }}</a></li>
            <li><a href="#">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="header">{{ _('Video') }}</li>
    <li class="treeview">
        <a href="#"><i class="fa fa-file-text-o"></i> <span>{{ _('Videos') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.video.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.video.create') }}">{{ _('Create') }}</a></li>
            <li><a href="{{ route('backend.video.crawler') }}">{{ _('Crawler') }}</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-file-text-o"></i> <span>{{ _('Videos Categories') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.video.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.video.list') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="header">System</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>{{ _('Users') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#">{{ _('List') }}</a></li>
            <li><a href="#">{{ _('Create') }}</a></li>
        </ul>
    </li>
</ul><!-- /.sidebar-menu -->