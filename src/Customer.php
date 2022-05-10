<?php 

namespace Annahl\HelloCustomer{

    class Customer{
        private string $name;
        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function sayCustomer(string $name = "guest"){
            return "Halo $name, my name is $this->name";
        }
    }

}



?>