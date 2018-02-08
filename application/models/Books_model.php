<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Books_model
 *
 * @author cloudthinkbun
 */
class Books_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getBooks() {
        $query = $this->db->get('tm_buku');
        return $query->result_array();
    }

    public function getBookById($idBook)
    {
        $query = $this->db->get_where('tm_buku', array('id_book' => $idBook));
        return $query->row_array();
    }
    
    public function setBook($idBook)
    {
        $data = array(
            'id_book'       => $this->input->post('bookId'),
            'book_title'    => $this->input->post('bookTitle'),
            'desc'          => $this->input->post('desc')
        );
        
        if (strlen($idBook)<=2) {
            return $this->db->insert('tm_buku', $data);
        } else {
            $this->db->where('id_book', $idBook);
            return $this->db->update('tm_buku', $data);
        }
    }
    
    public function deleteBook($idBook)
    {
        $this->db->where('id_book', $idBook);
        return $this->db->delete('tm_buku');
    }
    
}
