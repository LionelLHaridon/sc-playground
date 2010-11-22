<?php 
  class Experiment extends Model {
  
    var $title   = '';
    var $description = '';
    var $path   = '';
  
    function Experiment(){
      // Call the Model constructor
      parent::Model();
    }
  
    function getAllExperiments(){
      $experiments = array(
        $this->buildItem("PHP + Thrift", "how does it work?", "/php_thrift"),
        $this->buildItem("Localization", "localization support in C.igniter", "/localization")
      );  
      return $experiments; 
    }
    
    function buildItem($title,$description,$path){
      $item = new Experiment();
      $item->title = $title;
      $item->description = $description;
      $item->path = $path;
      return $item;
    }
  }
?>