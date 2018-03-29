<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Info extends Application
{
    /*
     * Controller for Info
     * Info root, returns description of scenario
     */
    public function index()
    {
        header("Content-type: application/json");
        echo json_encode("Scenario: PUBG");
    }
    
    /*
     * Returns designated category if valid id
     * is specified, otherwise, returns all categories
     */
    public function category($key = NULL)
    {
        $categories = $this->Categories->all();
        if ($key != NULL)
        {
            foreach($categories as $row)
            {
                if(!strcmp($row->id, $key))
                {
                    //id is found, return corresponding row
                    header("Content-type: application/json");
                    echo json_encode($row);
                }
            }
        }
        else
        {
            //id is not found, return all rows
            header("Content-type: application/json");
            echo json_encode($categories);
        }
    }
    
    /*
     * Returns designated accessory if valid id
     * is specified, otherwise, returns all accessories
     */
    public function catalog($key = NULL)
    {
        $accessories = $this->Accessories->all();
        if ($key != NULL)
        {
            foreach($accessories as $row)
            {
                if(!strcmp($row->id, $key))
                {
                    //id is found, return corresponding row
                    header("Content-type: application/json");
                    echo json_encode($row);
                }
            }
        }
        else
        {
            //id is not found, return all rows
            header("Content-type: application/json");
            echo json_encode($accessories);
        }
    }
    
    /*
     * Returns designated set if valid id
     * is specified, otherwise, returns all sets
     */
    public function bundle($key = NULL)
    {
        $sets = $this->Sets->all();
        if ($key != NULL)
        {
            foreach($sets as $row)
            {
                if(!strcmp($row->id, $key))
                {
                    //id is found, return corresponding row
                    header("Content-type: application/json");
                    echo json_encode($row);
                }
            }
        }
        else
        {
            //id is not found, return all rows
            header("Content-type: application/json");
            echo json_encode($sets);
        }
    }
}