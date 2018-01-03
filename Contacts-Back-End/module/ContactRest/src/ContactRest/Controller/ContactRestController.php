<?php
namespace ContactRest\Controller;
 
use Zend\Mvc\Controller\AbstractRestfulController;
 
use Contact\Model\Contact;
use Contact\Form\ContactForm;
use Contact\Model\ContactTable;
use Zend\View\Model\JsonModel;
 
class ContactRestController extends AbstractRestfulController
{
    public function getList()
    {
        # code...
    }
 
    public function get($id)
    {
        # code...
    }
 
    public function create($data)
    {
        # code...
    }
 
    public function update($id, $data)
    {
        # code...
    }
 
    public function delete($id)
    {
        # code...
    }
}