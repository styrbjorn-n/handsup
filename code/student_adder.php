<?php 
    // a function that when called adds to the "num_student_added.txt" with increments of 1,
    // for every student that has been added to the help que.
    function student_adder(){
        $students_added = 0;
        $students_file = 'num_student_added.txt';

        if (file_exists($students_file)) {
            $students_added = (int)file_get_contents($students_file);
        }

        $students_added++;

        file_put_contents($students_file, $students_added);
        return ($students_added);
    }
    student_adder();
    ?>