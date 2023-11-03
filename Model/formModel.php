<?php
class Request {
    public $id;
    public $name;
    public $service;
    public $email;
    public $phone;
    public $message;

    // Constructor de la clase
    public function __construct($id, $name, $service, $email, $phone, $message) {
        $this->id = $id;
        $this->name = $name;
        $this->service = $service;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    // Métodos para obtener y establecer propiedades
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

        public function getService() {
        return $this->service;
    }

    public function setService($service) {
        $this->service = $service;
    }

            public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

                public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

                public function getMessage() {
        return $this->email;
    }

    public function setMessage($message) {
        $this->message = $message;
    }
}
?>