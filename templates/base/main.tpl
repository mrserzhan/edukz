<!DOCTYPE html>
<html>
    <head>
        <title>{block name="title"}EDU.kz{/block}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <link type="text/css" rel="stylesheet" href="{template url="css/bootstrap.css"}" />
        <link type="text/css" rel="stylesheet" href="{template url="css/bootstrap-responsive.css"}" />
        <link type="text/css" rel="stylesheet" href="{template url="css/style.css"}" />

        <script type="text/javascript" src="{template url="js/jquery.min.js"}"></script>
        <script type="text/javascript" src="{template url="js/bootstrap.js"}"></script>

        {block name="include"}{/block}
    </head>
    <body>
        {block name="menu"}
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{base_url()}">EDU.kz</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav">
                            <li class="{block name="page_home"}{/block}"><a href="{base_url()}">Home</a></li>
                            <li class="{block name="page_groups"}{/block} dropdown">
                                <a href="{base_url()}groups/" class="dropdown-toggle" data-toggle="dropdown">Groups <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{base_url()}groups/">Groups</a></li>
                                    <li><a href="{base_url()}groups/add">Add group</a></li>
                                </ul>
                            </li>
                            <li class="{block name="page_users"}{/block} dropdown">
                                <a href="{base_url()}users/" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{base_url()}users/">Users</a></li>
                                    <li><a href="{base_url()}users/add">Add user</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {/block}
        {block name="content"}
        <div class="container-fluid">

        </div>
        {/block}


        <footer class="footer">
            <div class="container">
                <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
                <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
                <ul class="footer-links">
                    <li><a href="http://blog.getbootstrap.com">Blog</a></li>
                    <li class="muted">*</li>
                    <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
                    <li class="muted">*</li>
                    <li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap and changelog</a></li>
                </ul>
            </div>
        </footer>

    </body>
</html>
