<?php
namespace App\Model\Repository;

use App\Framework\Connexion;
use App\Model\Customer;

class CustomerRepository
{
    public function save(Customer $customer) {
        $query = "INSERT INTO customer(firstname, lastname, age) VALUES(:firstname, :lastname, :age);";
        $request = Connexion::getInstance()->prepare($query);
        $request->execute(array(':firstname' => $customer->getFirstName(), ':lastname' => $customer->getLastName(), ':age' => $customer->getAge()));
    }

    public function get($id) {
        $query = "SELECT * FROM customer WHERE id = ". $id[0];
        //$request = Connexion::getInstance()->prepare($query);
        //return $request->execute(array(':id' => $id[0]));
        return Connexion::getInstance()->query($query)->fetch();
    }

    public function getList(){
        $query = "SELECT * FROM customer";
        return Connexion::getInstance()->query($query)->fetchAll();
    }
}