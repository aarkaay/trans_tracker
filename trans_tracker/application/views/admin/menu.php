<body class="withvernav">

<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">Genext</h1>
            <!--
            <div class="search">
            	<form action="" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<div class="notification">
                <!--<a class="count" href="ajax/notifications.html"><span>9</span></a>-->
        	</div>
            <div class="userinfo">
            	<img src="<?php echo base_url(); ?>public/images/thumbs/avatar.png" alt="" />
                <span><?php echo $this->session->userdata['admin_fname']; ?> <?php echo $this->session->userdata['admin_lname']; ?></span>
            </div><!--userinfo-->
            <?php
            //echo "<pre>";print_r($this->session->userdata);echo"</pre>";
            ?>
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href=""><img src="<?php echo base_url(); ?>public/images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                    	
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                	<h4><?php echo $this->session->userdata['admin_fname']; ?> <?php echo $this->session->userdata['admin_lname']; ?></h4>
                    <span class="email"><?php echo $this->session->userdata['admin_email']; ?></span>
                    <ul>
                    	
                        <li><a href="<?php echo base_url(); ?>admin/dashboard/signout">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li class="current"><a href="<?php echo base_url(); ?>admin/dashboard/"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/master/country/"><span class="icon icon-pencil"></span>Country</a></li>-->
            <!--<li><a href="<?php echo base_url(); ?>admin/master/state/"><span class="icon icon-message"></span>State</a></li>-->
            <!--<li><a href="<?php echo base_url(); ?>admin/master/city/"><span class="icon icon-chart"></span>City</a></li>-->
        </ul>
        
      
        
        
    </div><!--header-->
    
    <div class="vernav2 iconmenu">
    	<ul>
        	<li><a href="#formsub" class="editor">User</a>
            	<span class="arrow"></span>
<!--            	<ul id="formsub">
               		<li><a href="<?php echo base_url(); ?>/admin/college/college_cat">College categories</a></li>
                    <li><a href="#">College</a></li>
                </ul>-->
            </li>
            <!--
            <li><a href="filemanager.html" class="gallery">File Manager</a></li>
            <li><a href="elements.html" class="elements">Elements</a></li>
            <li><a href="widgets.html" class="widgets">Widgets</a></li>
            <li><a href="calendar.html" class="calendar">Calendar</a></li>
            <li><a href="support.html" class="support">Customer Support</a></li>
            <li><a href="typography.html" class="typo">Typography</a></li>
            <li><a href="tables.html" class="tables">Tables</a></li>
			<li><a href="buttons.html" class="buttons">Buttons &amp; Icons</a></li>
            <li><a href="#error" class="error">Error Pages</a>
            	<span class="arrow"></span>
            	<ul id="error">
               		<li><a href="notfound.html">Page Not Found</a></li>
                    <li><a href="forbidden.html">Forbidden Page</a></li>
                    <li><a href="internal.html">Internal Server Error</a></li>
                    <li><a href="offline.html">Offline</a></li>
                </ul>
            </li>
            <li><a href="#addons" class="addons">Addons</a>
            	<span class="arrow"></span>
            	<ul id="addons">
               		<li><a href="newsfeed.html">News Feed</a></li>
                    <li><a href="profile.html">Profile Page</a></li>
                    <li><a href="productlist.html">Product List</a></li>
                    <li><a href="photo.html">Photo/Video Sharing</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                </ul>
            </li>-->
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
       
    