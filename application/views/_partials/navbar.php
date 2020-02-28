<div id="header">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="<?= base_url() ?>">
                        <span>SIWOM</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->

                <!-- Left-side navigation -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            <i class="fa fa-outdent"></i>
                        </a>
                    </li>
                    <li class="dropdown leftmenu-collapse">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus mr-5"></i>Buat
                        </a>
                        <div class="dropdown-menu pull-left panel panel-default" role="menu">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-briefcase"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">New Campaign</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-area-chart"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Generate Report</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Add New User</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-file-text"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Create Page</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Left-side navigation end -->
                <div class="search" id="main-search">
                    <input type="text" class="form-control underline-input" placeholder="Explore Falcon...">
                </div>
                <!-- Search end -->

                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    <li class="dropdown users">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default" role="menu">
                            <ul class="app-sortcut">
                                <li>
                                    <a href="#" class="connection-item">
                                        <i class="fa fa-umbrella"></i>
                                        <span class="block">Weather</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-widgets.html" class="connection-item">
                                        <i class="fa fa-object-ungroup"></i>
                                        <span class="block">Widget</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html" class="connection-item">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span class="block">calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="maps-google.html" class="connection-item">
                                        <i class="fa fa-map-o"></i>
                                        <span class="block">map</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html" class="connection-item">
                                        <i class="fa fa-comments-o"></i>
                                        <span class="block">chat</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="connection-item">
                                        <i class="fa fa-book"></i>
                                        <span class="block">contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="dropdown notifications">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-ban"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">User Lucas cancelled account</span>
                                            <small class="text-muted">12 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-spotify"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">2 voice mails</span>
                                            <small class="text-muted">Neque porro quisquam est</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-whatsapp"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">8 voice messanger</span>
                                            <small class="text-muted">8 texts</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a role="button" tabindex="0">Show all notifications
                                    <i class="fa fa-angle-right pull-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown nav-profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if($user->foto == null) : ?>
                            <img src="<?= base_url() ?>assets/images/user-white.png" alt="" class="0 size-30x30"> </a>
                            <?php endif; ?>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name"><?= $user->nama ?></div>
                                    <div class="user-position online">Available</div>
                                </div>
                            </li>
                            <li>
                                <a href="profile.html" role="button" tabindex="0">
                                    <!-- <span class="label label-success pull-right">80%</span> -->
                                    <i class="fa fa-user"></i>Profile</a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <span class="label label-info pull-right">new</span>
                                    <i class="fa fa-check"></i>Tasks</a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-cog"></i>Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="locked.html" role="button" tabindex="0">
                                    <i class="fa fa-lock"></i>Lock</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>login/aksi_logout" role="button" tabindex="0">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="toggle-right-leftmenu">
                        <a role="button" tabindex="0">
                            <i class="fa fa-align-left"></i>
                        </a>
                    </li>
                </ul>
                <!-- Right-side navigation end -->
            </header>
        </div>