<?php
class Member_list extends ALT\Page
{
    public function get()
    {
        $rt = $this->createRT2();
        $rt->addView();
        $rt->addEdit();
        $rt->addDelete();

        $rt->add("First name", "first_name")->ss();
        $rt->add("Last name", "last_name")->ss();
        $rt->add("Phone", "phone")->ss();

        $this->write($this->createForm($e));
    }
}