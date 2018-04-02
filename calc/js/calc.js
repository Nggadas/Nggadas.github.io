var problem = [];
var solution = "";
var bracket = 0;
var answer = 0;

$('#zero').click(function () {
    problem.push(0);

    $('#problem').html(problem);
});

$('#answer').click(function () {
    problem.push(answer);

    $('#problem').html(problem);
});

$('#bracket').click(function () {

    if(bracket === 0){

        bracket += 1;
        problem.push("(");

    } else {

        bracket = 0;
        problem.push(")");
    }

    $('#problem').html(problem);

});

$('#one').click(function () {
    problem.push(1);

    $('#problem').html(problem);

});

$('#two').click(function () {
    problem.push(2);

    $('#problem').html(problem);

});

$('#three').click(function () {
    problem.push(3);

    $('#problem').html(problem);

});

$('#four').click(function () {
    problem.push(4);

    $('#problem').html(problem);

});

$('#five').click(function () {
    problem.push(5);

    $('#problem').html(problem);

});

$('#six').click(function () {
    problem.push(6);

    $('#problem').html(problem);

});

$('#seven').click(function () {
    problem.push(7);

    $('#problem').html(problem);

});

$('#eight').click(function () {
    problem.push(8);

    $('#problem').html(problem);

});

$('#nine').click(function () {
    problem.push(9);

    $('#problem').html(problem);

});

$('#dot').click(function () {
    problem.push(".");

    $('#problem').html(problem);

});

$('#plus').click(function () {
    problem.push("+");

    $('#problem').html(problem);

});

$('#minus').click(function () {
    problem.push("-");

    $('#problem').html(problem);

});

$('#divide').click(function () {
    problem.push("/");

    $('#problem').html(problem);

});

$('#multiply').click(function () {
    problem.push("*");

    $('#problem').html(problem);

});

$('#percent').click(function () {
    problem.push("%");

    $('#problem').html(problem);

});

$('#equals').on('click', function () {

    $.each(problem, function (index, value) {
        solution += value;
    });

    answer = eval(solution);

    $('#solution').html(answer);

    problem = [];
    solution = "";

});

$('#backspace').on('click', function () {

    problem.pop();

    $('#problem').html(problem);

});

$('#clear').on('click', function () {

    $('#problem').empty();
    $('#solution').empty();
    bracket = 0;

    problem = [];
    solution = "";
});