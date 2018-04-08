<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sets
 *
 * @author Owner
 */
class Sets extends Memory_Model {
    
    // over-ride base collection adding, with a limit
    function add($record) {
        if ($this->size() >= 30)
            throw new Exception('The Set list is full');
    }
    
    function update($record) {
        parent::update($record);
    }
    
}
