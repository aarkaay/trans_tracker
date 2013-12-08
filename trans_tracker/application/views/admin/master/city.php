<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#common_form").validate({
		rules: {
			mci_name: "required",
			mci_cid: "required",
			mci_sid: "required"
			
		},
		messages: {
			mci_name: "Please enter your city",
			mci_cid: "Please select your country",
			mci_sid: "Please select your state"
		},		
		submitHandler: function (form) {
            // form validates so do the ajax

           
            var datastring = jQuery("#common_form").serialize();
            jQuery.ajax({
                type: "POST",
	            data: datastring,
	            url:'<?php echo base_url(); ?>/admin/master/add_city',
	            success: function(data) {
	                 alert('Data Saved');
	                 jQuery("input[type=text], textarea").val("");
	            }
            });
            
            return false; // ajax used, block the normal submit
        }
	});
	
	jQuery('#mci_cid').bind("change",function(){
      var id = jQuery(this).val();
      if(id==="Choose one")
      {
             return FALSE;
      }
      else
      {
      	// var datastring = jQuery("#common_form").serialize();
            jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>/admin/master/getMasterState",
            data: 'cid='+id,
            success: function(msg){
                //alert(msg);
                jQuery("#mci_sid").html("");
                jQuery("#mci_sid").html(msg);
            }
        });
      }

    });
});
</script>
<div class="centercontent tables">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Master City</h1>
            <span class="pagedesc"></span>
            <ul class="hornav">
                <li class="current"><a href="#listing">Lisitng</a></li>
                <li class=""><a href="#adding">Add City</a></li>
            </ul>
        </div><!--pageheader-->
       
        <br clear="all">
        <div id="contentwrapper" class="contentwrapper">
               <div id="listing" class="subcontent" style="display: block;">         
                <div class="contenttitle2">
                	<h3>City</h3>
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
                         <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                        	<th class="head0"><input type="checkbox" class="checkall" /></th>
                            <th class="head1">Country Name</th>
                            <th class="head1">State Name</th>
                            <th class="head1">City Name</th>
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
                            <td><?php echo $value['mc_name']; ?></td>
                            <td><?php echo $value['ms_name']; ?></td>
                           <td><?php echo $value['mci_name']; ?></td>
                            <td><?php echo $value['mci_dateadded']; ?></td>
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
                        	<label>Select a Country</label>
                            <span class="field">
                            <select name="mci_cid" id="mci_cid">
                            	<option value="">Choose one</option>
                                <?php
                                if(count($country_list) > 0)
								{
									foreach($country_list as $value)
									{
								?>
								<option value="<?php echo $value['mc_id']; ?>"><?php echo $value['mc_name']; ?></option>
								<?php		
									}
								}
                                ?>
                            </select>
                            </span>
                        </p>
                    	<p>
                        	<label>State Name</label>
                            <span class="field">
                            <select name="mci_sid" id="mci_sid">
                            	<option value="">Choose One</option>
                            </select>
                            </span>
                        </p>
                        <p>
                        	<label>City Name</label>
                            <span class="field"><input type="text" name="mci_name" id="mci_name" class="longinput"></span>
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