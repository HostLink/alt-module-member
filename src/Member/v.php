<?

class Member_v extends ALT\Page
{
    public function get()
    {
        $v = $this->createV();
        $v->add("First name", "first_name");
        $v->add("Last name", "last_name");
        $v->add("Phone", "phone");
        $this->write($v);
    }
}