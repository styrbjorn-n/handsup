<?php require ("./student_clearer.php"); ?>
<?php 
    $about_lines = [
        $first_lines = [
            'This webtool was made to help',
            'teachers keep track of which',
            'students are in need of help',
            'n the classroom.',
        ],
        $second_lines = [
            "add" => "To add a student to the help queue,
            the teacher simply needs to enter the
            student's name into the input field, seen below.",
            "remove" => "Once a student has received help,
            they can be removed from the list, 
            by simply pressing on their name."

        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <title>handsup</title>
</head>
<body>