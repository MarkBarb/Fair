<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FairFactory
 *
 * @author mbarb
 */

include_once '../fairClasses/FairClasses.php';

class FairFactory{
    private $accounts = [];
    private $exhibitors = [];
    private $entries = [];
    private $livestockCategories = [];
    
    function __construct(){ 
        $this->setLivestockCategories();
        $this->setExhibitors();
        $this->setAccounts();
        $this->setEntries();

    }
   
   
    public function getPoultryEntries($year,$exhibitor){
        
    }
    
    public function getLivestockCategories(){
    	return $this->livestockCategories;
    }
    
    
    private function setAccounts(){
        if ($this->accounts == null){
            $this->accounts = Array();
        }
        $xml=simplexml_load_file("../xml/Accounts.xml");
        foreach ($xml->account as $account ){
            $email = (string)$account->email;
            $newAccount = new Account();
            $newAccount->setID($account->id);
            $newAccount->setEMail($account->email);
            $newAccount->setFirstName($account->firstname);
            $newAccount->setLastName($account->lastname);
            $newAccount->setPhoneNumber($account->phonenumber);
            $newAccount->setHashedPassword($account->hashedpassword);
            
            foreach($account->exhibitorids->exhibitorid as $exhibitorID){
                $eID = (string)$exhibitorID;
                $exhibitor = $this->exhibitors[$eID ];
                $newAccount->addExhibitor($exhibitor);
            }
            $this->accounts[$email] = $newAccount;
        }
        
    }
      private function setLivestockCategories(){
          //echo "setting LivestockCategories ";
        if ($this->livestockCategories == null){
            $this->livestockCategories = Array();
        }
        //Todo: This will need to be split up for each
        //category ie, poultry, rabbits, swine
        $xml=simplexml_load_file("../xml/LivestockCategories.xml");
        foreach ($xml->livestockcategory as $category ){ 
        	$id = (string)$category->id;
        	$name = (string)$category->name;
            
            $newCategory = new LivestockCategory();
            $newCategory -> setID($id);
            $newCategory -> setCategoryName((string)$category->name);
            $newCategory -> setDisplayPage((string)$category->displaypage);
            $newCategory -> setDialogPage((string)$category->dialogpage);
            
            $this->livestockCategories[$id] = $newCategory;
        }  
    }
    
    private function setEntries(){
        if ($this->entries == null){
            $this->entries = Array();
        }
        //Todo: This will need to be split up for each
        //category ie, poultry, rabbits, swine
        $xml=simplexml_load_file("../xml/Entries.xml");
        foreach ($xml->entry as $entry ){
            $exhibitorID = (string)$entry->exhibitorid;   
            $id = (string)$entry->id;
            $newEntry = new FairEntry();
            $newEntry -> setID($id);
            $newEntry -> setExhibitorID($exhibitorID);
            $newEntry -> setLivestockCategoryID((string)$entry->livestockcategory);
            $newEntry -> setNickName((string)$entry->nickname);
            $this->entries[$id] = $newEntry;
            if(array_key_exists ( $exhibitorID , $this->exhibitors )){
                //echo "<br> setEntries found exhibitor: " . $exhibitorID ;
                $exhibitor = $this->exhibitors[$exhibitorID];
                $exhibitor->addEntry($newEntry);
            }
        }
        
    }
    
    
    private function setExhibitors(){
        if ($this->exhibitors == null){
            $this->exhibitors = Array();
        }
        $xml=simplexml_load_file("../xml/Exhibitors.xml");
        foreach ($xml->exhibitor as $exhibitor ){
            $id = (string)$exhibitor->id;
            $newExhibitor = new Exhibitor();
            $newExhibitor->setID($id );
            $newExhibitor->setAccountID($exhibitor->accountid);
            $newExhibitor->setBirthday($exhibitor->birthday);
            $newExhibitor->setFirstName($exhibitor->firstname);
            $newExhibitor->setLastName($exhibitor->lastname);
            
            if( $this->livestockCategories != null){
                foreach( $this->livestockCategories as $category){
                    $newCategory =  clone $category;
                    $newExhibitor->addCategory($newCategory);
                }
            }
            
            $this->exhibitors[$id] = $newExhibitor;    
        }
    }
    
     //returns iformation for account identified by $id for year $year
    public function getAccountByEmailYear($email,$year){
        
        $account = $this->accounts[$email];
        return $account;
    }
    //returns iformation for account identified by $id for year $year
    public function getAccountByIDYear($id,$year){
        
    }
}
