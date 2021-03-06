<?php
header("Access-Control-Allow-Origin: https://www.fusionmate.com");

?>

@include('templates/css')

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fusion Mate</title>


 <!--<script src="fusionmate/public/plugins/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>-->




    <style>
        /*            .mCS-autoHide{
                        
                        display:block !important;
                    }*/
        scrollbar[orient="vertical"] scrollbarbutton,
        scrollbar[orient="vertical"] slider{
            width: 2px !important;
        }


        /*    #editor { 
                margin: 0;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
            }*/
            .chosen-container-single .chosen-single div b {
    background-image: url(../img/select.png);
    background-repeat: no-repeat;
    background-position: inherit !important;
    margin-top: 8px !important;
}
        #snippetCode, #snippetArea {
            height: 165px;
        }
        .chosen-container-single .chosen-single div b{}
        .chosen-results{
            height: 200px !important;
        }
        .textareaCustom {
            -moz-appearance: textfield-multiline;
            -webkit-appearance: textarea;
            border: 1px solid gray;
            font: medium -moz-fixed;
            font: -webkit-small-control;
            height: 200px;
            overflow: auto;
            padding: 2px;
            resize: both;
        }

    </style>
</head>

<body id="body" >
    <div id="ip-container" class="ip-container">

        <!-- initial header -->
        <header class="ip-header">
            <h1 class="ip-logo">
                <center style="font-size:62px;color:#2196f3">fusionmate</center>
            </h1>
            <div class="ip-loader">
                <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                </svg>
            </div>
        </header>
        <div class="ip-main">
            <header id="header" class="clearfix" data-current-skin="blue">
                <ul class="header-inner">
                    <li id="menu-trigger" data-trigger="#sidebar">
                        <div class="line-wrap">
                            <div class="line top"></div>
                            <div class="line center"></div>
                            <div class="line bottom"></div>
                        </div>
                    </li>

                    <li class="logo hidden-xs">
                        <a href="index.html">Fusion Mate</a>
                    </li>

                    <li class="pull-right">
                        <ul class="top-menu">
                            <li id="toggle-width" data-toggle="tooltip" data-placement="bottom" title="Toggle SideBar">
                                <div class="toggle-switch">
                                    <input id="tw-switch" type="checkbox" hidden="hidden">
                                    <label for="tw-switch" class="ts-helper"></label>
                                </div>
                            </li>

                            <li id="top-search" data-toggle="tooltip" data-placement="bottom" title="Search">
                                <a href=""><i class="tm-icon zmdi zmdi-search"></i></a>
                            </li>

                            <li class="dropdown" id='messageNotificationContainer' onclick='getUnreadMessages("messages")'  data-toggle="tooltip" data-placement="bottom" title="Private Messages">
                                @yield('message-notifications-count')
                            </li>
                            <li class="dropdown" data-toggle="tooltip" id='generalNotificationContainer' data-placement="bottom" onclick='getUnreadMessages("general")'  title="General Messages">
                                @yield('general-notifications-count')
                            </li>

                            <!--
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview" id="notifications">
                                    <div class="lv-header">
                                        Notification
        
                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-clear="notification">
                                                    <i class="zmdi zmdi-check-all"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="fusionmate/public/plugins/img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="fusionmate/public/plugins/img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="fusionmate/public/plugins/img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="fusionmate/public/plugins/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="fusionmate/public/plugins/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
        
                                    <a class="lv-footer" href="">View Previous</a>
                                </div>
        
                            </div>-->
                    </li>
                    <li class="dropdown hidden-xs" data-toggle="tooltip" data-placement="bottom" title="Tasks">
                        <a data-toggle="dropdown" href="">
                            <i class="tm-icon zmdi zmdi-view-list-alt"></i>
                            <i class=""></i>
                        </a><!--
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tasks
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">HTML5 Validation Report</div>
        
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Google Chrome Extension</div>
        
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Social Intranet Projects</div>
        
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Bootstrap Admin Template</div>
        
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Youtube Client App</div>
        
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>-->
                    </li>
                    <li class="dropdown hidden-xs" id='joinNotificationContainer'  onclick='getUnreadMessages("join")' data-toggle="tooltip" data-placement="bottom" title="Invitations">
                        @yield('join-notifications-count')

                    </li>
                    <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="More Features">
                        <a id='quickSettings' data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="skin-switch hidden-xs">
                                <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                <span class="ss-skin bgm-blue" data-skin="blue"></span>
                            </li>
                            <li class="divider hidden-xs"></li>
                            <li class="hidden-xs">
                                <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            
                            <li>
                                <a  onclick='showWindow()'><i class="zmdi zmdi-face"></i> All Teams</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="hidden-xs" data-toggle="tooltip" data-placement="bottom" title="Start a new chat"  onclick='showAllTeamsMembers()'data-trigger="#chat" id="chat-trigger" >
                        <a href="" ><i class="tm-icon zmdi zmdi-comment-alt-text"></i></a>
                    </li>
                </ul>
                </li>
                </ul>


                <!-- Top Search Content -->
                <div id="top-search-wrap">
                    <div class="tsw-inner">
                        <i id="top-search-close" class="zmdi zmdi-arrow-left"></i>
                        <input type="text">
                    </div>
                </div>

            </header>
            <div id="customTopLoader" class="custom-top-loader">
                <center id="loaderText">Loading notification</center><div class="cs-loader">
                    <div class="cs-loader-inner">
                        <label>	●</label>
                        <label>	●</label>
                        <label>	●</label>
                        <label>	●</label>
                        <label>	●</label>
                        <label>	●</label>
                    </div>
                </div></div>
            <section id="main" style='padding-top: 63px !important;padding-bottom: 0 !important'>
                <aside id="sidebar" class="sidebar c-overflow" >
                    @yield('profile-elements')
                    <ul class="main-menu" id='team'>
                        <li id="dashboard"><a onclick="dashboard()"><i class="zmdi zmdi-home"></i> Dashboard</a></li>

                        @yield('admin-event-actions')
                        @yield('admin-team-settings')
                        <!--                    <li class="sub-menu">
                                                <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>
                        
                                                <ul>
                                                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                                                    <li><a href="form-components.html">Form Components</a></li>
                                                    <li><a href="form-examples.html">Form Examples</a></li>
                                                    <li><a href="form-validations.html">Form Validation</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-menu">
                                                <a href=""><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                                                <ul>
                                                    <li><a href="colors.html">Colors</a></li>
                                                    <li><a href="animations.html">Animations</a></li>
                                                    <li><a href="box-shadow.html">Box Shadow</a></li>
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="icons.html">Icons</a></li>
                                                    <li><a href="alerts.html">Alerts</a></li>
                                                    <li><a href="preloaders.html">Preloaders</a></li>
                                                    <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                                                    <li><a href="media.html">Media</a></li>
                                                    <li><a href="components.html">Components</a></li>
                                                    <li><a href="other-components.html">Others</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-menu">
                                                <a href=""><i class="zmdi zmdi-trending-up"></i>Charts</a>
                                                <ul>
                                                    <li><a href="flot-charts.html">Flot Charts</a></li>
                                                    <li><a href="other-charts.html">Other Charts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                                            <li class="sub-menu">
                                                <a href=""><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                                                <ul>
                                                    <li><a href="photos.html">Default</a></li>
                                                    <li><a href="photo-timeline.html">Timeline</a></li>
                                                </ul>
                                            </li>
                        
                                            <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                                            <li class="sub-menu toggled active">
                                                <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                                                <ul>
                        
                                                    <li><a href="profile-about.html">Profile</a></li>
                                                    <li><a href="list-view.html">List View</a></li>
                                                    <li><a class="active" href="messages.html">Messages</a></li>
                                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                                    <li><a href="contacts.html">Contacts</a></li>
                                                    <li><a href="wall.html">Wall</a></li>
                                                    <li><a href="invoice.html">Invoice</a></li>
                                                    <li><a href="login.html">Login and Sign Up</a></li>
                                                    <li><a href="lockscreen.html">Lockscreen</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                        
                                                </ul>
                                            </li>
                                            <li class="sub-menu">
                                                <a href="form-examples.html"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>
                        
                                                <ul>
                                                    <li><a href="form-elements.html">Level 2 link</a></li>
                                                    <li><a href="form-components.html">Another level 2 Link</a></li>
                                                    <li class="sub-menu">
                                                        <a href="form-examples.html">I have children too</a>
                        
                                                        <ul>
                                                            <li><a href="">Level 3 link</a></li>
                                                            <li><a href="">Another Level 3 link</a></li>
                                                            <li><a href="">Third one</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="form-validations.html">One more 2</a></li>
                                                </ul>
                                            </li>-->
                    </ul>
                </aside>

                <aside id="chat" class=" sidebar  "   >
                    <!--<div  style="overflow-y: scroll;"></div>-->

                </aside>


                <section id="content">
                    <div id="container" class="container">


                        <div id="messageMain" class="card m-b-0"  >

                        </div>
                    </div>
                </section>
            </section>

            <!--        <footer id="footer">
                        Copyright &copy; 2015 Material Admin
                        
                        <ul class="f-menu">
                            <li><a href="">Home</a></li>
                            <li><a href="">Dashboard</a></li>
                            <li><a href="">Reports</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </footer>-->

            <!-- Page Loader -->
            <!--<div class="page-loader">
                <div class="preloader pls-blue">
                   <img src="fusionmate/public/plugins/images/newloader.gif"/><br/>
            
                    <p>Please wait...</p>
                </div>
            </div>-->
            <!--tool bar options-->
            <div id="toolbar-options" class="hidden">
                <a id="edit" href="#"><i class="fa fa-plane"></i></a>
                <a id="delete" href="#"><i class="fa fa-car"></i></a>
                <a id="remove" href="#"><i class="fa fa-bicycle"></i></a>
            </div>

            <!-- Older IE warning message -->
            <!--[if lt IE 9]>
                <div class="ie-warning">
                    <h1 class="c-white">Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                    <div class="iew-container">
                        <ul class="iew-download">
                            <li>
                                <a href="http://www.google.com/chrome/">
                                    <img src="img/browsers/chrome.png" alt="">
                                    <div>Chrome</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.mozilla.org/en-US/firefox/new/">
                                    <img src="img/browsers/firefox.png" alt="">
                                    <div>Firefox</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.opera.com">
                                    <img src="img/browsers/opera.png" alt="">
                                    <div>Opera</div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.apple.com/safari/">
                                    <img src="img/browsers/safari.png" alt="">
                                    <div>Safari</div>
                                </a>
                            </li>
                            <li>
                                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                    <img src="img/browsers/ie.png" alt="">
                                    <div>IE (New)</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>   
            <![endif]-->

            <!-- Javascript Libraries -->
            @include('templates/scripts')
            <script>
            //Decalre all constants used by the application here

                var showChatBar = 0;
                var teamId = '';
                var channelId = '<?php echo Session::get('channelId') ?>';
                var userId = '<?php echo Session::get('userId') ?>';
                var firstName = '<?php echo Session::get('firstName') ?>';
                var profilePic = '<?php echo Session::get('profilePic') ?>';
                var sideBarAddNewTeamCount = 0;
                var sideBarAddNewMemberCount = 0;
                var activeSidbarTeamMenuId = '';
                var initialActiveSidbarTeamMenuIdCount = 0;
                var limit = '<?php echo Config::get('constants.constants_list.MEMBER_LIMIT'); ?>'
                var base_url = '<?php echo Config::get('constants.constants_list.BASE_URL'); ?>'
                var socket_url = '<?php echo Config::get('constants.constants_list.SOCKET_URL'); ?>'
                var browserTabActiveFlag = 0;
                var currentUserActiveFlag = '';
                var socketDisconnectFlag = 0;
                var onPageLoadFlag = 0;
                var activeMessageWindowId = '';
                var messageNotificationExpanded = false;
                var generalNotificationExpanded = false;
                var joinNotificationExpanded = false;
                var dashboardWindowFlag = 0;
                var chatOrTeamListWindowFlag = 0;
                var addCount = 0;
                var loaderFlag = false;
                var latitude = '';
                var longitude = '';
                var activeChannelId;
                var filename;
                var msgBody;
                var thought;
                var snippetBody;
                var personalOrGeneral = '';
                var fileUpload = '';
                var snippetUpload = '';
                var FilePath = '';
                var fileExtension;
                var fileName;
                var fileErroFlag = 0;
                var snippetCode;
                var programmingLanguage;
                //Store last sent message id. 
                //**Can be also used to validated whether message was sent successfully or not by checking this varaible as emtpy
                var lastSuccessfulMessageId = '';
                var lastSavedTaskId;//to perform rollback operations
                var uploadedSnippetLang;
                var settingsTeamId = '';
                var settingsTeamIdDecoded = '';


 



            </script>


            @include('templates/dropzone_chat_file_modal/file_chat_modal')
            @include('templates/snippet/snippet_create_modal')
            @include('templates/snippet/snippet_view_modal')
        </div>
    </div>
</body>
</html>





