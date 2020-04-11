var manageTeacherTable;
var base_url = $("#base_url").val();

$(document).ready(function () {
    manageTeacherTable = $("#manageTeacherTable").DataTable({
        'ajax': base_url + 'teacher/fetchTeacherData',
        'order': []
        
    });
})

