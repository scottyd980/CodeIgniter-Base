<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Template class
 *
 * Combines header, footer, and main view. Also accepts data to be passed in.
 *
 * @author:		Scott Douglass
 */
class Template {
	
	// Constructor function
	public function __construct()
	{
		
		$this->CI =& get_instance();

	}
	
    function show($view, $data = array()) {
		$this->CI->load->view('template/header', $data);
		$this->CI->load->view('template/sidebar', $data);
		$this->CI->load->view($view, $data);
		$this->CI->load->view('template/footer', $data); 
    }
    
    function show_no_sidebar($view, $data = array()) {
    	$this->CI->load->view('template/header', $data);
		$this->CI->load->view($view, $data);
		$this->CI->load->view('template/footer', $data);
    }
    
    function show_auth($view, $data = array()) {
    	$this->CI->load->view('template/auth/header', $data);
    	$this->CI->load->view($view, $data);
    	$this->CI->load->view('template/auth/footer', $data); 
    }
    
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */