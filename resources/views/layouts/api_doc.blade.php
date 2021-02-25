<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>API Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="api_doc/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="api_doc/css/prism.css" rel="stylesheet" />
        <link href="api_doc/css/style.css" rel="stylesheet" media="screen, print">
        <link href="api_doc/img/favicon.ico" rel="icon" type="image/x-icon">
        <script src="api_doc/js/polyfill.js"></script>
    </head>
    <body class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                @section('sidebar')
                    <div id="sidenav" class="span2">
                        <nav id="scrollingNav">
                            <div class="sidenav-search">
                                <input class="form-control search" type="text" placeholder="Filter...">
                                <span class="search-reset">x</span>
                            </div>
                            <ul class="sidenav nav nav-list list">
                                <li class="nav-fixed nav-header navbar-btn nav-list-item" data-group="_">
                                    <a href="#api-_" data-name="show-api-_" class="show-api api-_-init">General</a>
                                </li>
                                <li class="nav-header nav-list-item" data-group="User">
                                    <a href="#api-User" data-group="show-api-User" class="show-group api-User-init">User</a>
                                </li>
                                <li class="" data-group="User" data-name="GetUser" data-version="0.3.0">
                                    <a href="#api-User-GetUser" title="/user/:id" data-group="show-api-User" data-name="show-api-User-GetUser" class="nav-list-item show-api api-User-GetUser-init">Read data of a User<div class="nav-list-url-item hide">/user/:id</div></a>
                                </li>
                                <li class="hide" data-group="User" data-name="GetUser" data-version="0.2.0">
                                    <a href="#api-User-GetUser" title="/user/:id" data-group="show-api-User" data-name="show-api-User-GetUser" class="nav-list-item show-api api-User-GetUser-init">Read data of a User<div class="nav-list-url-item hide">/user/:id</div></a>
                                </li>
                                <li class="hide" data-group="User" data-name="GetUser" data-version="0.1.0">
                                    <a href="#api-User-GetUser" title="/user/:id" data-group="show-api-User" data-name="show-api-User-GetUser" class="nav-list-item show-api api-User-GetUser-init">Read data of a User<div class="nav-list-url-item hide">/user/:id</div></a>
                                </li>
                                <li class="" data-group="User" data-name="PostUser" data-version="0.3.0">
                                    <a href="#api-User-PostUser" title="/user" data-group="show-api-User" data-name="show-api-User-PostUser" class="nav-list-item show-api api-User-PostUser-init">Create a new User<div class="nav-list-url-item hide">/user</div></a>
                                </li>
                                <li class="hide" data-group="User" data-name="PostUser" data-version="0.2.0">
                                    <a href="#api-User-PostUser" title="/user" data-group="show-api-User" data-name="show-api-User-PostUser" class="nav-list-item show-api api-User-PostUser-init">Create a User<div class="nav-list-url-item hide">/user</div></a>
                                </li>
                                <li class="is-new" data-group="User" data-name="PutUser" data-version="0.3.0">
                                    <a href="#api-User-PutUser" title="/user/:id" data-group="show-api-User" data-name="show-api-User-PutUser" class="nav-list-item show-api api-User-PutUser-init">Change a new User<div class="nav-list-url-item hide">/user/:id</div></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                @show

                <div id="content">
                    @yield('content')
                </div>
            </div>
          </div>
    </body>
</html>
