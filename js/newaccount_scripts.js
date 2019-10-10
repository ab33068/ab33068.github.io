$(function()
{
  $("#createaccount input[name=submit]").click(function()
  {
    var frmObject = document.forms[0];
    var checkError = false;

    var firstnameErr = document.getElementsByClassName("firstname_error");
    var lastnameErr = document.getElementsByClassName("lastname_error");
    var emailErr = document.getElementsByClassName("email_error");
    var passwordErr = document.getElementsByClassName("password_error");
    var confirmPasswordErr = document.getElementsByClassName("confirmpassword_error");

    if(frmObject.elements['firstname'].value=="")
    {
      checkError = true;

      if(firstnameErr.length==0)
      {
        var para = document.createElement("p");
        para.classList.add("firstname_error");

        var t = document.createTextNode("Please enter your first name.");

        para.appendChild(t);

        var z = document.getElementById("firstname");
        z.parentNode.appendChild(para);

        para.style.color = "red";
      }
    }
    else
    {
      if (firstnameErr.length>0)
      {
        firstnameErr[0].remove();
      }
    }

    if(frmObject.elements['lastname'].value=="")
    {
      checkError = true;

      if(lastnameErr.length==0)
      {
        var para = document.createElement("p");
        para.classList.add("lastname_error");

        var t = document.createTextNode("Please enter your last name.");

        para.appendChild(t);

        var z = document.getElementById("lastname");
        z.parentNode.appendChild(para);

        para.style.color = "red";
      }
    }
    else
    {
      if (lastnameErr.length>0)
      {
        lastnameErr[0].remove();
      }
    }

    if(frmObject.elements['email'].value=="")
    {
      checkError = true;

      if(emailErr.length==0)
      {
        var para = document.createElement("p");
        para.classList.add("email_error");

        var t = document.createTextNode("Please enter your student email.");

        para.appendChild(t);

        var z = document.getElementById("email");
        z.parentNode.appendChild(para);

        para.style.color = "red";
      }
    }
    else
    {
      if (emailErr.length>0)
      {
        emailErr[0].remove();
      }
    }

    if (frmObject.elements['password'].value=="")
    {
      checkError = true;

      if (passwordErr.length == 0)
      {
        var para = document.createElement("p");
        para.classList.add("password_error");

        var t = document.createTextNode("Please enter a valid password");

        para.appendChild(t);

        var z = document.getElementById("password");
        z.parentNode.appendChild(para);

        para.style.color = "red";
      }
    }
    else {
      if (passwordErr.length>0)
      {
        passwordErr[0].remove();
      }
    }

    if (frmObject.elements['confirm-password'].value=="")
    {
      checkError = true;

      if (confirmPasswordErr.length == 0)
      {
        var para = document.createElement("p");
        para.classList.add("confirmpassword_error");

        var t = document.createTextNode("Please enter a matching password");

        para.appendChild(t);

        var z = document.getElementById("confirm-password");
        z.parentNode.appendChild(para);

        para.style.color = "red";
      }
    }
    else
    {
      if (confirmPasswordErr.length>0)
      {
        confirmPasswordErr[0].remove();
      }
    }

    if (checkError)
    {
      event.preventDefault();
    }
  });
});
