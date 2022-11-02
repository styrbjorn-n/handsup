<?php require ("./student_clearer.php"); ?>
<?php 
    $about_lines = [
        $first_lines = [
            'This webtool was made to help',
            'teatchers keep tarck of which',
            'student are in need of help',
            'in the classroom.',
        ],
        $second_lines = [
            "add" => "To add a student to the help que,
            the teacher simply needs to enter the
            students name in the input field seen below.",
            "remove" => "Once a student has resived help,
            they can be removed from the list. 
            Simply by pressing on there name."

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