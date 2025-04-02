<?php
require 'connection.php'; // Ensure this file contains your PDO connection

// Define correct answers
$correct_answers = [
    "question_1" => "To test a condition to determine whether or not to run a code block.",
    "question_2" => "echo",
    "question_3" => "$_POST",
    "question_4" => "session_start()",
    "question_5" => "mysqli_connect()"
];

// Validate answers & calculate score
$total = count($correct_answers);
$correct = 0;

foreach ($correct_answers as $q => $ans) {
    if (!isset($_POST[$q])) {
        die("Error: Answer all questions. <a href='TestPage.php'>Go back</a>");
    }
    $correct += ($_POST[$q] === $ans) ? 1 : 0;
}

// Store score in the database using PDO
$score = ($correct / $total) * 100;
$stmt = $pdo->prepare("INSERT INTO results (user_id, score) VALUES (:user_id, :score)");
$stmt->execute(['user_id' => 1, 'score' => $score]);

// Display results
echo "<h1>Exam Results</h1><p>Score: <strong>$score%</strong></p><h2>Review:</h2>";

foreach ($correct_answers as $q => $ans) {
    $user_ans = $_POST[$q];
    echo "<p><strong>$q:</strong> Your Answer: " . htmlspecialchars($user_ans) . 
         "<br>Correct: " . htmlspecialchars($ans) . 
         "<br>" . ($user_ans === $ans ? "<span style='color:green;'>Correct</span>" : "<span style='color:red;'>Incorrect</span>") . "</p>";
}
?>
