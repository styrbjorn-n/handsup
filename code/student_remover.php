<?php 
    // a function that when called decreses the "num_student_added.txt" with increments of 1,
    // for every student that has been removed to the help que.
    function student_remover(){
        $students_left = 0;
        $students_file = 'num_student_added.txt';

        if (file_exists($students_file)) {
            $students_left = (int)file_get_contents($students_file);
        }

        $students_left--;

        file_put_contents($students_file, $students_left);
        return ($students_left);
    }
    student_remover();
?>