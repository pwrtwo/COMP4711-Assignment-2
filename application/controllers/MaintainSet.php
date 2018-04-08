<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MaintainSet extends Application {

    //put your code here
    public function Add() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }

        $items = $this->Accessories->all();

        $h = array();
        $c = array();
        $p = array();
        $s = array();

        for ($x = 0; $x < sizeof($items); $x++) {
            $acc = $this->Accessories->get($x);
            $temp = array('item' => '<option value="' . $acc->id . '">' . $acc->name . '</option>');

            if ($acc->catId == 0) {
                $h[] = $temp;
            }
            if ($acc->catId == 1) {
                $c[] = $temp;
            }
            if ($acc->catId == 2) {
                $p[] = $temp;
            }
            if ($acc->catId == 3) {
                $s[] = $temp;
            }
        }

        $this->data['h'] = $h;
        $this->data['c'] = $c;
        $this->data['p'] = $p;
        $this->data['s'] = $s;


        $this->data['setNum'] = sizeof($items = $this->Sets->all()) + 1;
        $this->data['pagetitle'] = 'Add Set';
        $this->data['pagebody'] = 'addSet';

        $this->render();
    }

    public function AddSet() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }
        $this->load->model('Sets');
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->Sets->rules());

        $newSet = $this->input->post();
        var_dump($newSet);
        $newSet = (object) $newSet;
        
        if ($this->form_validation->run()) {
            $this->Sets->add($newSet);
        } else {
            $this->alert(validation_errors(), 'danger');
        }
        redirect('/Welcome/set/' . $this->Sets->highest());
    }

}
