$('#validationForm').submit(function (event) {

    event.preventDefault();  //制止表單發送

    var name = $("#email-name").val();
    var email = $("#email-address").val();
    var pass1 = $("#pass1").val();
    var pass2 = $("#pass2").val();
    var message = $("#mail-message").val();
    var submit = $("#submitButton").val();

    $("#error").load("mailWork.php", { //ajax

        name: name,
        email: email,
        pass1: pass1,
        pass2: pass2,
        message: message,
        submit: submit,

    });

});



