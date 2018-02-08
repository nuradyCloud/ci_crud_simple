<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Books
 *
 * @author cloudthinkbun
 */
class Books extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('books_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
 
    public function index()
    {
        $data['books'] = $this->books_model->getBooks();
        $data['title'] = 'Books List';
        
        $this->load->view('template/header_view');
        $this->load->view('index', $data);
        $this->load->view('template/footer_view');
    }
    
    public function create()
    {
        $data['title'] = 'Create a Books item';
 
        $this->form_validation->set_rules('bookId', 'Book ID', 'required');
        $this->form_validation->set_rules('bookTitle', 'Book Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header_view');
            $this->load->view('create',$data);
            $this->load->view('template/footer_view');
 
        }else{
            $id=0;
            $this->books_model->setBook($id);
            redirect(base_url());
            
        }
    }
    
    public function edit($idBook)
    {
        if (empty($idBook)){
            show_404();
        }
        
        $data['title'] = 'Edit a Book item';        
        $data['books_item'] = $this->books_model->getBookById($idBook);
        
        $this->form_validation->set_rules('bookId', 'Book ID', 'required');
        $this->form_validation->set_rules('bookTitle', 'Book Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
 
        if ($this->form_validation->run() === FALSE){
            $this->load->view('template/header_view', $data);
            $this->load->view('edit', $data);
            $this->load->view('template/footer_view');
        }else{
            $this->books_model->setBook($idBook);
            redirect(base_url());
        }
    }
    
    public function delete($idBook)
    {
        if (empty($idBook)){
            show_404();
        }
                
        $this->books_model->deleteBook($idBook);        
        redirect(base_url());        
    }
}
