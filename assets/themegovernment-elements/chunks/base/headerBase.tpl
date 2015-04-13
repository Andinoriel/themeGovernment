<header id="header">
	<div class="container-fluid">
		<div class="row">
            <div class="col-lg-2 col-lg-offset-1 navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="home-btn">Home</div>
                [[*id:is=`[[++site_start]]`:then=`
                    <span class="navbar-brand">
                        <img src="[[++themegovernment.design_url]]images/logo.png" alt="[[++site_name]]" class="site-logo">
                    </span>
                `:else=`
                    <a href="[[++site_url]]" class="navbar-brand">
                        <img src="[[++themegovernment.design_url]]images/logo.png" alt="[[++site_name]]" class="site-logo">
                    </a>
                `]]
                <div class="line"></div>
            </div>
            <div class="col-lg-7 col-lg-offset-1 navbar-collapse collapse">
                <nav role="navigation">
                    <ul id="navigation" class="nav navbar-nav navbar-right dl-menu">
                        [[pdoMenu@mainMenu?
                        &startId=`0`
                        &tplParentRow=`@INLINE
                        <li class="[[+classnames]] dropdown">
                            <a href="[[+link]]" class="dropdown-toggle main-heading-a" [[+attributes]] role="button" aria-expanded="false">[[+menutitle]]<i>›</i></a>
                            <ul class="dropdown-menu dl-submenu">[[+wrapper]]</ul>
                            <div class="clearfix"></div>
                        </li>`
                        &tplParentRowHere=`@INLINE
                        <li class="[[+classnames]] dropdown">
                            <a href="#" class="dropdown-toggle main-heading-a" [[+attributes]] role="button" aria-expanded="false">[[+menutitle]]<i>›</i></a>
                            <ul class="dropdown-menu dl-submenu">[[+wrapper]]</ul>
                            <div class="clearfix"></div>
                        </li>`
                        &tplParentRowActive=`@INLINE
                        <li class="[[+classnames]] dropdown">
                            <a href="[[+link]]" class="dropdown-toggle main-heading-a" [[+attributes]] role="button" aria-expanded="false">[[+menutitle]]<i>›</i></a>
                            <ul class="dropdown-menu dl-submenu">[[+wrapper]]</ul>
                            <div class="clearfix"></div>
                        </li>`
                        &tplHere=`@INLINE <li class="[[+classnames]]">
                            <span>[[+menutitle]]</span>
                            <div class="clearfix"></div>
                        </li>`
                        &tpl=`@INLINE <li class="[[+classnames]]">
                            <a href="[[+link]]">[[+menutitle]]</a>
                            <div class="clearfix"></div>
                        </li>`
                        &tplOuter=`@INLINE [[+wrapper]]`
                        ]]
                        <li class="dropdown colors">
                            <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">
                                <span class="fa fa-cog"></span><i>›</i>
                            </a>
                            <ul class="dropdown-menu dl-submenu" role="menu">
                                <li class="active">
                                        <span>
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         width="28px" height="14px" viewBox="0 0 28 14" enable-background="new 0 0 28 14" xml:space="preserve">
													<path fill="#012267" stroke="#201600" stroke-miterlimit="10" d="M0,0"/>
                                                        <rect fill="#012267" width="14" height="14"/>
                                                        <rect x="14" fill="#9A0000" width="14" height="14"/>
													</svg>
													Government
												</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="14px" viewBox="0 0 28 14" enable-background="new 0 0 28 14" xml:space="preserve">
                                                <path fill="#012267" stroke="#201600" stroke-miterlimit="10" d="M0,0" />
                                            <rect fill="#01478e" width="14" height="14" />
                                            <rect x="14" fill="#ab6a0f" width="14" height="14" />
                                            </svg>
                                        SANDYBAY
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="14px" viewBox="0 0 28 14" enable-background="new 0 0 28 14" xml:space="preserve">
                                                <path fill="#012267" stroke="#201600" stroke-miterlimit="10" d="M0,0" />
                                            <rect fill="#232323" width="14" height="14" />
                                            <rect x="14" fill="#006b8e" width="14" height="14" />
                                            </svg>
                                        SKYLINE
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="14px" viewBox="0 0 28 14" enable-background="new 0 0 28 14" xml:space="preserve">
                                                <path fill="#012267" stroke="#201600" stroke-miterlimit="10" d="M0,0" />
                                            <rect fill="#900021" width="14" height="14" />
                                            <rect x="14" fill="#242424" width="14" height="14" />
                                            </svg>
                                        Raspberry</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="14px" viewBox="0 0 28 14" enable-background="new 0 0 28 14" xml:space="preserve">
                                                <path fill="#012267" stroke="#201600" stroke-miterlimit="10" d="M0,0" />
                                            <rect fill="#333333" width="28" height="14" />
                                            </svg>
                                        Dark background</a>
                                </li>
                                <li class="active">
                                        <span>
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         width="28px" height="14px" viewBox="0 0 28 14" enable-background="new 0 0 28 14" xml:space="preserve">
													<path fill="#012267" stroke="#201600" stroke-miterlimit="10" d="M0,0"/>
                                                        <rect fill="#F8F8F8" width="28" height="14"/>
													</svg>
												Light background</span>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="14px" viewBox="0 0 28 14" enable-background="new 0 0 28 14" xml:space="preserve">
                                                <path fill="#012267" stroke="#201600" stroke-miterlimit="10" d="M0,0" />
                                            <rect fill="#F8F8F8" width="28" height="14" />
                                            <rect x="5.906" fill="#E9E8DC" width="16.156" height="14" />
                                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="22.0625" y1="7" x2="28" y2="7">
                                                <stop offset="0" style="stop-color:#000000" />
                                                <stop offset="1" style="stop-color:#FFFFFF" />
                                            </linearGradient>
                                            <rect x="22.063" opacity="0.41" fill="url(#SVGID_1_)" width="5.938" height="14" />
                                            <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="7" x2="5.9375" y2="7">
                                                <stop offset="0" style="stop-color:#FFFFFF" />
                                                <stop offset="1" style="stop-color:#000000" />
                                            </linearGradient>
                                            <rect opacity="0.41" fill="url(#SVGID_2_)" width="5.938" height="14" />
                                            </svg>
                                        Boxed</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>