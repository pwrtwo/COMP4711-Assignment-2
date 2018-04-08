<?php

/**
 * Description of Accessories
 *
 * @author Owner
 */
//class Accessories extends CSV_Model{
class Accessories extends Memory_Model{
    
        // over-ride base collection adding, with a limit
    function add($record) {
        if ($this->size() >= 30)
            throw new Exception('The fruit bowl is full');
    }
    
    function update($record) {
        parent::update($record);
    }
    
}
