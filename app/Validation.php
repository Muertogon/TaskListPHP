<?php
namespace TaskApp;
class Validation{
    private static $errors=[];
    public static function validate($data){
        self::validateTitle($data['subject']);
        self::validatePriority($data['priority']);
        self::validateDate($data['dueDate']);
        return self::$errors;
    }
    public static function validateTitle($title){
        $valid = preg_match('/^[\w\d ,.]{5,150}$/', $title);
        if (empty($title)){
            Validation::$errors['title'] = "Please input";
        }elseif (!$valid){
            Validation::$errors['title'] = "Has to be from 5 to 150 length";
        }
    }
    public static function validatePriority($priority){
        if (empty($priority)){
            Validation::$errors['priority'] = "Please input";
        }
    }
    public static function validateDate($date){
        if (empty($date)){
            Validation::$errors['date'] = "Please input";
        }
    }
}