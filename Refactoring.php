<?php

interface Contact{
    public function name(string $name): Contact;
    public function surname(string $surname): Contact;
    public function email(string $email): Contact;
    public function phone(string $phone): Contact;
    public function address(string $adress): Contact;

}

class User1 implements Contact{

    protected $new;
    public static $all = [];

    public function name(string $name): Contact
    {
        array_push(self::$all, $name);
        return $this;

    }  asdasd jksndklsndf


    public function surname(string $surname): Contact
    {
        array_push(self::$all, $surname);
        return $this;
    }


    public function email(string $email): Contact
    {
        array_push(self::$all, $email);
        return $this;
    }

    public function phone(string $phone): Contact
    {
        array_push(self::$all, $phone);
        return $this;
    }

    public function address(string $adress): Contact
    {
        array_push(self::$all, $adress);
        return $this;
    }

    public function build()
    {
        return self::$all;
    }
}

function ClientCode($contact)
{
$newContact = $contact
    ->name("John")
    ->surname("Surname")
    ->email("john@email.com")
    ->address("Some address")
    ->build();

print_r($newContact);
    }
$contact = new User1(ClientCode());
    ClientCode(new User1());
