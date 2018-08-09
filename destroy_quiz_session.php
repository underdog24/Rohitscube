<?php
session_start();
print_r("abc");
unset($_SESSION['answer_array']);
unset($_SESSION['qid_array']);
session_commit();

header("Location: ./home_page_student.php");
?>