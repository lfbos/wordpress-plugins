<?php
//= All it's for test!
/*
Plugin Name: Simple Widget
Plugin URI: www.lfboself.site88.net 
Description: Plugin Simple Widget
Author: Luis Boscan
Version: 1.0
Author URI: www.lfboself.site88.net
*/

class SimpleWidget extends WP_Widget {
    function SimpleWidget() {
        $widget_options = array(
                'classname' => 'simple-widget',
                'description' => 'A Simple Widget');
        parent::WP_Widget('simple_widget', 'Simple Widget', $widget_options);
    }
    
    function widget($args, $instance) {
        extract($args, EXTR_SKIP);
        $title = ($instance['title']) ? ($instance['title']) : 'Un Widget cualquiera';
        $body = ($instance['body']) ? ($instance['body']) : 'Texto de prueba';
        ?>
        <?php echo $before_widget; ?>
        <?php echo $before_title . $title . $after_title; ?>
        <p> <?php echo $body; ?></p>
        <?php
    }
    
    function form($instance) {
		?> <label for="<?php echo $this->get_field_id("title");?>">
		Title:
		<input id="<?php echo $this->get_field_id("title");?>" 
		name="<?php echo $this->get_field_name('title');?>" 
		value= "<?php echo esc_attr($instance['title']);?>" />
		</label>
		<br>
		<label for="<?php echo $this->get_field_id("body");?>">
		Body:
		<br>
		<textarea id="<?php echo $this->get_field_id("body");?>"
		 name="<?php echo $this->get_field_name('body');?>"> <?php echo esc_attr($instance['body']);?>
		</textarea>
		</label> 
		<?php
	}
}

function simple_widget_init() {
    register_widget("SimpleWidget");
}

add_action('widgets_init','simple_widget_init');