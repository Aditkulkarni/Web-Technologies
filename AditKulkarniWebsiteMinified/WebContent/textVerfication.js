function myFunction(){document.getElementById("myname").innerHTML="Adit Kulkarni"}
function validateEmail(emailField){var reg=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;if(reg.test(emailField.value)==!1)
{alert('Invalid Email Address');return!1}
return!0}
function validateNumber(number){var reg=/^[2-9]\d{2}-\d{3}-\d{4}$/;if(reg.test(number.value)==!1)
{alert('Invalid Number');return!1}
return!0}