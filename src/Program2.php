<?php
class Program2
{
    private $name;
    private $age;
    private $fcolor;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_age($age)
    {
        $this->age = $age;
    }

    public function set_fcolor($fcolor)
    {
        $this->fcolor = $fcolor;
    }

    public function get_name()
    {
        if (!ctype_alpha($this->name))
        {
            throw new \InvalidArgumentException('Name is not alphabet');
        }
        return $this->name;
    }

    public function get_age()
    {
        if(!is_numeric($this->age))
        {
            throw new \InvalidArgumentException('Age is not a number');
        }
        elseif($this->age > 70)
        {
            throw new \InvalidArgumentException('Age is greater than 70');
        }
        return $this->age;
    }

    public function get_fcolor()
    {
        if(!ctype_alpha($this->fcolor))
        {
            throw new \InvalidArgumentException('Color is not alphabet');
        }
        return $this->fcolor;
    }
}