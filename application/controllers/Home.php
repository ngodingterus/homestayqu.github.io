<?php

class Home extends CI_Controller
{
    public function index(){
        //PLUGIN
        $this->load->view('plug-head');
        
        //BANNER
        $this->load->view('banner');
        //MENU
        $this->load->view('navigasi');
        // ABOUT
        $this->load->view('about');
        // STORY
        $this->load->view('story');
        //PEOPLE
        $this->load->view('people');
        // EVENTS
        $this->load->view('events');
        // ACOOMMODATION
        $this->load->view('acoomodation');
        // FUN FACTS
        $this->load->view('funfacts');
        // BLOG
        $this->load->view('blog');
        // MAP & RSVP
        $this->load->view('map');
        // REGISTER
        $this->load->view('register');
        //FOOTER
        $this->load->view('footer');

        // PLUGIN
        $this->load->view('plug-foot');
    }
}

?>