<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    $totalQuestions = 3;

    // Correct answers
    $answers = [
        'q1' => 'a',  // Paris
        'q2' => 'b',  // Jupiter
        'q3' => 'b'   // William Shakespeare
    ];

    // Check the answers
    foreach ($answers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
            $score++;
        }
    }

    // Show the result
    echo "<h1>Quiz Result</h1>";
    echo "<p>You scored $score out of $totalQuestions.</p>";

    if ($score == $totalQuestions) {
        echo "<p>Excellent! You got all the answers right!</p>";
    } elseif ($score > 0) {
        echo "<p>Good job! You got some answers correct.</p>";
    } else {
        echo "<p>Better luck next time!</p>";
    }
} else {
    echo "No data received.";
}
?>
