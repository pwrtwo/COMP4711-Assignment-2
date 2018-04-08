<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends Application {

    //put your code here
    public function Initialize() {
        $role = $this->session->userdata('userrole');
        if ($role == ROLE_GUEST) {
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
            return;
        }

        $items = $this->Accessories->all();
        $i = array();

        for ($x = 0; $x < sizeof($items); $x++) {
            $acc = $this->Accessories->get($x);
            $temp = array('item' => '<option value="' . $acc->id . '">' . $acc->name . '</option>');
            $i[] = $temp;
        }

        $this->data['accessory'] = $i;

        $this->data['pagetitle'] = 'Edit Accessory';
        $this->data['pagebody'] = 'editAccessory';

        $this->render();
    }
    
}
    