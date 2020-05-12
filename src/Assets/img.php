<?php namespace macizdyn\ucpTheme\Assets;

class img extends abastractAsset {

    public function toStr(){
        return '<img src="'.$this->url()."\">\r\n";
    }

}
