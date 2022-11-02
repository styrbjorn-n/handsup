<?php 
    // a function that is called at the initial load in of the site,
    // and sets the "num_student_added.txt" to 0 as,
    // when the site is first acsesed.
    function list_clearer(){
        $students_file = 'num_student_added.txt';
        $students_clearing_value = 0;

        file_put_contents($students_file, $students_clearing_value);
    }
    list_clearer();
?>