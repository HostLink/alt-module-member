<?php
class Member_ae extends ALT\Page
{
    public function get()
    {
        $e = $this->createE();
        $e->add("First name")->input("first_name");
        $e->add("Last name")->input("list_name");
        $e->add("Phone")->input("phone");
        $e->add("Address")->textarea("address");
        $this->write($this->createForm($e));
    }
}