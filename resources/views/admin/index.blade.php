@extends('layouts.admin')

@section('content')
    
    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!--THEME SETTINGS-->
    <div class="widget-theme-settings t-theme-settings-1"><a href="#" class="theme-settings-toggle"><i class="fa fa-cog"></i></a>
      <div class="theme-settings-wrapper">
        <h3>General Settings</h3>
        <div class="hide switchery-success"></div>
        <div class="hide switchery-info"></div>
        <div class="hide switchery-warning"></div>
        <div class="theme-settings-row">
          <h4 class="theme-skin-title">Base Font Size</h4>
          <input id="spinnerBaseFont" type="text" value="14" name="spinnerBaseFont" placeholder="Html base font" title="REM based font sizing." class="tt-theme-settings">
        </div>
        <hr>
        <div class="l-row theme-settings-row">
          <div class="l-span-xs-7">
            <label for="boxedLayout">Boxed Layout</label>
          </div>
          <div class="l-span-xs-5 theme-settings-input">
            <input id="boxedLayout" type="checkbox" class="switcheryBoxed">
          </div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
          <div class="l-span-xs-7">
            <label for="fixedHeader">Fixed Header</label>
          </div>
          <div class="l-span-xs-5 theme-settings-input">
            <input id="fixedHeader" type="checkbox" class="switcheryFixedHeader">
          </div>
        </div>
        <div class="l-row theme-settings-row">
          <div class="l-span-xs-7">
            <label for="stickyHeader">Sticky Header</label>
          </div>
          <div class="l-span-xs-5 theme-settings-input">
            <input id="stickyHeader" type="checkbox" class="switcheryStickyHeader">
          </div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
          <div class="l-span-xs-7">
            <label for="fixedFooter">Fixed Footer</label>
          </div>
          <div class="l-span-xs-5 theme-settings-input">
            <input id="fixedFooter" type="checkbox" class="switcheryFixedFooter">
          </div>
        </div>
        <div class="l-row theme-settings-row">
          <div class="l-span-xs-7">
            <label for="stickyFooter">Sticky Footer</label>
          </div>
          <div class="l-span-xs-5 theme-settings-input">
            <input id="stickyFooter" type="checkbox" class="switcheryStickyFooter">
          </div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
          <div class="l-span-xs-7">
            <label>Main Menu</label>
          </div>
          <div class="l-span-xs-5 theme-settings-input"><a href="layout-menu.html" data-placement="left" title="For more Menu Options check out the documentation." class="theme-settings-info tt-theme-settings"><i class="fa fa-info"></i></a></div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
          <div class="l-span-xs-7">
            <label>Sidebar</label>
          </div>
          <div class="l-span-xs-5 theme-settings-input"><a href="layout-sidebar-left.html" data-placement="left" title="For more Sidebar Options check out the 'Layouts -&gt; Sidebar' section." class="theme-settings-info tt-theme-settings"><i class="fa fa-info"></i></a></div>
        </div>
      </div>
    </div>
    <!--THEME SETTINGS-->
    <div class="widget-theme-settings t-theme-settings-2"><a href="#" class="theme-settings-toggle"><i class="fa fa-paint-brush"></i></a>
      <div class="theme-settings-wrapper">
        <h3>Theme Settings</h3>
        <div class="theme-collapsible-cointainer">
          <div data-ason-type="scrollbar" data-ason-max-height="400px" class="ason-widget">
            <div id="themeSection1" class="theme-collapsible">Default<span></span></div>
            <div>
              <div class="cont">
                <div class="content"><a href="undefinedpage-blank.html" title="Amber" class="theme-skin-wrapper skin-default tt-theme-settings">
                    <div class="l-row">
                      <div class="l-span-xs-4 theme-skin skin-c-1"></div>
                      <div class="l-span-xs-4 theme-skin skin-c-2"></div>
                      <div class="l-span-xs-4 theme-skin skin-c-3"></div>
                    </div></a><a href="undefinedpage-blank.html" title="Medium Purple" class="theme-skin-wrapper skin-medium-purple tt-theme-settings">
                    <div class="l-row">
                      <div class="l-span-xs-3 theme-skin skin-c-1"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-2"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-3"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-4"></div>
                    </div></a>
                </div>
              </div>
            </div>
            <div id="themeSection2" class="theme-collapsible">Material<span></span></div>
            <div>
              <div class="cont">
                <div class="content">
                  <div title="Material Design Soon" class="theme-skin-wrapper skin-soon tt-theme-settings">
                    <div class="l-row">
                      <div class="l-span-xs-12 theme-skin skin-c-soon">Material Design Soon</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--SECTION-->
    <section class="l-main-container">
      <!--Left Sidebar Content-->
      <aside id="sb-left" class="l-sidebar l-sidebar-1 t-sidebar-1">
        <!--Switcher-->
        <div class="l-side-box"><a href="#" data-ason-type="sidebar" data-ason-to-sm="sidebar" data-ason-target="#sb-left" class="sidebar-switcher switcher t-switcher-side ason-widget"><i class="fa fa-bars"></i></a></div>
        <div class="l-side-box">
          <!--Logo-->
          <div class="widget-logo logo-in-side">
            <h1><a href="index.html"><span class="logo-default visible-default-inline-block"><img src="img/logo.png" alt="Proteus"></span><span class="logo-medium visible-compact-inline-block"><img src="img/logo_medium.png" alt="Proteus" title="PROTEUS"></span>
                <spanl class="logo-small visible-collapsed-inline-block"><img src="img/logo_small.png" alt="Proteus" title="PROTEUS"></spanl></a></h1>
          </div>
        </div>
        <!--Main Menu-->
        <div class="l-side-box">

          @include('admin.menu')
        </div>
      </aside>
      <!--Main Content-->
      <section class="l-container">
        <!--HEADER-->
        <header class="l-header l-header-1 t-header-1">
          <div class="navbar navbar-ason">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#ason-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand widget-logo"><span class="logo-default-header"><img src="img/logo_dark.png" alt="Proteus"></span></a>
              </div>
              <div id="ason-navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li>
                    <!-- Task Widget-->
                    <div class="widget-task task-in-header dropdown dropdown-in-header"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-tasks"></i><span class="label label-danger">4</span></a>
                      <ul role="menu" class="dropdown-menu">
                        <li class="dropdown-menu-header">Tasks<span class="label label-danger">4</span></li>
                        <li>
                          <div class="l-row">
                            <div class="l-col-sm-8">Project Overview</div>
                            <div class="l-col-sm-4 tar">68%</div>
                          </div>
                          <div class="progress progress-no-border progress-mini">
                            <div style="width: 25%" class="progress-bar progress-bar-info"><span class="sr-only">25% Complete (success)</span></div>
                            <div style="width: 18%" class="progress-bar progress-bar-success"><span class="sr-only">18% Complete (success)</span></div>
                            <div style="width: 12%" class="progress-bar progress-bar-danger"><span class="sr-only">12% Complete (warning)</span></div>
                            <div style="width: 16%" class="progress-bar progress-bar-warning"><span class="sr-only">16% Complete (danger)</span></div>
                          </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <div class="l-row">
                            <div class="l-col-sm-8">Page Design</div>
                            <div class="l-col-sm-4 tar">75%</div>
                          </div>
                          <div class="progress progress-no-border progress-mini">
                            <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;" class="progress-bar progress-bar-info"><span class="sr-only">75% Complete</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="l-row">
                            <div class="l-col-sm-8">Front-End development</div>
                            <div class="l-col-sm-4 tar">50%</div>
                          </div>
                          <div class="progress progress-no-border progress-mini">
                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-success"><span class="sr-only">50% Complete</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="l-row">
                            <div class="l-col-sm-8">Back-End development</div>
                            <div class="l-col-sm-4 tar">35%</div>
                          </div>
                          <div class="progress progress-no-border progress-mini">
                            <div role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;" class="progress-bar progress-bar-danger"><span class="sr-only">35% Complete</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="l-row">
                            <div class="l-col-sm-8">Database design</div>
                            <div class="l-col-sm-4 tar">40%</div>
                          </div>
                          <div class="progress progress-no-border progress-mini">
                            <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-warning"><span class="sr-only">40% Complete</span></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <!-- Message Widget-->
                    <div class="widget-message message-in-header dropdown dropdown-in-header"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-envelope"></i><span class="label label-info">5</span></a>
                      <ul role="menu" class="dropdown-menu">
                        <li class="dropdown-menu-header">Messages<span class="label label-info">5</span></li>
                        <li data-ason-type="scrollbar" class="msg-content ason-widget">
                          <ul>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_1.jpg"></div>
                                  <div class="l-col-xs-7 msg-info">
                                    <h4>Harold Holland</h4>
                                    <p>John, don't forget tomorrow we have a meeting</p>
                                    <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; 5 minutes ago</span></div>
                                  </div>
                                  <div class="l-col-xs-2 msg-status">
                                    <ul>
                                      <li>
                                        <div data-toggle="tooltip" data-placement="bottom" title="Mark as read" class="msg-tip"><i class="fa fa-circle-o"></i></div>
                                      </li>
                                      <li><span class="label label-info">New</span></li>
                                    </ul>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_2.jpg"></div>
                                  <div class="l-col-xs-7 msg-info">
                                    <h4>Barbara Curtis</h4>
                                    <p>Tomorrow is movie night, don't forget it</p>
                                    <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; 40 minutes ago</span></div>
                                  </div>
                                  <div class="l-col-xs-2 msg-status">
                                    <ul>
                                      <li>
                                        <div data-toggle="tooltip" title="Mark as read" class="msg-tip"><i class="fa fa-circle-o"></i></div>
                                      </li>
                                      <li><span class="label label-info">New</span></li>
                                    </ul>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_3.jpg"></div>
                                  <div class="l-col-xs-7 msg-info">
                                    <h4>Gary Fernandez</h4>
                                    <p>Check out our brand new product, you will love it !!!</p>
                                    <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; 12:00 AM</span></div>
                                  </div>
                                  <div class="l-col-xs-2 msg-status">
                                    <ul>
                                      <li>
                                        <div data-toggle="tooltip" title="Mark as read" class="msg-tip"><i class="fa fa-circle-o"></i></div>
                                      </li>
                                    </ul>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_4.jpg"></div>
                                  <div class="l-col-xs-7 msg-info">
                                    <h4>Kristina Wade</h4>
                                    <p>Congratulation for your new promotion</p>
                                    <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; Dec 24, 2014 at 2:32 PM</span></div>
                                  </div>
                                  <div class="l-col-xs-2 msg-status">
                                    <ul>
                                      <li>
                                        <div data-toggle="tooltip" title="Mark as unread" class="msg-tip"><i class="fa fa-circle"></i></div>
                                      </li>
                                    </ul>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_5.jpg"></div>
                                  <div class="l-col-xs-7 msg-info">
                                    <h4>Eugene Powell</h4>
                                    <p>Check out our new top selling products</p>
                                    <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; Nov 12, 2014 at 8:15 PM</span></div>
                                  </div>
                                  <div class="l-col-xs-2 msg-status">
                                    <ul>
                                      <li>
                                        <div data-toggle="tooltip" title="Mark as unread" class="msg-tip"><i class="fa fa-circle"></i></div>
                                      </li>
                                    </ul>
                                  </div>
                                </div></a></li>
                          </ul>
                        </li>
                        <li class="dropdown-menu-footer"><a href="app-mail.html">View all messages</a></li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <!-- Notification Widget-->
                    <div class="widget-notification notification-in-header dropdown dropdown-in-header"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-bell"></i><span class="label label-success">5</span></a>
                      <ul role="menu" class="dropdown-menu">
                        <li class="dropdown-menu-header">Notification<span class="label label-success">5</span></li>
                        <li class="nft-content">
                          <ul>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-2 nft-icon text-info"><i class="fa fa-user"></i></div>
                                  <div class="l-col-xs-6 nft-info">
                                    <p>New User Sign Up</p>
                                  </div>
                                  <div class="l-col-xs-2 time"><span>15 min</span></div>
                                  <div class="l-col-xs-2 nft-status">
                                    <div data-toggle="tooltip" title="Mark as read" class="nft-tip"><i class="fa fa-circle-o"></i></div>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-2 nft-icon"><i class="fa fa-shopping-cart text-success"></i></div>
                                  <div class="l-col-xs-6 nft-info">
                                    <p>New Order</p>
                                  </div>
                                  <div class="l-col-xs-2 time"><span>31 min</span></div>
                                  <div class="l-col-xs-2 nft-status">
                                    <div data-toggle="tooltip" title="Mark as read" class="nft-tip"><i class="fa fa-circle-o"></i></div>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-2 nft-icon"><i class="fa fa-comment text-warning"></i></div>
                                  <div class="l-col-xs-6 nft-info">
                                    <p>New Comment</p>
                                  </div>
                                  <div class="l-col-xs-2 time"><span>07/02/14</span></div>
                                  <div class="l-col-xs-2 nft-status">
                                    <div data-toggle="tooltip" title="Mark as read" class="nft-tip"><i class="fa fa-circle-o"></i></div>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-2 nft-icon"><i class="fa fa-database text-danger"></i></div>
                                  <div class="l-col-xs-6 nft-info">
                                    <p>Database Updated</p>
                                  </div>
                                  <div class="l-col-xs-2 time"><span>09/24/14</span></div>
                                  <div class="l-col-xs-2 nft-status">
                                    <div data-toggle="tooltip" title="Mark as unread" class="nft-tip"><i class="fa fa-circle"></i></div>
                                  </div>
                                </div></a></li>
                            <li><a href="#">
                                <div class="l-row">
                                  <div class="l-col-xs-2 nft-icon"><i class="fa fa-code-fork text-primary"></i></div>
                                  <div class="l-col-xs-6 nft-info">
                                    <p>Github Fork Updated</p>
                                  </div>
                                  <div class="l-col-xs-2 time"><span>11/12/14</span></div>
                                  <div class="l-col-xs-2 nft-status">
                                    <div data-toggle="tooltip" title="Mark as unread" class="nft-tip"><i class="fa fa-circle"></i></div>
                                  </div>
                                </div></a></li>
                          </ul>
                        </li>
                        <li class="dropdown-menu-footer"><a href="#">View all notifications</a></li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <!-- Search Widget-->
                    <div class="widget-search search-in-header is-search-right t-search-1">
                      <form role="form" action="page-search.html">
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <!-- Profile Widget-->
                    <div class="widget-profile profile-in-header">
                      <button type="button" data-toggle="dropdown" class="btn dropdown-toggle"><span class="name">William Jones</span><img src="img/profile/profile.jpg"></button>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="page-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                        <li><a href="app-mail.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                        <li class="lock"><a href="page-lock-screen.html"><i class="fa fa-lock"></i>Log Out</a></li>
                        <li class="power"><a href="page-login.html"><i class="fa fa-power-off"></i>Sign Out</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </header>
        <div class="l-page-header">
          <h2 class="l-page-title"><span>Mangue</span> Tecnologia</h2>
          <!--BREADCRUMB-->
          <ul class="breadcrumb t-breadcrumb-page">
            <li><a href="index.html">Home</a></li>
            <li>Site</li>
            <li class="active">Blank</li>
          </ul>
        </div>
        <div class="l-spaced-vertical">
          <div class="l-box no-border">
            <div class="l-spaced">
              <p>Painel de administração<strong> Toypeças</strong></p>
              {{--<p>You will also find a <strong>Sass template</strong> in the modules (<strong>page_blank.scss</strong>) and widgets(<strong>widget_blank.scss</strong>) directories.</p>--}}
              {{--<p>For more information check out the <strong> documentation </strong>.</p>--}}
            </div>
          </div>
        </div>
        <!--FOOTER-->
        <footer class="l-footer l-footer-1 t-footer-1">
          <div class="group pt-10 pb-10 ph">
            <div class="copyright pull-left">
              © Copyright 2017
              <a href="#">Toypeças</a>
              Desenvolvido por
              <a href="http://manguetecnologia.com.br">Mangue Tecnologia</a>
              Todos os direitos resevados.
            </div>
            <div class="version pull-right">v 1.9</div>
          </div>
        </footer>
      </section>
    </section>
@endsection