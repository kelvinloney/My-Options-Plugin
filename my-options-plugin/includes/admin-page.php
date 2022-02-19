<?php

function mo_options_page() {

    global $mo_options;
    global $mo_options_fb;
    global $mo_options_ig;

  ob_start(); ?> 
  <div class="wrap">
      <h2><?php _e('Plugin Options', 'mo_domain'); ?></h2>
      
      <form method="post" action="options.php">

            <?php settings_fields('mo_settings_group'); ?>

            <h4><?php _e('Enable', 'mo_domain'); ?></h4>
            <p>
                <input id="mo_settings[enable]" name="mo_settings[enable]" type="checkbox" value="1" <?php checked('1', $mo_options['enable']); ?>/>
                <span>&nbsp</span>
                <label class="description" for="mo_settings[enable]"><?php _e('Display the Tweet Me on Twitter link', 'mo_domain'); ?></label>
                <br>
                <br>
                <input id="mo_settings[postlink]" name="mo_settings[postlink]" type="checkbox" value="1" <?php checked( $mo_options['postlink'], 1 ); ?>/>
                <span>&nbsp</span>
                <label class="description" for="mo_settings[postlink]"><?php _e('Display the Add Me on Facebook link', 'mo_domain'); ?></label>
                <br>
                <br>
                <input id="mo_settings[check]" name="mo_settings[check]" type="checkbox" value="1" <?php checked( $mo_options['check'], 1 ); ?>/>
                <span>&nbsp</span>
                <label class="description" for="mo_settings[check]"><?php _e('Display the Follow Me on Instagram link', 'mo_domain'); ?></label>
                
            </p>

            <hr>

            <h4><?php _e('URL Information', 'mo_domain'); ?></h4>
            <p>
                <input id="mo_settings[twitter_url]" name="mo_settings[twitter_url]" type="text" value="<?php echo $mo_options['twitter_url']; ?>"/>
                <span>&nbsp</span>
                <label class="description" for="mo_settings[twitter_url]"><?php _e('Enter your Twitter URL', 'mo_domain'); ?></label>
                <br>
                <br>
                <input id="mo_settings[facebook_url]" name="mo_settings[facebook_url]" type="text"value="<?php echo $mo_options['facebook_url']; ?>"/>
                <span>&nbsp</span>
                <label class="description" for="mo_settings[facebook_url]"><?php _e('Enter your Facebook URL', 'mo_domain'); ?></label>
                <br>
                <br>
                <input id="mo_settings[instagram_url]" name="mo_settings[instagram_url]" type="text"value="<?php echo $mo_options['instagram_url']; ?>"/>
                <span>&nbsp</span>
                <label class="description" for="mo_settings[instagram_url]"><?php _e('Enter your Instagram URL', 'mo_domain'); ?></label> 

            </p>

            <hr>

            <h4><?php _e('Theme', 'mo_domain'); ?></h4>
            <p>
               <?php $styles = array('blue', 'red'); ?>
               <select name="mo_settings[theme]" id="mo_settings[theme]">
                   <?php foreach($styles as $style) { ?>
                    <?php if($mo_options['theme'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
                    <option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option> 
                   <?php } ?>
                </select>
            </p>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Options', 'mo_domain'); ?>"/>
            </p>

      </form>

  </div> 
  <?php
  echo ob_get_clean();  
}

function mo_add_options_link() {
    add_options_page('My Options Plugin Options', 'My Options Plugin', 'manage_options', 'mo-options', 'mo_options_page');
}
add_action('admin_menu', 'mo_add_options_link');



/* Enables the checkbox to save */ 

function mo_register_settings() {
    register_setting('mo_settings_group', 'mo_settings');
}
add_action('admin_init', 'mo_register_settings');

function mo_register_settings_fb() {
    register_setting('mo_settings_group', 'mo_settings');
}
add_action('admin_init', 'mo_register_settings_fb');




