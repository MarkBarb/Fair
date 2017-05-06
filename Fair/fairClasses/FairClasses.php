<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FairClass {
    
    private $id = -1;
    
    public function getID() {
        return $this->id;
    }
    
    public function setID($nID) {
        $this->id = $nID;
    }
}

/**
 * Description of Account
 *
 * @author mbarb
 */
class Account extends FairClass {

    //put your code 
    private $email = "";
    private $exhibitors = [];
    private $hashedPassword = "";
    private $firstName = "";
    private $lastName = "";
    private $phoneNumber = "";

    
    public function getEMail() {
        return $this->email;
    }
    
    public function setEMail($nEmail) {
        $this->email = $nEmail;
    }
    
    public function getFirstName() {
        return $this->firstName;
    }
    
    public function setFirstName($nfirstName) {
        $this->firstName = $nfirstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }
    
    public function setLastName($nlastName) {
        $this->lastName = $nlastName;
    }
    
     public function getHashedPassword() {
        return $this->hashedPassword;
    }
    
    public function setHashedPassword($nHashedPassword) {
        $thishashedPassword = $nHashedPassword;
    }
    
    public function setPhoneNumber($nPhoneNumber) {
        $this->phoneNumber = $nPhoneNumber;
    }
    
    
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }
    
    
    //
    public function addExhibitor($exhibitor) {
        if ($this->exhibitors == null){
            $this->exhibitors = [];
        }
        if ($exhibitor instanceof Exhibitor) {
            array_push($this->exhibitors,$exhibitor);
        }
    }
    
   
    
    //
    public function getExhibitors() {
       return $this->exhibitors;
    }
    

}

class LivestockCategory extends FairClass {
    private $categoryName = "";
    private $fairEntries = [];
    private $livestockClasses = [];
    private $displayPage = "";
    private $dialogPage = "";
    
    
    function __clone()
    {
        // Force a copy of this->object, otherwise
        // it will point to same object.
        //$this->fairEntries = clone $this->fairEntries;
    }
    
    public function getCategoryName(){
        return $this->categoryName;
    }
    
    public function setCategoryName($nCategoryName){
        $this->categoryName = $nCategoryName;
    }
    
    public function getDialogPage (){
        return $this->dialogPage;
    }
    
    public function setDialogPage($nDialogPage){
        $this->dialogPage = $nDialogPage;
    }
    
    public function getDisplayPage (){
        return $this->displayPage;
    }
    
    public function setDisplayPage($nDisplayPage){
        $this->displayPage = $nDisplayPage;
    }
    
    public function addFairEntry($nFairEntryClass){
         if ($this->fairEntries == null){
            $this->fairEntries = [];
        }
        if ($nFairEntryClass instanceof FairEntry  ) {
            array_push($this->fairEntries,$nFairEntryClass);
        }
    }
    public function getFairEntries(){
         if ($this->fairEntries == null){
            $this->fairEntries = [];
        }
        return $this->fairEntries;
    }
    
    public function addLivestockClass($nLivestockClass){
         if ($this->livestockClasses == null){
            $this->livestockClasses = [];
        }
        if ($nLivestockClass instanceof LivestockClass){
            if ( $this->getID() == $nLivestockClass->getLivestockCategoryID ) {
                array_push($this->livestockClasses,$nLivestockClass);
            }
        }
    }
    public function getLivestockClasses(){
         if ($this->livestockClasses == null){
            $this->livestockClasses = [];
        }
        return $this->livestockClasses;
    }
}

class LivestockClass extends FairClass {
    private $livestockCategoryID = -1;
    
    public function getLivestockCategoryID(){
        return $this->livestockCategoryID;
    }
    
    public function setLiveStockCategoryID($nLivestockCategoryID){
        $this->livestockCategoryID = $nLivestockCategoryID;
    }
}

class FairEntry extends LivestockClass {
    
    private $exhibitorID = -1;
    private $year = 0;
    private $nickName = "";
    private $ribbon = "";
    
    public function getExhibitorID(){
        if ($exhibitorID == null){
            $exhibitorID = -1;
        }
        return $this->exhibitorID;
    }
    
    public function setExhibitorID($nExhibitorID){
        $this->exhibitorID = $nExhibitorID;
    }
    
    public function getLivestockClass(){
        return $this->livestockClass;
    }
    
    public function setLivestockClass($nLivestockClass){
        if ($nLivestockClass instanceof LivestockClass){
            $this->livestockClass = $nLivestockClass;
        }
    }
    
    public function getNickName(){
        if ($this->nickName == null){
            $this->nickName = "";
        }
      return $this->nickName;  
    }
    
    public function setNickName($nNickName){
       $this->nickName = $nNickName;
    }
    
    public function getRibbon(){
        if ($this->ribbon == null){
            $this->ribbon = "";
        }
      return $this->ribbon;  
    }
    
    public function setRibbon($nRibbon){
       $this->ribbon = $nRibbon;
    }
    
    public function getYear(){
      return $this->year;  
    }
    
    public function setYear($nYear){
        if (is_numeric($nYear)){
            $this->year = $nYear;
        }
    }
}

class PoultryEntry extends FairEntry {
    
}
/**
 * Description of Exhibitor
 *
 * @author mbarb
 */
class Exhibitor extends FairClass {
    
    private $firstName = "";
    private $lastName = "";
    private $birthday = "";
    private $fairCategories = array();
    private $accountID = -1;
    
    public function getAccountID() {
        return $this->accountID;
    }
    
    public function setAccountID($nAccountID) {
        $this->accountID = $nAccountID;
    }
    
    public function getBirthday() {
        return $this->birthday;
    }
    
    public function setBirthday($nBirthday) {
        $this->birthday = $nBirthday;
    }
   public function getFirstName() {
        return $this->firstName;
    }
    
    public function setFirstName($nfirstName) {
        $this->firstName = $nfirstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }
    
    public function setLastName($nLastName) {
        $this->lastName = $nLastName;
    }
    
    public function addCategory($nCategory){
        if ($this->fairCategories == null){
            $this->fairCategories = [];
        }
        //echo "<br>adding category: " . $nCategory->getCategoryName() . " to " .$this->getFirstName(); ;
        
        if ($nCategory instanceof LivestockCategory){
            $id = $nCategory->getID();
            $this->fairCategories[$id] = $nCategory;
        }
    }
    
    
    public function addEntry($nEntry){
       // echo "<br>adding entry: " . $nEntry->getNickName();
        if ($this->fairCategories == null){
            $this->fairCategories = [];
        }
        if ($nEntry instanceof FairEntry){
            $livestockCategoryID = $nEntry->getLivestockCategoryID();
            //echo "<br>adding entry: past instance off: id $livestockCategoryID";
            if (array_key_exists ( $livestockCategoryID , $this->fairCategories )){
                //echo "<br>Adding " . $nEntry->getNickName() . " to catetory " . $livestockCategoryID;
                $category = $this->fairCategories[$livestockCategoryID];
                $category->addFairEntry($nEntry);
            }
        }
    }
    
    public function getCategories(){
        if ($this->fairCategories == null){
            $this->fairCategories = [];
        }
        return $this->fairCategories;
    }
}

class FairEntries {
    private $year;
    
}

