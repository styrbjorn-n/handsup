// may be refined or removed, given the time
// a AJAX function that get the value stored in num_student_added.txt,
// and uppdates the P tag "result".
function AJAXRead(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        document.getElementById('result').innerHTML = this.responseText;
    }
    xhttp.open("GET", "num_student_added.txt");
    xhttp.send();
}

// gets the relevant id's and classes.
const help_que = document.getElementsByClassName ('help_que')[0];
const student_list = document.getElementById('student_list');
const user_input = document.getElementById('user_input');

// a function that creates a new html element with the value that the user enterd
// in the html input. and at the end it runs the setListener function to make the 
// dynamic element removable
function add_student(){
    var student = document.createElement("div");
    student.innerHTML = '<h2>'+ '- ' + user_input.value +'</h2>';
    student.setAttribute("id", "student");
    student.setAttribute("class", "student-item");
    student_list.appendChild(student);

    setListener(student);
}

// a function that adds a event listener to the dynamic elements,
// created by the add_student function.
// and when the event is triggerd ("clicked") it removes the element.
function setListener(event_list) {
    event_list.addEventListener('click', function() {
        this.remove();
        fetch ('student_remover.php');  // may be refined or removed, given the time
        AJAXRead(); // may be refined or removed, given the time
    });
}

// a function to check if the enter key has been hit and if it has,
// it runs the function to create a new student.
// and then it clears the input field.
function enter() {
    if(event.key === 'Enter') {
        add_student();
        fetch ("student_adder.php"); // may be refined or removed, given the time
        user_input.value = "";
        AJAXRead(); // may be refined or removed, given the time
    }
}