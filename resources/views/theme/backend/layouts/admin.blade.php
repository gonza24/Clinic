<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('assets/backend/css/materialize.css') }} rel="stylesheet">
    <link href="{{ asset('assets/backend/css/style.css') }} rel="stylesheet">
    <link href="{{ asset('assets/backend/css/custom.css') }} rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }} rel="stylesheet">
    <link href="{{ asset('assets/plugins/flag-icon/css/flag-icon.min.css') }} rel="stylesheet">

</head>

<body>

    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

<header id="header" class="page-topbar">
    <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
            <div class="nav-wrapper">

                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="index.html" class="brand-logo darken-1">
                                <img src="images/logo/materialize-logo.png" alt="materialize logo">
                                <span class="logo-text hide-on-med-and-down">Clínica</span>
                            </a>
                        </h1>
                    </li>
                </ul>

                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="material-icons">search</i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Qué deseas buscar?" />
                </div>

                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                            <i class="material-icons">settings_overscan</i>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                        </a>
                    </li>

                </ul>

                <ul id="profile-dropdown" class="dropdown-content">
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">face</i> Perfil</a>
                    </li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">settings</i> Ajustes</a>
                    </li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">live_help</i> Ayuda</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">keyboard_tab</i>Salir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div id="main">
    <div class="wrapper">
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown-nav" class="dropdown-content">
                                <li>
                                    <a href="#" class="grey-text text-darken-1">
                                        <i class="material-icons">face</i> Perfil</a>
                                </li>
                                <li>
                                    <a href="#" class="grey-text text-darken-1">
                                        <i class="material-icons">settings</i> Ajustes</a>
                                </li>
                                <li>
                                    <a href="#" class="grey-text text-darken-1">
                                        <i class="material-icons">live_help</i> Ayuda</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="grey-text text-darken-1">
                                        <i class="material-icons">keyboard_tab</i>Salir</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">Gonza<i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class="no-padding">
                    <ul class="collapsible" data-collapsible="accordion">

                        <li class="bold">
                            <a href="index.html" class="waves-effect waves-cyan">
                                <i class="material-icons">pie_chart_outlined</i>
                                <span class="nav-text">Panel de administración</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
                <i class="material-icons">menu</i>
            </a>
        </aside>

        <section id="content">
            <div class="container">
            </div>
        </section>
    </div>
</div>

<footer class="page-footer gradient-45deg-light-blue-cyan">
    <div class="footer-copyright">
        <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script>
            </span>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/plugins/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/materialize.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/plugins.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom-script.js') }}"></script>
</body>
</html>