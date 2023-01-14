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
// highest score from the list, 
// the last added score 
// the three highest scores

// declare(strict_types=1);

class HighScores
{
    public $scores;
    public $latest;
    public $personalBest;
    public $personalTopThree;
    public function __construct(array $scores)
    {
        $this->scores = $scores;
        $this->latest = end($scores);
        $this->personalBest = max($scores);


        rsort($scores);
        $this->personalTopThree = $this->personalTopThree();
    }
    function personalTopThree()
    {
        $scores = $this->scores;
        rsort($scores);
        return array_slice($scores, 0, 3);
    }
}
$input = [30, 50, 20, 70];
$newScores = new HighScores($input);

print_r($newScores->scores);
print_r($newScores->personalTopThree());
