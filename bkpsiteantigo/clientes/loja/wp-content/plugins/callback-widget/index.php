<?php
/*
Plugin Name: CallBack Widget for WordPress
Plugin URI: https://github.com/systemo-biz/callbackhunter-com-wp
Description: Integrate CallBackHunter in WordPress
Author: Systemo
Author URI: http://systemo.biz/
Version: 20150911
*/

add_action( 'wp_footer', $function_to_add = 'wp_footer_add_callbackhunter', $priority = 10);

function wp_footer_add_callbackhunter(){
  $cbh = get_option( 'cbh_script_field' );
  if($cbh) echo $cbh;
}


//Добавляем страницу настроек
add_action( 'admin_init', function(){
	add_settings_section(
		'cbh_script_section',
		'Вставьте тут скрипт от CallBackHunter',
		'cbh_script_section_callback',
		'discussion'
	);

  register_setting( 'discussion', 'cbh_script_field');

	add_settings_field(
		'cbh_script_field',
		'Введите скрипт от CallBackHunter',
		'cbh_script_field_callback',
		'discussion',
		'cbh_script_section'
	);

});
function cbh_script_field_callback() {
  $option = esc_html(get_option( 'cbh_script_field'));
  ?>
	 <input name="cbh_script_field" type="text" value="<?php echo $option ?>" size="55">
  <?php
}

function cbh_script_section_callback(){
  ?>
  <p id="cbh-option">Get 30$ on balanse при регистрации CallBackHunter по ссылке <a href="http://callbackhunter.us/systemo">http://callbackhunter.com/systemo</a></p>
  <p>Скрипт для вставки в поле, можно получить на сайте CallBackHunter в личном кабинете (раздел Виджеты)<a href="https://callbackhunter.us/cabinet/hunters/">https://callbackhunter.com/cabinet/hunters/</a></p>
  <?php
}


// Add settings link to wordpress plugin page
function add_settings_link_to_cbh_script_plugins($links) {


  $settings_link = '<a href="' . admin_url( 'options-discussion.php#cbh-option') .'">Настройки</a>';
  array_unshift($links, $settings_link);
  return $links;
}
$pluginurl = plugin_basename(__FILE__);
add_filter("plugin_action_links_$pluginurl", 'add_settings_link_to_cbh_script_plugins');
