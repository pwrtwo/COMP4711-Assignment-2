<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Catalog
 *
 * @author Owner
 */
class Catalog extends Application {
    
    /*
     * Constructor for Catalog
     */
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Controller for Catalog view
     */
    function index()
    {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_ADMIN) {
            $this->data['change'] = '<a href="/Catalog/Change" role="button" class="btn">Change</a>';
        } else {
            $this->data['change'] = '';
        }
        //Retrieve csv data
        $accessories = $this->Accessories->all();
        $categories = $this->Categories->all();
        
        //Inject csv data into controller
        $this->data['accessories'] = $accessories;
        $this->data['categories'] = $categories;
        
        //Set pagebody and page title, render
        $this->data['pagebody'] = 'catalog';
        $this->data['pagetitle'] = 'Catalog';
        $this->render();
    }
    
    //put your code here
    public function Change() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST || ROLE_USER) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        } else {
            
        }
    }
    
}
