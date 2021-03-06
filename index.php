<html style="background-color:black;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Metro UI</title>
    <link rel="icon" href="img/pokeball.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/tether.min.css">
    <link rel="stylesheet" href="css/metro.min.css">
    <link rel="stylesheet" href="css/metro-rtl.min.css">
    <link rel="stylesheet" href="css/metro-responsive.min.css">
    <link rel="stylesheet" href="css/metro-icons.min.css">
    <link rel="stylesheet" href="css/metro-colors.min.css">
    <link rel="stylesheet" href="css/metro-schemes.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery.mousewheel-3.0.6.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/metro.min.js"></script>
    <script src="js/layout.js"></script>
    <link rel="prev" href="">
    <link rel="next" href="">
    <style>
    html {
        overflow: hidden;
    }
    </style>
</head>

<body style="opacity: 0;">
    <div class="grid">
        <div class="row_metro">
            <header class="app-bar darcula" data-role="appbar">
                <div class="container_metro">
                    <a onclick="test()" class="app-bar-element branding mif-home icon"><span class="mif-home icon"></span> 首頁</a>
                    <div class="app-bar-element place-right">
                        <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Enter</a>
                        <div class="app-bar-drop-container bg-white fg-dark place-right" data-role="dropdown" data-no-close="true">
                            <div class="padding20">
                                <form>
                                    <h4 class="text-light">Login to service...</h4>
                                    <div class="input-control text">
                                        <span class="mif-user prepend-icon"></span>
                                        <input type="text">
                                    </div>
                                    <div class="input-control text">
                                        <span class="mif-lock prepend-icon"></span>
                                        <input type="password">
                                    </div>
                                    <label class="input-control checkbox small-check">
                                        <input type="checkbox">
                                        <span class="check"></span>
                                        <span class="caption">Remember me</span>
                                    </label>
                                    <div class="form-actions">
                                        <button class="button">Login</button>
                                        <button class="button link">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <ul class="app-bar-menu">
                        <li>
                            <a href="#" class="dropdown-toggle">Base CSS</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li class="disabled"><a href="overview.html">Overview</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="" class="dropdown-toggle">Grid system</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Simple grid</a></li>
                                        <li><a>Flex grid</a></li>
                                    </ul>
                                </li>
                                <li><a>Typography</a></li>
                                <li><a>Tables</a></li>
                                <li><a>Forms &amp; Inputs</a></li>
                                <li><a>Buttons</a></li>
                                <li><a>Images</a></li>
                                <li><a>Metro Icon Font</a></li>
                                <li class="divider"></li>
                                <li><a>Colors</a></li>
                                <li><a>Helpers classes</a></li>
                                <li class="divider"></li>
                                <li><a>RTL Support</a></li>
                                <li class="disabled"><a href="responsive.html">Responsive</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle">Widgets</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li>
                                    <a href="#" class="dropdown-toggle">Menus</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Application bar</a></li>
                                        <li><a>Menus</a></li>
                                        <li><a>Fluent menu</a></li>
                                        <li><a>Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Controls</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Accordion</a></li>
                                        <li><a>Button groups</a></li>
                                        <li><a>Keypad</a></li>
                                        <li><a>Tab Control</a></li>
                                        <li><a>TreeView</a></li>
                                        <li><a>ListView</a></li>
                                        <li><a>Slider</a></li>
                                        <li><a>Stepper</a></li>
                                        <li><a>Wizard</a></li>
                                        <li><a>Wizard2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Visualization</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Tiles</a></li>
                                        <li><a>Carousel</a></li>
                                        <li class="no-display"><a href="windows.html">Windows</a></li>
                                        <li><a>Popovers</a></li>
                                        <li><a>Progress Bar</a></li>
                                        <li><a>Panels</a></li>
                                        <li><a>Rating</a></li>
                                        <li><a>Preloaders</a></li>
                                        <li><a>Hints</a></li>
                                        <li><a>Streamer</a></li>
                                        <li><a>Presenter</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Information</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Notify system</a></li>
                                        <li><a>Dialogs</a></li>
                                        <li><a>Window</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Date &amp; Time</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Calendar</a></li>
                                        <li><a>Datepicker</a></li>
                                        <li><a>Countdown</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Media</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Video player</a></li>
                                        <li><a>Audio player</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Tools</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Form Validator</a></li>
                                        <li><a>Draggable</a></li>
                                    </ul>
                                </li>
                                <li><a>Charms</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Events &amp; Hotkeys</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Event binding</a></li>
                                        <li><a>Hotkey binding</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Third-party</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a>Select2</a></li>
                                        <li><a>DataTables</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Utils</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li class="divider"></li>
                                        <li><a>Easing functions</a></li>
                                        <li><a>RequireJS</a></li>
                                        <li class="disabled"><a href="precode.html">PreCode</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle">Templates</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a>Start screen</a></li>
                                <li><a>News Portal</a></li>
                                <li><a>Login form</a></li>
                                <li><a>Admin with Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle">Community</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a>Forum</a></li>
                                <li><a>Github</a></li>
                                <li><a>Community Chat</a></li>
                                <li class="divider"></li>
                                <li><a>License</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="app-bar-pullbutton automatic" style="display: none;"></div>
                    <nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;">
                        <ul class="app-bar-pullmenubar hidden app-bar-menu"></ul>
                    </nav>
                </div>
            </header>
        </div>
        <div class="row_metro">
            <div id="sidebar" style="float:left;overflow: auto;">
                <ul class="sidebar0 compact darcula dark">
                    <li onclick="_toggle_sidebar()">
                        <a>
                            <span class="toggle_icon icon"></span>
                            <span class="title">收起</span>
                        </a>
                    </li>
                    <li onclick='$(".progress").data("progress").set(0)'>
                        <a>
                            <span class="mif-vpn-publ icon"></span>
                            <span class="title">websites</span>
                            <span class="counter">0</span>
                        </a>
                    </li>
                    <li class="stick">
                        <a class="">
                            <span class="mif-tree icon"></span>
                            <span class="title">Sub menu</span>
                            <span class="counter">4</span>
                        </a>
                        <ul class="d-menu" data-role="dropdown" style="display: none;">
                            <li><a onclick='$(".progress").data("progress").set(25)'><span class="mif-vpn-publ icon"></span> Subitem 1</a></li>
                            <li><a onclick='$(".progress").data("progress").set(50)'>Subitem 2</a></li>
                            <li><a onclick='$(".progress").data("progress").set(75)'>Subitem 3</a></li>
                            <li><a onclick='$(".progress").data("progress").set(100)'>Subitem 4</a></li>
                            <li class="disabled"><a>Subitem 5</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <span class="mif-drive-eta icon"></span>
                            <span class="title">Virtual machines</span>
                            <span class="counter">0</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="mif-cloud icon"></span>
                            <span class="title">Cloud services</span>
                            <span class="counter">0</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container2" style="float:left;background-color: /*#5F666A*/#FFFFFF;overflow: auto; border-radius:10px;">
                <div id="loading" data-role="preloader" data-type="cycle" data-style="color" style="position: absolute;right: 0;margin: 5px;display: none;opacity: 0;"></div>
                <div class="content container-fluid" style="padding :15px;">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="progress gradient-bar fixed-bottom" data-role="progress" style="position: fixed;background:transparent;margin:0;padding: 0;"></div>
</body>

</html>
