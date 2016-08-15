<?php
class Spot{
	private $id;
	private $name;
	private $address;
	private $description;
	private $lat;
	private $lng;
	private $categoryId;
	private $userId;
	
	public function __construct($id, $name, $address, $description, $lat, $lng, $categoryId, $userId){
		$this->id = $id;
		$this->name = $name;
		$this->address = $address;
		$this->description = $description;
		$this->lat = $lat;
		$this->lng = $lng;
		$this->categoryId = $categoryId;
		$this->userId = $userId;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setAddress($address){
		$this->address = $address;
	}
	
	public function getAddress(){
		return $this->address;
	}
	
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setLat($lat){
		$this->lat = $lat;
	}
	
	public function getLat(){
		return $this->lat;
	}
	
	public function setLng($lng){
		$this->lng = $lng;
	}
	
	public function getLng(){
		return $this->lng;
	}
	
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
	}
	
	public function getCategoryId(){
		return $this->categoryId;
	}
	
	public function setUserId($userId){
		$this->userId = $userId;
	}
	
	public function getUserId(){
		return $this->userId;
	}
}