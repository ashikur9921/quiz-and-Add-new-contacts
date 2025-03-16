<?php



$questions = [

['question' => 'What is 2 + 2?', 'correct' => '4'],

['question' => 'What is the capital of France?', 'correct' => 'Paris'],

['question' => 'Who wrote "Hamlet"?','correct' => 'Shakespeare'],

];

function quizmark(array $questions ,array $answer) : int{

    $score = 0;
    foreach ($questions as $index => $question) { 
        if
        ($answer[$index] === $question['correct']){
            $score++;
        }
       
    }
    return $score;
}


$answers = [];

foreach ($questions as $index => $question) {

echo ($index + 1) . ". " . $question['question'] . "\n";

$answers[] = trim(readline("Your answer: "));

}
$score = quizmark($questions, $answers);

echo "\nYou scored $score out of " . count($questions) . ".\n";

if ($score === count($questions)) {

echo "Excellent job!\n";

} elseif ($score >= 1) {

echo "Good effort!\n";

} else {

echo "Better luck next time!\n";

}

    





