var arr_status = [];
var arr_subjects = [];
var arr_comments = [];
var arr_id = [];


function input_array(i){
var id = document.getElementById("id"+i).value;
var status = document.getElementById("status"+i).value;
var subject = document.getElementById("subject"+i).value;
var comment = document.getElementById("comment"+i).value;
arr_id.push(id);
arr_status.push(status);
arr_comments.push(comment);
arr_subjects.push(subject);
document.getElementById("ids").value = arr_id;
document.getElementById("subjects").value = arr_subjects;
document.getElementById("statuses").value = arr_status;
document.getElementById("comments").value = arr_comments;
}


  
    
