const help_que = document.getElementsByClassName ('help_que')[0];
const student_list = document.getElementById('student_list');
const user_input = document.getElementById('user_input');

function add_item(){
    var student = document.createElement("div");
    student.innerHTML = '<h2>'+ '- ' + user_input.value +'</h2>';
    student.setAttribute("id", "student")
    student_list.appendChild(student);

    setListener(student);
}

function setListener(event_list) {
    event_list.addEventListener('click', function() {
        this.remove();
    });
}

function enter() {
    if(event.key === 'Enter') {
        add_item();
    }
}
