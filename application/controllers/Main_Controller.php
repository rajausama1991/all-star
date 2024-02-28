<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_Controller extends CI_Controller
{
	/*********************** Home Page ***************/

	public function index() //load homepage
    {
        $data['title'] = 'All Star Technologies';
        $var['content'] = $this->load->view('frontend/homepage', $data, true);
        $this->load->view('frontend/template', $var);
    } 

    public function about() //for loading about-us page
    {
        // echo "testing";
        // die;
        $data['title'] = 'About Us - All Star Technologies';
        $var['content'] = $this->load->view('frontend/aboutUs', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function service_page() //for loading main servics page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('frontend/services', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function our_team() //for loading our-Team page
    {
       
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('frontend/our-team', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function faqs() //for loading FAQS page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('frontend/faqs', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function contact() //for loading contact page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('frontend/contact', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function web_development() //for loading web-development service page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('services/web-development', $data, true);
        $this->load->view('frontend/template', $var);
    }


    public function graphic_design() //for loading graphic-design service page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('services/graphic-design', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function digital_marketing() //for loading digital-marketing service page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('services/digital-marketing', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function content_writing() //for loading content-writing service page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('services/content-writing', $data, true);
        $this->load->view('frontend/template', $var);
    }

    public function bpo() //for loading bpo service page
    {
        
        $data['title'] = 'Services - All Star Technologies';
        $var['content'] = $this->load->view('services/bpo', $data, true);
        $this->load->view('frontend/template', $var);
    }
}
