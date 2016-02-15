<?php
/*
Plugin Name: AdminInfoScreen
Plugin URI: http://claytonerrington.com
Description: Provides the website with an area to display information to its users
Author: Clayton Errington
Version: 3.0
Author URI: http://claytonerrington.com
*/

add_action("plugins_loaded", "InfoScreen_init");
add_action('admin_menu', 'InfoScreenPluginMenu');

function InfoScreenPluginMenu() {
$appName = 'Info Screen';
$appID = 'Info-Screen';
add_menu_page($appName, $appName, 'contributor', $appID, 'pluginAdminScreen');
}

function pluginAdminScreen() { //Close PHP to allow HTML code

	/*********************************************************************
	**********************************************************************

			YOU MAY EDIT BETWEEN THE ?> AND THE <?PHP TAGS BELOW

	**********************************************************************
	*********************************************************************/

?>
<!-- Editable Region -->
<h1>This is the Info Screen</h1>
<p>This plugin was created to add the ability to add text to an admin screen.</p>
<p>You can replace this text within the <br />window marked in the source of the plugin.<p>
<ul>
	<li>Item 1</li>
	<li>Item 2</li>
</ul>

<ul>
	<li>item 1
		<ul>
			<li><strong>Indent 1</strong</li>
		</ul>
	</li>
	<li><u>item 2</u></li>
</ul>
<p>Noah will take it from here!</p>
<p><a href="#" target="_blank">Link to important file</a></p>
<p><em>If there are any questions, do not hesitate to email me at <a href="mailto:me@claytonerrington.com">me@claytonerrington.com</a> or visit my <a href="http://claytonerrington.com" target="_blank">website</a>.</em></p>
<!-- END of Editable Region -->

<?php
} //Close pluginAdminScreen()
?>
