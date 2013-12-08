<body class="loginpage">

	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo">
            	<h1><span>NextGen</span></h1>
                <p>Admin Panel</p>
            </div><!--logo-->
            
            <br clear="all" /><br />
            
            <div class="nousername">
				<div class="loginmsg">Please Enter your Username</div>
            </div><!--nousername-->
            
            <div class="nopassword">
				<div class="loginmsg">Please Enter your Password.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="<?php echo base_url(); ?>public/images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="<?php echo base_url(); ?>admin/">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
             <?php
		if ($this->session->flashdata('error')){ 
		?>
            <div class="loginmsg"><?php echo $this->session->flashdata('error'); ?></div>
            <?php
		}
		?>
            <form id="login" action="<?php echo base_url(); ?>admin/signin/login_check" method="post">
            	
                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" name="username" id="username" />
                    </div>
                </div>
                
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="password" id="password" />
                    </div>
                </div>
                
                <button>Sign In</button>
                
                <div class="keep"><input type="checkbox" /> Keep me logged in</div>
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>
</html>