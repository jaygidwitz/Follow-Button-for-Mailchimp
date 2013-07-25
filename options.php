<div class="wrap">
	
    <?php screen_icon(); ?>
    
	<form action="options.php" method="post" id="<?php echo $plugin_id; ?>_options_form" name="<?php echo $plugin_id; ?>_options_form">
    
	<?php settings_fields($plugin_id.'_options'); ?>
    
    <h2>Follow Button For Mailchimp Plugin &raquo; Settings</h2>
    <table class="widefat">
		<thead>
		   <tr>
			 <th><input type="submit" name="submit" value="Save Settings" class="button-primary" style="padding:0px 8px;" /></th>
		   </tr>
		</thead>
		<tfoot>
		   <tr>
			 <th><input type="submit" name="submit" value="Save Settings" class="button-primary" style="padding:0px 8px;" /></th>
		   </tr>
		</tfoot>
		<tbody>
		   <tr>
			 <td style="padding:25px;font-family:Verdana, Geneva, sans-serif;color:#666;">
                 <label for="followbmc_url">
                   <h3>To find you Mailchimp Subscribe Post URL from within mailchimp click:</h3>
                   <p> "Lists" > Click the Specific List you want > Click "Signup Forms" > "General Forms" > "Share it" > Click the shortlink (http://eepurl.com/...)</p>
                     <p>On the next page the url will something like:</p>
                     <p><a href="http://jaygidwitz.us1.list-manage.com/subscribe?u=eec3707c1f3cb3dd7e3dc3541&id=5b26328440" >http://jaygidwitz.us1.list-manage.com/subscribe?u=eec3707c1f3cb3dd7e3dc3541&id=5b26328440</a></p>
                     <p>Copy that link and paste the full URL below:</p>
                     <p><input type="url" name="followbmc_url" value="<?php echo get_option('followbmc_url'); ?>" style="width:100%;" /></p>
                     <p>In the URL type: "/post" after the word "subscribe" and before the "?". (No quotes.)</p>
                 </label>
             </td>
		   </tr>
		</tbody>
	</table>
    
	</form>
    
</div>