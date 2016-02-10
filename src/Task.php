<?php
class Task
{
    private $description;

    function __construct($description)
    {
        $this->description  = $description;
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }

    static function getAll()
    {
        return $_SESSION['list_of_tasks'];
    }

    function save()
    {
        array_push($_SESSION['list_of_tasks'], $this);
    }

    static function deleteAll()
    {
        $_SESSION['list_of_tasks'] = array();
    }
}
 ?>
