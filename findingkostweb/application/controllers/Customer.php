<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Dewangga
 */
interface Customer {
    public function __construct();
    public function index();
    public function daftar();
    public function proses_data($username);
}
