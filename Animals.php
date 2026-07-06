<?php class Animals {
    public $kind;
    public $name;
    public $age;
    public $sex;

    private static $count = 0;

    public function __construct($kind, $name, $age, $sex){
        $this->kind = $kind;
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        self::$count++;
    }

    public static function showAmount(){
        echo self::$count;        
    }
}

?>