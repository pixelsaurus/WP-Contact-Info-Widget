<?php
/**
 * @package WP Contact Info Widget
 */
/*
Plugin Name: WP Contact Info Widget
Plugin URI: http://zbyteweb.com/contact-info-widget
Description: Unfortunately, the Contact Info sidebar widget from Wordpress.com isn't available for us self-hosted folks. We give you a simple and (dare we say fun) way to show your contact info via sidebar widget magic.
Version: 3.0
Author: zByte Web LLC.
Author URI: http://zbyteweb.com/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Require WPH_Widget Class
include_once( plugin_dir_path( __FILE__ ).'wph-widget-class.php' );

// Check if the custom class exists
if ( ! class_exists( 'ZBW_Contact_Info_Widget' ) ) 
{
	// Create custom widget class extending WPH_Widget
	class ZBW_Contact_Info_Widget extends WPH_Widget
	{
	
		function __construct()
		{
		
			// Configure widget array
			$args = array( 
				// Widget Backend label
				'label' => __( 'Contact Info Widget', 'zbw-contact-info' ), 
				// Widget Backend Description								
				'description' => __( 'Enter and display your contact info', 'zbw-contact-info' ), 		
			 );
		
			// Configure the widget fields
			// Example for: Title ( text ) and Amount of posts to show ( select box )
		
			// fields array
			$args['fields'] = array( 							
			
				// Title field
				array( 		
				// field name/label									
				'name' => __( 'Title', 'zbw-contact-info' ), 		
				// field id		
				'id' => 'title', 
				// field type ( text, checkbox, textarea, select, select-group )								
				'type'=>'text', 	
				// class, rows, cols								
				'class' => 'widefat', 	
				// default value						
				'std' => __( 'Contact Info', 'zbw-contact-info' ), 
				
				/*
					Set the field validation type/s
					///////////////////////////////
					
					'alpha_dash'			
					Returns FALSE if the value contains anything other than alpha-numeric characters, underscores or dashes.
					
					'alpha'				
					Returns FALSE if the value contains anything other than alphabetical characters.
					
					'alpha_numeric'		
					Returns FALSE if the value contains anything other than alpha-numeric characters.
					
					'numeric'				
					Returns FALSE if the value contains anything other than numeric characters.
					
					'boolean'				
					Returns FALSE if the value contains anything other than a boolean value ( true or false ).
					
					----------
					
					You can define custom validation methods. Make sure to return a boolean ( TRUE/FALSE ).
					Example:
					
					'validate' => 'my_custom_validation', 
					
					Will call for: $this->my_custom_validation( $value_to_validate );					
					
				*/
				
				'validate' => 'alpha_dash', 
				
				/*
				
					Filter data before entering the DB
					//////////////////////////////////
					
					strip_tags ( default )
					wp_strip_all_tags
					esc_attr
					esc_url
					esc_textarea
					
				*/
				
				'filter' => 'strip_tags|esc_attr'	
				 ), 


				// Feed field
				array( 		
				// field name/label									
				'name' => __( 'Address', 'zbw-contact-info' ), 	
				// field id		
				'id' => 'address', 
				// field type ( text, checkbox, textarea, select, select-group )								
				'type'=>'textarea', 	
				// class, rows, cols								
				'class' => 'widefat', 					
				/*
					Set the field validation type/s
					///////////////////////////////
					
					'alpha_dash'			
					Returns FALSE if the value contains anything other than alpha-numeric characters, underscores or dashes.
					
					'alpha'				
					Returns FALSE if the value contains anything other than alphabetical characters.
					
					'alpha_numeric'		
					Returns FALSE if the value contains anything other than alpha-numeric characters.
					
					'numeric'				
					Returns FALSE if the value contains anything other than numeric characters.
					
					'boolean'				
					Returns FALSE if the value contains anything other than a boolean value ( true or false ).
					
					----------
					
					You can define custom validation methods. Make sure to return a boolean ( TRUE/FALSE ).
					Example:
					
					'validate' => 'my_custom_validation', 
					
					Will call for: $this->my_custom_validation( $value_to_validate );					
					
				*/
				
				'validate' => 'alpha_dash', 
				
				/*
				
					Filter data before entering the DB
					//////////////////////////////////
					
					strip_tags ( default )
					wp_strip_all_tags
					esc_attr
					esc_url
					esc_textarea
					
				*/
				
				'filter' => 'strip_tags|esc_attr'	
				 ), 
				 
				array( 		
				// field name/label									
				'name' => __( 'Phone', 'zbw-contact-info' ), 		
				// field id		
				'id' => 'phone', 
				// field type ( text, checkbox, textarea, select, select-group )								
				'type'=>'text', 	
				// class, rows, cols								
				'class' => 'widefat', 	
				
				/*
					Set the field validation type/s
					///////////////////////////////
					
					'alpha_dash'			
					Returns FALSE if the value contains anything other than alpha-numeric characters, underscores or dashes.
					
					'alpha'				
					Returns FALSE if the value contains anything other than alphabetical characters.
					
					'alpha_numeric'		
					Returns FALSE if the value contains anything other than alpha-numeric characters.
					
					'numeric'				
					Returns FALSE if the value contains anything other than numeric characters.
					
					'boolean'				
					Returns FALSE if the value contains anything other than a boolean value ( true or false ).
					
					----------
					
					You can define custom validation methods. Make sure to return a boolean ( TRUE/FALSE ).
					Example:
					
					'validate' => 'my_custom_validation', 
					
					Will call for: $this->my_custom_validation( $value_to_validate );					
					
				*/
				
				'validate' => 'alpha_dash', 
				
				/*
				
					Filter data before entering the DB
					//////////////////////////////////
					
					strip_tags ( default )
					wp_strip_all_tags
					esc_attr
					esc_url
					esc_textarea
					
				*/
				
				'filter' => 'strip_tags|esc_attr'	
				 ), 


				// Feed field
				array( 		
				// field name/label									
				'name' => __( 'Hours', 'zbw-contact-info' ), 	
				// field id		
				'id' => 'hours', 
				// field type ( text, checkbox, textarea, select, select-group )								
				'type'=>'textarea', 	
				// class, rows, cols								
				'class' => 'widefat', 					
				/*
					Set the field validation type/s
					///////////////////////////////
					
					'alpha_dash'			
					Returns FALSE if the value contains anything other than alpha-numeric characters, underscores or dashes.
					
					'alpha'				
					Returns FALSE if the value contains anything other than alphabetical characters.
					
					'alpha_numeric'		
					Returns FALSE if the value contains anything other than alpha-numeric characters.
					
					'numeric'				
					Returns FALSE if the value contains anything other than numeric characters.
					
					'boolean'				
					Returns FALSE if the value contains anything other than a boolean value ( true or false ).
					
					----------
					
					You can define custom validation methods. Make sure to return a boolean ( TRUE/FALSE ).
					Example:
					
					'validate' => 'my_custom_validation', 
					
					Will call for: $this->my_custom_validation( $value_to_validate );					
					
				*/
				
				'validate' => 'alpha_dash', 
				
				/*
				
					Filter data before entering the DB
					//////////////////////////////////
					
					strip_tags ( default )
					wp_strip_all_tags
					esc_attr
					esc_url
					esc_textarea
					
				*/
				
				'filter' => 'strip_tags|esc_attr'	
				 ), 
			
			 ); // fields array

			// create widget
			$this->create_widget( $args );
		}
		
		// Custom validation for this widget 
		
		function my_custom_validation( $value )
		{
			if ( strlen( $value ) > 1 )
				return false;
			else
				return true;
		}
		
		// Output function

		function widget( $args, $instance )
		{

			$url = sanitize_title( $instance['address'] );
			$url = str_replace( '-', '+' ,$url);

			$out = '<aside id="widget_contact_info-2" class="widget widget_contact_info">';
			$out .= $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= '<a href="http://maps.google.com/maps?z=16&amp;q='.$url.'" target="_blank">';
			$out .= wpautop( $instance['address'] );
			$out .= '</a>';
			$out .= wpautop( $instance['phone'] ).'<br>';
			$out .= wpautop( $instance['hours'] );
			$out .= '</aside>';

			echo $out;
		}
	
	} // class

	// Register widget
	if ( ! function_exists( 'mv_my_register_contact_widget' ) )
	{
		function mv_my_register_contact_widget()
		{
			register_widget( 'ZBW_Contact_Info_Widget' );
		}
		
		add_action( 'widgets_init', 'mv_my_register_contact_widget', 1 );
	}
}