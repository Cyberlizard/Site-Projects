var submitButton = document.getElementById("submit-button");

submitButton.addEventListener("click", function(){
    var errors = document.getElementsByClassName("errors"),
        username = document.getElementById("username"),
        email = document.getElementById("email"),
        comment = document.getElementById("comment"),
        error = false;

    for (var i = 0; i < errors.length; i++)
    {
        errors[i].remove();
    }

    if (username.value.length < 10)
    {
        var usernameErrors = document.getElementById("username-errors");
        usernameErrors.appendChild(document.createElement("p"));

        var errorParagraph = document.querySelector("#username-errors > p:nth-child(1)");        
        errorParagraph.innerHTML = "Името и фамилията трабва да са поне 10 символа";
        errorParagraph.className = "errors";
        error = true;
    }

    if (email.value.length < 5 || !email.value.split("").includes("@") || !email.value.split("").includes("."))
    {
        var emailErrors = document.getElementById("email-errors");
        emailErrors.appendChild(document.createElement("p"));

        var errorParagraph = document.querySelector("#email-errors > p:nth-child(1)");        
        errorParagraph.innerHTML = "Невалиден email";
        errorParagraph.className = "errors";
        error = true;
    }

    if (comment.value.length < 10)
    {
        var commentErrors = document.getElementById("comment-errors");
        commentErrors.appendChild(document.createElement("p"));

        var errorParagraph = document.querySelector("#comment-errors > p:nth-child(1)");        
        errorParagraph.innerHTML = "Коментара трябва да е поне 10 символа";
        errorParagraph.className = "errors";
        error = true;
    }

    if (!error)
    {
        document.getElementById("contacts-form").submit();
    }
}, false);