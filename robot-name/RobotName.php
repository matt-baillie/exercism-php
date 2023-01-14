<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

// $names = (array) null;

class Robot
{
    private static array $nameLog = [];
    public string $name = '';

    // public function __construct()
    // {
    //     $this->name = $this->getName();
    // }

    public function getName(): string
    {
        // if ($this->name === '') {

        //     $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        //     $this->name = $letters[rand(0, 25)] . $letters[rand(0, 25)] . rand(0, 9) . rand(0, 9) . rand(0, 9);
        //     if (in_array($this->name, self::$names)) {
        //         $this->name = "";
        //         $this->getName();
        //     } else {

        //         array_push(self::$names, $this->name);
        //     }
        //     return $this->name;
        // }
        if ($this->name === "") {
            // $letters = [];
            // for ($i = 0; $i < 2; $i++) {
            //     array_push($letters, chr(rand(65, 90)));
            // }
            // $nums = [];
            // for ($i = 0; $i < 3; $i++) {
            //     array_push($nums, rand(0, 9));
            // }
            // $this->name = implode("", [...$letters, ...$nums]);
            $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $this->name = $letters[rand(0, 25)] . $letters[rand(0, 25)] . rand(0, 9) . rand(0, 9) . rand(0, 9);
            if (in_array($this->name, self::$nameLog)) {
                $this->name = "";
                $this->getName();
            } else {
                array_push(self::$nameLog, $this->name);
            }
        }
        return $this->name;
    }

    public function getNames()
    {
        // print_r(self::$names);
    }
    public function reset(): void
    {
        $this->name = '';
        return;
    }
}

$newBot = new Robot();
$newBot2 = new Robot();
$newBot3 = new Robot();
echo "Current name is: $newBot->name \n";
echo $newBot->getName();

echo $newBot->reset();
echo "\n";
echo $newBot->name . "\n";
echo "Current name is: $newBot->name\n";
echo $newBot->getName();
$newBot3->getNames();
