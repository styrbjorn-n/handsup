<?php require ("./header.php"); ?>

<div class="container">
    <div class="function_container">
        <div class="help_que">
            <h1>Student list</h1>
            <div class="list_head">
                <input class="user_input" id="user_input" type="text" onkeydown="enter(this)" maxlength=11>
                <p id="result"></p>
            </div>
            <div id="student_list" class="student_list"></div>
        </div>
    </div>
    <div class="about">
        <div class="why">
            <?php foreach ($about_lines[0] as $line) : ?>
            <p class="why_lines"><?php echo $line; ?></p>
            <?php endforeach; ?>
        </div>
        <div class="how">
            <?php foreach($about_lines[1] as $key => $value) : ?>
            <p class="how_para"><?php echo $value ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require ("./footer.php"); ?>