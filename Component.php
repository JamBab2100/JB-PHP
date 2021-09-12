<?php
class Component {

private $Ename ;
//default length
public $length = array("width"=>"100%","height"=>"800px");
//default colors
public $color = array("bg"=>"","text"=>"");
//default text size
public $text_size = '18px';
//default hint 
public $hint = 'Enter here';
//default type
public $type = 'Textbox';
public $input_type = 'text';


function __construct($id = 'def1') {

$this->Ename = $id . "Element";
}

public function create(){
if($type = "Textbox" || $type = "TextBox"){

}

elseif($type = "Combobox" || $type = "ComboBox"){



}

elseif($type = "Textarea" || $type = "TextArea"){



}


}





}



}

?>
