<?php
    class Student{
        private $firstName; // jméno
        private $lastName; //přijmení
        private $id; // rodné číslo
        private $studentScore; // pole se známkami z 5 předmětů např.: ["M"=>3,"CJ"=>2,"PJT"=>1,"ANJ"=>3,"IoT"=>2]

        public function __construct($fname,$lname,$id,$sscore){
            $this->setFirstName($fname);
            $this->setLastName($lname);
            $this->setId($id);
            $this->setStudentScore($sscore);
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function getId(){
            return $this->id;
        }

        public function getStudentScore(){
            return $this->studentScore;
        }

        public function setFirstName($fname){
            if ($fname) {
                $this->firstName = $fname;
            }
        }

        public function setLastName($lname){
            if ($lname) {
                $this->lastName = $lname;
            }
        }

        public function setId($id){
            if (strlen($id)===11) {
                $this->$id = $id;
            }
        }

        public function setStudentScore($sscore){
            if (count($sscore===5)) {
                $this->studentScore = $sscore;
            }
        }

        /* Vrátí pohlaví studenta - women, men */
        public function getGender(){
            $gender = substr($this->id,2,2);
            if ($gender>50) {
                return "women";
            }
            else{
                return "men";
            }
        }

        /* Vrátí skutečný věk žáka v daném roce*/
        public function getAge(){
            //todo
        }

        /* Vrátí true jestliže je student dívka*/
        public function isGirl(){
            return $this->getGender() === "women";
        }

        /* Vrátí true jestliže je student chlapec*/
        public function isBoy(){
            return $this->getGender() === "men";
        }

        /* Vrátí true jestliže je student plnoletý*/
        public function isAdult(){
            //todo
        }

        /* Vrátí průměrný prospěch ze zadaných předmětů*/
        public function averageScore(){
            //todo
        }

        /* Vrátí true pokud žádná ze známek není 5 */
        public function isSuccessfultudy(){
            //todo
        }



    }
?>