<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#common_form").validate({
		rules: {
			co_name: "required"
			
		},
		messages: {
			co_name: "Please enter your category"
		},
		
		submitHandler: function (form) {
            // form validates so do the ajax

           
            var datastring = jQuery("#common_form").serialize();
            jQuery.ajax({
                type: "POST",
	            data: datastring,
	            url:'<?php echo base_url(); ?>/admin/college/add_college_cat',
	            success: function(data) {
	                 alert('Data Saved');
	                 jQuery("input[type=text], textarea").val("");
	            }
            });
            
            return false; // ajax used, block the normal submit
        }
	});
	
	
});
</script>
<div class="centercontent tables">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">College Category</h1>
            <span class="pagedesc"></span>
            <ul class="hornav">
                <li class="current"><a href="#listing">Lisitng</a></li>
                <li class=""><a href="#adding">Add College Category</a></li>
            </ul>
        </div><!--pageheader-->
        <!--<div class="two_third dashboard_left">
        	<ul class="shortcuts">
            	<li><a class="settings" href=""><span>Add Country</span></a></li>
            </ul>
        </div>-->
        <br clear="all">
        <div id="contentwrapper" class="contentwrapper">
               <div id="listing" class="subcontent" style="display: block;">         
                <div class="contenttitle2">
                	<h3>College Category</h3>
                </div><!--contenttitle-->
                <div class="tableoptions">
                	<button class="deletebutton radius3" title="table1">Delete Selected</button> &nbsp;
                    
                    <input type="text" class="radius3">&nbsp;
                    <button class="radius3">Search</button>
                </div><!--tableoptions-->	
                <table cellpadding="0" cellspacing="0" border="0" id="table1" class="stdtable stdtablecb">
                    <colgroup>
                        <col class="con0" style="width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                        	<th class="head0"><input type="checkbox" class="checkall" /></th>
                            <th class="head1">Category Name</th>
                            <th class="head0">Date Added</th>
                        </tr>
                    </thead>
                 
                    <tbody>
                    	<?php
                    	if(count($detail) > 0)
                    	{
                    		foreach ($detail as $key => $value) {
						?>
						
                        <tr>
                        	<td align="center"><input type="checkbox" /></td>
                            <td><?php echo $value['co_name']; ?></td>
                            <td><?php echo $value['co_dateadded']; ?></td>
                        </tr>
                        <?php		
							}
                    	}
                    	?>
                        
                    </tbody>
                </table>
                
            
               </div>
               <div id="adding" class="subcontent" style="display:none ;">
            	
                    <form id="common_form" class="stdform" method="post" action="" novalidate="novalidate">
                    	<p>
                        	<label>College Category Name</label>
                            <span class="field"><input type="text" name="co_name" id="co_name" class="longinput"></span>
                        </p>
                        
                        <br>
                        
                        <p class="stdformbutton">
                        	<!--<button class="submit_button">Submit Button</button>-->
                        	<input type="submit" class="submit_button" name="submit_value" value="Submit" />
                        </p>
                    </form>

            </div>
                
                
        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>