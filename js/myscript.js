/*
    Make by Cao Khánh Nhật
*/

var count_question = 0;

$('#add-item').on('click', function() {
    count_question++;

    $('#content-question').html("<label for='question'" + count_question + ">Đáp án " + count_question + "</label>");
});