
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?=$this->config->item("site_title");?></title>
   

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Force IE9 to render in normal mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Le styles -->
    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />
    <!-- Text -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> 
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link id="bootstrap" href="<?=asset_url('css/bootstrap/bootstrap.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url('css/bootstrap/bootstrap-theme.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url('css/supr-theme/jquery.ui.supr.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?=asset_url('css/icons.css')?>" rel="stylesheet" type="text/css" />

    <!-- Plugins stylesheets -->
    <link href="<?=asset_url('plugins/misc/qtip/jquery.qtip.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url('plugins/misc/fullcalendar/fullcalendar.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=asset_url('plugins/misc/search/tipuesearch.css')?>" type="text/css" rel="stylesheet" />

    <link href="<?=asset_url('plugins/forms/uniform/uniform.default.css')?>" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="<?=asset_url('css/main.css')?>" rel="stylesheet" type="text/css" /> 

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="<?=asset_url('css/custom.css')?>" rel="stylesheet" type="text/css" /> 

    <!--[if IE 8]><link href="<?=asset_url('css/ie8.css')?>" rel="stylesheet" type="text/css" /><![endif]-->
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?=asset_url('js/libs/excanvas.min.js')?>"></script>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script type="text/javascript" src="="<?=asset_url('js/libs/respond.min.js')?>"></script>
    <![endif]-->
    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=asset_url('images/favicon.ico')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=asset_url('images/apple-touch-icon-144-precomposed.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=asset_url('images/apple-touch-icon-114-precomposed.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=asset_url('images/apple-touch-icon-72-precomposed.png')?>" />
    <link rel="apple-touch-icon-precomposed" href="<?=asset_url('images/apple-touch-icon-57-precomposed.png')?>" />
    
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="application-name" content="Supr"/> 
    <meta name="msapplication-TileColor" content="#3399cc"/> 

    <!-- Load modernizr first -->
    <script type="text/javascript" src="<?=asset_url('js/modernizr.js')?>"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?=asset_url('js/bootstrap/bootstrap.js')?>"></script> 

    </head>
    <body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
    
    <div id="header">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.html">Supr.<span class="slogan">admin</span></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon16 icomoon-icon-arrow-4"></span>
                </button>
            </div> 
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard.html"><span class="icon16 icomoon-icon-screen-2"></span> <span class="txt">Dashboard</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-cog"></span><span class="txt"> Settings</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li><a href="#"><span class="icon16 icomoon-icon-equalizer"></span>Site config</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-wrench"></span>Plugins</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-image-2"></span>Themes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-envelop"></span><span class="txt">Messages</span><span class="notification">8</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul class="messages">    
                                    <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                    <li>
                                       <span class="icon"><span class="icon16 icomoon-icon-user-plus"></span></span>
                                        <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                        <span class="msg">I have question about new function ...</span>
                                    </li>
                                    <li>
                                       <span class="icon avatar"><img src="<?=asset_url('images/avatar.jpg');?>" alt="" /></span>
                                        <span class="name"><a data-toggle="modal" href="#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                        <span class="msg">I need to meet you urgent please call me ...</span>
                                    </li>
                                    <li>
                                        <span class="icon"><span class="icon16 icomoon-icon-envelop"></span></span>
                                        <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                        <span class="msg">I send you my suggestion, please look and ...</span>
                                    </li>
                                    <li class="view-all"><a href="#">View all messages <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
              
                <ul class="nav navbar-right usernav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-bell"></span><span class="notification">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul class="notif">
                                    <li class="header"><strong>Notifications</strong> (3) items</li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><span class="icon16 icomoon-icon-user-plus"></span></span>
                                            <span class="event">1 User is registred</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><span class="icon16 icomoon-icon-bubble-3"></span></span>
                                            <span class="event">Jony add 1 comment</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><span class="icon16 icomoon-icon-new"></span></span>
                                            <span class="event">admin Julia added post with a long description</span>
                                        </a>
                                    </li>
                                    <li class="view-all"><a href="#">View all notifications <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                            <img src="<?=asset_url('images/avatar.jpg');?>" alt="" class="image" /> 
                            <span class="txt">admin@supr.com</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li><a href="#"><span class="icon16 icomoon-icon-user-plus"></span>Edit profile</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-bubble-2"></span>Approve comments</a></li>
                                    <li><a href="#"><span class="icon16 icomoon-icon-plus"></span>Add user</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?=site_url('auth/logout');?>"><span class="icon16 icomoon-icon-exit"></span><span class="txt"> Logout</span></a></li>
                </ul>
            </div><!-- /.nav-collapse -->
        </nav><!-- /navbar --> 

    </div><!-- End #header -->