<?php
class Member_index extends ALT\Page
{
    public function get()
    {
        $tab = $this->createTab();
        $tab->add("All member", "list");
        $this->write($tab);
    }
}