<?php
	class Person{
		private $name;
		private $email;
		private static $ageLimit = 25; 
		
		public function __construct($name, $email)
		{
			echo __CLASS__." created <br>";
			$this->name = $name;
			$this->email = $email;
		}

		public function __destruct()
		{
			echo __CLASS__." destroy <br>";
		}

		public function getName()
		{
			return $this->name."<br>";
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getEmail()
		{
			return $this->email."<br>";
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public static function getAgeLimit()
		{
			return self::$ageLimit;
		}
	}

	// echo Person::$ageLimit;
	// echo Person::getAgeLimit();

	// $person1 = new Person("Mehmood","mehmood@gmail.com");
	// $person->name = "Mehmood";
	// echo $person->name;

	// $person1->setName("Mehmood");
	//  echo $person1->getName();
	//  echo $person1->getEmail();


	class Customer extends Person {
		private $balance;
		public function __construct($name, $email, $balance)
		{
			parent::__construct($name, $eamil, $balance);
			$this->balance = $balance;
			echo "A New ".__CLASS__." created <br>";
		}
		public function setBalance($balance)
		{
			$this->balance = $balance;
		}

		public function getBalance()
		{
			return $this->balance."<br>";
		}
	}

	// $customer1 = new Customer("Abdullah", "Abdullah@gamil.com",300);
	// echo $customer1->getBalance();
?>