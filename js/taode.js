var count_question = 1;

$('#add-question').on('click', function() {
    count_question++;
    var html = '<hr id="hr' + count_question + '"> ';
    html += '<div class = "form-group" id="incorrect-header' + count_question + '">';
    html += '<h2 class = " col-sm-4 col-sm-offset-2 text-left"> Đáp án sai ' + count_question + ' </h2> ';
    html += '</div>';
    html += '<div class = "form-group row" id="incorrect-row' + count_question + '">';
    html += '<label class = "control-label col-sm-2" for = "incorrect-question' + count_question + '" > Đáp án sai ' + count_question + ' </label> ';
    html += '<div class = "col-sm-10" >';
    html += '<input type = "text" class = "form-control" id = "incorrect-question' + count_question + '" >';
    html += '</div> </div> ';
    $('#form-question').append(html);
});

$('#remove-question').on('click', function() {

    if (count_question <= 1) {
        return;
    }
    $('#hr' + count_question).remove();
    $('#incorrect-header' + count_question).empty();
    $('#incorrect-header' + count_question).remove();
    $('#incorrect-row' + count_question).empty();
    $('#incorrect-row' + count_question).remove();
    count_question--;


});


$('#fab').click(function() {
    $('#fab-toggle').toggleClass('hidden');

});

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});