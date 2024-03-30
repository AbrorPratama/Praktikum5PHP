<?php 
    class PersegiPanjang {
        public $panjang;        //private = tidak bisa di panggil dari luar
                                //public = bisa di panggil dimana saja
        public $lebar;

        function __construct($panjang,$lebar)
        {
            $this->lebar = $lebar;
            $this->panjang = $panjang;
        }
        function luas() {
           return $this->lebar + $this->panjang;
        }
        function keliling() {
            return 2 * ($this->panjang + $this->lebar);
        }
    }

?>
