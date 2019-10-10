$(function()
{
  $("#login input[name=submit]").click(function()
  {
    var frmObject = document.forms[0];
    var checkError = false;

    var usernameErr = document.getElementsByClassName("username_error");
    var passwordErr = document.getElementsByClassName("password_error");

    // debugger;

    //Username text box
    if (frmObject.username.value=="")
    {
      checkError = true;

      if (usernameErr.length == 0)
      {
        var para = document.createElement("p");
        para.classList.add("username_error");  //add a class name to the new div element

        var t = document.createTextNode("Please enter your student email.");

        para.appendChild(t);

        var z = document.getElementById("username");
        z.parentNode.appendChild(para);

        para.style.color = "#ff0000";
      }
    }
    else
    {
      if (usernameErr.length > 0)
      {
        usernameErr[0].remove();
      }
    }

    // Password text box
    if (frmObject.password.value=="")
    {
      checkError = true;

      if (passwordErr.length == 0)
      {
        var para = document.createElement("p");
        para.classList.add("password_error");  //add a class name to the new div element

        var t = document.createTextNode("Please enter a valid password.");

        para.appendChild(t);

        var z = document.getElementById("password");
        z.parentNode.appendChild(para);

        para.style.color = "#ff0000";
      }
    }
    else
    {
      if (passwordErr.length > 0)
      {
        passwordErr[0].remove();
      }
    }

    if (checkError)
    {
      event.preventDefault();
    }
  });
});
