<?php
  include_once('../printable.php');
?>
<html>
  <head>
    <title>Lab 09</title>
    <style>
    </style>
  </head>
  <body>
    <div style="width:50%;">   
    <?php

      // Represents an address
      class Address {
        private $street;
        private $city;
        private $state;
        private $zip;

        public function __construct($street, $city, $state, $zip) {
          $this->setStreet($street);
          $this->setCity($city);
          $this->setState($state);
          $this->setZip($zip);

        } // end constructor

        public function getStreet() { return $this->street; }
        public function setStreet($street) {
          if (is_string($street) && strlen($street)) {
            $this->street = $street;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getCity() { return $this->city; }
        public function setCity($city) {
          if (is_string($city) && strlen($city)) {
            $this->city = $city;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getState() { return $this->state; }
        public function setState($state) {
          if (is_string($state) && strlen($state) === 2) {
            $this->state = $state;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getZip() { return $this->zip; }
        public function setZip($zip) {
          if (is_int($zip) && strlen((string)$zip)) {
            $this->zip = $zip;
          }
          else { throw new InvalidArgumentException(); }
        }
      } // end Address

 
      // Represents a student
      class Student {
        private $id;
        private $last;
        private $first;
        private $mi;
        private $address;
        private $phone;
        private $className;
        private $dob;
        private $pin;
        private $facultyId;
        
        public function __construct($data) {
          $this->setId($data['id']);
          $this->setLast($data['last']);
          $this->setFirst($data['first']);
          $this->setMi($data['mi']);
          $this->setAddress($data['address']);
          $this->setPhone($data['phone']);
          $this->setClassName($data['className']);
          $this->setDOB($data['dob']);
          $this->setPin($data['pin']);
        } // end constructor

        public function getId() { return $this->id; }
        public function setId($id) {
          if (is_int($id)) {
            $this->id = $id;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getLast() { return $this->last; }
        public function setLast($last) {
          if (is_string($last) && strlen($last)) {
            $this->last = $last;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getFirst() { return $this->first; }
        public function setFirst($first) {
          if (is_string($first) && strlen($first)) {
            $this->first = $first;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getMi() { return $this->mi; }
        public function setMi($mi) {
          if (is_string($mi) && strlen($mi) === 1) {
            $this->mi = $mi;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getAddress() { return $this->address; }
        public function setAddress($address) {
          if ($address instanceof Address) {
            $this->address = $address;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getPhone() { return $this->phone; }
        public function setPhone($phone) {
          if (is_string($phone) && 
              preg_match('/^\(\d{3}\) \d{3}-\d{4}$/', $phone)) {
            $this->phone = $phone;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getClassName() { return $this->className; }
        public function setClassName($className) {
          if (is_string($className) && strlen($className)) {
            $this->className = $className;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getDOB() { return $this->dob; }
        public function setDOB($dob) {
          if (is_string($dob) && 
              preg_match('/^\d{2}-\d{2}-\d{2}$/', $dob)) {
            $this->dob = $dob;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getPin() { return $this->pin; }
        public function setPin($pin) {
          if (is_string($pin) && strlen($pin)) {
            $this->pin = $pin;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getFacultyId() { return $this->facultyId; }
        public function setFacultyId($facultyId) {
          if (is_int($facultyId)) {
            $this->facultyId = $facultyId;
          }
          else { throw new InvalidArgumentException(); }
        }
      } // end Student

      
 
      // Represents a faculty member
      class Faculty {
        private $id;
        private $last;
        private $first;
        private $mi;
        private $locId;
        private $phone;
        private $rank;
        private $pin;
        private $image;
        
        public function __construct($data) {
          $this->setId($data['id']);
          $this->setLast($data['last']);
          $this->setFirst($data['first']);
          $this->setMi($data['mi']);
          $this->setLocId($data['locId']);
          $this->setPhone($data['phone']);
          $this->setRank($data['rank']);
          $this->setImage($data['image']);
          $this->setPin($data['pin']);
        } // end constructor

        public function getId() { return $this->id; }
        public function setId($id) {
          if (is_int($id)) {
            $this->id = $id;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getLast() { return $this->last; }
        public function setLast($last) {
          if (is_string($last) && strlen($last)) {
            $this->last = $last;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getFirst() { return $this->first; }
        public function setFirst($first) {
          if (is_string($first) && strlen($first)) {
            $this->first = $first;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getMi() { return $this->mi; }
        public function setMi($mi) {
          if (is_string($mi) && strlen($mi) === 1) {
            $this->mi = $mi;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getPhone() { return $this->phone; }
        public function setPhone($phone) {
          if (is_string($phone) &&
              preg_match('/^\(\d{3}\) \d{3}-\d{4}$/', $phone)) {
            $this->phone = $phone;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getLocId() { return $this->locId; }
        public function setLocId($locId) {
          if (is_int($locId) && strlen($locId)) {
            $this->locId = $locId;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getRank() { return $this->rank; }
        public function setRank($rank) {
          if (is_string($rank) && strlen($rank)) {
            $this->rank = $rank;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getPin() { return $this->pin; }
        public function setPin($pin) {
          if (is_string($pin) && strlen($pin)) {
            $this->pin = $pin;
          }
          else { throw new InvalidArgumentException(); }
        }

        public function getImage() { return $this->image; }
        public function setImage($image) {
          if (is_string($image) && 
              preg_match('/(.bmp|.jpg|.jpeg|.png|.gif)$/', $image)) {
            $this->image = $image;
          }
          else { throw new InvalidArgumentException(); }
        }
      } // end Faculty


      
      // Create objects of each class
      $greg = new Student(['id' => 45, 'last' => 'gorlen', 
                           'first' => 'greg', 'mi' => 's', 
                           'address' => new Address(
                             '1400 Market St', 
                             'San Francisco', 'CA', 94100
                           ), 
                           'phone' => '(415) 666-4444', 
                           'className' => 'PHP Programming', 
                           'dob' => '03-10-86', 
                           'pin' => '1234', 
                           'facultyId' => 12345671234]);

      $mark = new Faculty(['id' => 310, 'last' => 'smith', 
                           'first' => 'mark', 'mi' => 'e', 
                           'phone' => '(415) 446-6664', 
                           'rank' => 'captain', 
                           'pin' => '4321', 'locId' => 234, 
                           'image' => 'mark.jpg']);

      // Test the objects
      echo '<pre><h3>Demonstrate constructors:</h3>';
      print_r($greg);
      print_r($mark);
      echo '<h3>Demonstrate setters and getters</h3>' .
           'Get the id property of the Student object: ' . 
           $greg->getId() . '<br />' . 
           'Set the id property of the Student object to 569... ' . 
           $greg->setId(569) . '<br />' .
           'Get the id property of the Student object: ' . 
           $greg->getId() . '<br />...</br>' .
           'Get the phone property of the Faculty object: ' . 
           $mark->getPhone() . '<br />' .
           'Set the phone property of the Faculty object to (999) 999-1111... ' . 
           $mark->setPhone('(999) 999-1111') . '<br />' .
           'Get the phone property of the Faculty object: ' . 
           $mark->getPhone() . '<br />';
      echo '</pre>';
    ?>

    </div>
  </body>
</html>
