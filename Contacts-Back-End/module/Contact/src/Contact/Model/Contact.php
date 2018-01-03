<?php
namespace Contact\Model;

class Contact
{
	public $id;
	public $name;
	public $identification;
	public $email;
	public $phonePrimary;
	public $phoneSecondary;
	public $fax;
	public $mobile;
	public $observations;
	public $priceList;
	public $seller;
	public $term;
	public $address;
	public $type;
	public $internalContacts;
	public $cfdiUse;

	public function exchangeArray($data)
	{
		$this->id     = (!empty($data['id'])) ? $data['id'] : null;
		$this->name = (!empty($data['name'])) ? $data['name'] : null;
		$this->identification  = (!empty($data['identification'])) ? $data['identification'] : null;
		$this->email     = (!empty($data['email'])) ? $data['email'] : null;
		$this->phonePrimary = (!empty($data['phonePrimary'])) ? $data['phonePrimary'] : null;
		$this->phoneSecondary  = (!empty($data['phoneSecondary'])) ? $data['phoneSecondary'] : null;
		$this->fax     = (!empty($data['fax'])) ? $data['fax'] : null;
		$this->mobile = (!empty($data['mobile'])) ? $data['mobile'] : null;
		$this->observations  = (!empty($data['observations'])) ? $data['observations'] : null;
		$this->priceList     = (!empty($data['priceList'])) ? $data['priceList'] : null;
		$this->seller = (!empty($data['seller'])) ? $data['seller'] : null;
		$this->term  = (!empty($data['term'])) ? $data['term'] : null;
		$this->address     = (!empty($data['address'])) ? $data['address'] : null;
		$this->type = (!empty($data['type'])) ? $data['type'] : null;
		$this->internalContacts  = (!empty($data['internalContacts'])) ? $data['internalContacts'] : null;
		$this->cfdiUse  = (!empty($data['cfdiUse'])) ? $data['cfdiUse'] : null;
	}
}