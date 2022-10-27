const help_que = document.getElementsByClassName ("help_que")[0];
const student_list = document.getElementById("student_list");
const user_input = document.getElementById("user_input");

function add_item(){
    var h2 = document.createElement("h2");
    h2.innerHTML = ". " + user_input.value;

    h2.addEventListener("click", function(){
        h2.value = "";
    })

    user_input.value = "";
}

user_input.addEventListener("click", function(event){
    if(event.key == "enter") {
        add_item();
    }
})