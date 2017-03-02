<?php
/**
 * Inhabitent Contact Info
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Inhabitent_Contact_Info
 * @author    Iris Mendoza <mdza.iris@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.redacademy.com
 * @copyright 2017 RED Academy
 *
 * @wordpress-plugin
 * Plugin Name:       Inhabitent Contact Info
 * Plugin URI:        @TODO
 * Description:       A simple contact info widget for Inhabitent.
 * Version:           1.0.0
 * Author:            Iris Mendoza
 * Author URI:        @TODO
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Inhabitent_Contact_Info extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'inhabitent-contact-info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Inhabitent Contact Info',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'A widget for adding Inhabitent contact info.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$phone = empty( $instance['phone'] ) ? '' : apply_filters( 'widget_title', $instance['phone'] );
		$email = empty( $instance['email'] ) ? '' : apply_filters( 'widget_title', $instance['email'] );
		$street_address = empty( $instance['street_address'] ) ? '' : apply_filters( 'widget_title', $instance['street_address'] );
		$city = empty( $instance['city'] ) ? '' : apply_filters( 'widget_title', $instance['city'] );
		$province = empty( $instance['province'] ) ? '' : apply_filters( 'widget_title', $instance['province'] );
		$postal_code = empty( $instance['postal_code'] ) ? '' : apply_filters( 'widget_title', $instance['postal_code'] );

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );			$instance['phone'] = strip_tags( $new_instance['phone'] );
		$instance['email'] = strip_tags( $new_instance['email'] );
		$instance['street_address'] = strip_tags( $new_instance['street_address'] );
		$instance['city'] = strip_tags( $new_instance['city'] );
		$instance['province'] = strip_tags( $new_instance['province'] );
		$instance['postal_code'] = strip_tags( $new_instance['postal_code'] );

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Inhabitent Contact Info',
				'phone' => '',
				'email' => '',
				'street_address' => '',
				'city' => '',
				'province' => '',
				'postal_code' => ''
			)
		);

		$title = strip_tags( $instance['title'] );
		$phone = strip_tags( $instance['phone'] );
		$email = strip_tags( $instance['email'] );
		$street_address = strip_tags( $instance['street_address'] );
		$city = strip_tags( $instance['city'] );
		$province = strip_tags( $instance['province'] );
		$postal_code = strip_tags( $instance['postal_code'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Inhabitent_Contact_Info' );
});
