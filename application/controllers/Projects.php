<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

    private $api_url = 'http://your-rest-api-url.com/'; // Replace with actual REST API URL

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('curl'); // Add Curl library
    }

    public function index() {
        $data['projects'] = $this->get_data_from_api('projects');
        $data['locations'] = $this->get_data_from_api('locations');
        $this->load->view('projects/index', $data);
    }

    public function create() {
        $this->load->view('projects/create');
    }

    public function store() {
        $postData = $this->input->post();
        $this->send_data_to_api('projects', $postData);
        redirect('/');
    }

    public function edit($id) {
        $data['project'] = $this->get_data_from_api('projects/'.$id);
        $this->load->view('projects/edit', $data);
    }

    public function update($id) {
        $postData = $this->input->post();
        $this->send_data_to_api('projects/'.$id, $postData, 'PUT');
        redirect('/');
    }

    public function delete($id) {
        $this->send_data_to_api('projects/'.$id, [], 'DELETE');
        redirect('/');
    }

    private function get_data_from_api($endpoint) {
        $response = $this->curl->simple_get($this->api_url . $endpoint);
        return json_decode($response, true);
    }

    private function send_data_to_api($endpoint, $data, $method = 'POST') {
        if($method == 'POST') {
            $this->curl->simple_post($this->api_url . $endpoint, $data);
        } else if($method == 'PUT') {
            $this->curl->simple_put($this->api_url . $endpoint, $data);
        } else if($method == 'DELETE') {
            $this->curl->simple_delete($this->api_url . $endpoint);
        }
    }
}
