<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Tivo .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span>
                        </div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            <div class="logo-header-main"><a href="{{ route('dashboard') }}"><img class="img-fluid for-light"
                        src="{{ asset('assets/images/logo/logo2.png') }}" alt=""><img class="img-fluid for-dark"
                        src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
            <div class="left-menu-header">
                <ul class="app-list">
                    <li class="onhover-dropdown">
                        <div class="app-menu"> <i data-feather="folder-plus"></i></div>
                        <ul class="onhover-show-div left-dropdown">
                            <li> <a href="{{ route('file_manager') }}">File Manager</a></li>
                            <li> <a href="{{ route('kanban') }}"> Kanban board</a></li>
                            <li> <a href="{{ route('social_app') }}"> Social App</a></li>
                            <li> <a href="{{ route('bookmark') }}"> Bookmark</a></li>
                        </ul>
                    </li>
                </ul>
                {{-- <ul class="header-left">
            <li class="onhover-dropdown"><span class="f-w-600">Dashboard</span><span><i class="middle"
                  data-feather="chevron-down"></i></span>
              <ul class="onhover-show-div left-dropdown">
                <li> <a href="{{ route('dashboard') }}">Default</a></li>
                <li> <a href="{{ route('ecommerce_dashboard') }}"> Ecommerce</a></li>
              </ul>
            </li>
          </ul> --}}
            </div>
        </div>
        <div class="nav-right col-6 pull-right right-header p-0">
            <ul class="nav-menus">
                <!-- <li>
            <div class="right-header ps-0">
              <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text mobile-search"><i
                      class="fa fa-search"></i></span></div>
                <input class="form-control" type="text" placeholder="Search Here........">
              </div>
            </div>
          </li> -->
                <li class="serchinput">
                    <div class="serchbox"><i data-feather="search"></i></div>
                    <div class="form-group search-form">
                        <input type="text" placeholder="Search here...">
                    </div>
                </li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box"><i data-feather="bell"></i></div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li><i data-feather="bell"> </i>
                            <h6 class="f-18 mb-0">Notitications</h6>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><i data-feather="truck"></i></div>
                                <div class="flex-grow-1">
                                    <p><a href="{{ route('order_history') }}">Delivery processing </a><span
                                            class="pull-right">6 hr</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                                <div class="flex-grow-1">
                                    <p><a href="{{ route('cart') }}">Order Complete</a><span class="pull-right">3
                                            hr</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                                <div class="flex-grow-1">
                                    <p><a href="{{ route('invoice_template') }}">Tickets Generated</a><span
                                            class="pull-right">1 hr</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><i data-feather="send"></i></div>
                                <div class="flex-grow-1">
                                    <p><a href="{{ route('email_inbox') }}">Delivery Complete</a><span
                                            class="pull-right">45 min</span></p>
                                </div>
                            </div>
                        </li>
                        <li><a class="btn btn-primary" href="javascript:void(0)">Check all notification</a></li>
                    </ul>
                </li>
                <li class="onhover-dropdown">
                    <div class="message"><i data-feather="message-square"></i></div>
                    <ul class="message-dropdown onhover-show-div">
                        <li><i data-feather="message-square"> </i>
                            <h6 class="f-18 mb-0">Messages</h6>
                        </li>
                        <li>
                            <div class="d-flex align-items-start">
                                <div class="message-img bg-light-primary"><img
                                        src="{{ asset('assets/images/user/3.jpg') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0"> <a href="{{ route('email_inbox') }}">Emay Walter</a></h5>
                                    <p>Do you want to go see movie?</p>
                                </div>
                                <div class="notification-right"><i data-feather="x"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-start">
                                <div class="message-img bg-light-primary"><img
                                        src="{{ asset('assets/images/user/6.jpg') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0"> <a href="{{ route('email_inbox') }}">Jason Borne</a></h5>
                                    <p>Thank you for rating us.</p>
                                </div>
                                <div class="notification-right"><i data-feather="x"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-start">
                                <div class="message-img bg-light-primary"><img
                                        src="{{ asset('assets/images/user/10.jpg') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-0"> <a href="{{ route('email_inbox') }}">Sarah Loren</a></h5>
                                    <p>What`s the project report update?</p>
                                </div>
                                <div class="notification-right"><i data-feather="x"></i></div>
                            </div>
                        </li>
                        <li><a class="btn btn-primary" href="{{ route('email_inbox') }}">Check Messages</a></li>
                    </ul>
                </li>
                <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize-2"></i></a></li>
                <li class="language-nav">
                    <div class="translate_wrapper">
                        <div class="current_lang">
                            <div class="lang"><i data-feather="globe"></i></div>
                        </div>
                        <div class="more_lang">
                            <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span
                                    class="lang-txt">English<span> (US)</span></span></div>
                            <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                                    class="lang-txt">Deutsch</span></div>
                            <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                                    class="lang-txt">Espa&ntilde;ol</span></div>
                            <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                    class="lang-txt">Fran&ccedil;ais</span></div>
                            <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                                    class="lang-txt">Portugu&ecirc;s<span> (BR)</span></span></div>
                            <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
                                    class="lang-txt">&#x7B80;&#x4F53;&#x4E2D;&#x6587;</span></div>
                            <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                    class="lang-txt">&#x644;&#x639;&#x631;&#x628;&#x64A;&#x629; <span>
                                        (ae)</span></span></div>
                        </div>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown">
                    <div class="account-user"><i data-feather="user"></i></div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="{{ route('user_profile') }}"><i data-feather="user"></i><span>Account</span></a>
                        </li>
                        <li><a href="{{ route('email_inbox') }}"><i data-feather="mail"></i><span>Inbox</span></a>
                        </li>
                        <li><a href="{{ route('edit_profile') }}"><i
                                    data-feather="settings"></i><span>Настройки</span></a></li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="log-in"></i><span>Выйти</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">                        
          <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
          <div class="ProfileCard-details">
          {{-- <div class="ProfileCard-realName">{{name}}</div> --}}
          </div>
          </div>
        </script>
        <script class="empty-template"
        type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>
