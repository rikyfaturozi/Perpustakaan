<?php
class Modelsepatu extends CI_Model
{
    public $merk, $harga;
 
    public function getHarga($merk=null)
    {
        $this->merk=$merk;
        if($this->merk == "Adidas")
                {$this->harga=200000;}
        elseif($this->merk == "kickers")
                {$this->harga=300000;}
        elseif($this->merk == "eiger")
                {$this->harga=230000;}
        elseif($this->merk == "Nike")
                {$this->harga=280000;}
        elseif($this->merk == "bucherri")
                {$this->harga=500000;}
       
      return $this->harga;
    }
}
