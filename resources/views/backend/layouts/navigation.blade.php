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
            <li><a href="{{ route('backend.post.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.post.create') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-folder-open"></i> <span>{{ _('Categories') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.post.category.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.post.category.create') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="header">{{ _('Video') }}</li>
    <li class="treeview">
        <a href="#"><i class="fa fa-fw fa-file-video-o"></i> <span>{{ _('Videos') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.video.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.video.create') }}">{{ _('Create') }}</a></li>
            <li><a href="{{ route('backend.video.crawler') }}">{{ _('Crawler') }}</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-folder-open"></i> <span>{{ _('Videos Categories') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.video.category.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.video.category.create') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-fw fa-university"></i> <span>{{ _('Court') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.court.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.court.create') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-fw fa-coffee"></i> <span>{{ _('Event') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.event.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.event.create') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-fw fa-bullhorn"></i> <span>{{ _('Invitation') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.invitation.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.invitation.create') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
    <li class="header">System</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>{{ _('Users') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route('backend.user.list') }}">{{ _('List') }}</a></li>
            <li><a href="{{ route('backend.user.create') }}">{{ _('Create') }}</a></li>
        </ul>
    </li>
</ul><!-- /.sidebar-menu -->