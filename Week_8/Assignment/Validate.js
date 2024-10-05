function validate(form) {
  fail = validate_NoMoreThan9CreditHours();
  fail += validate_NotPreviouslyRegistered();

  if (fail == "") return true;
  else {
    alert("Client-side Validation Errors = \n" + fail);
    return false;
  }
}

function validate_NoMoreThan9CreditHours() {
  currentCreditHours = document.getElementById("currentCreditHoursElementID");

  if (parseInt(currentCreditHours.textContent) >= 9) {
    return "You cannot register for more than 9 credit hours per term.\n";
  }
  return "";
}

function validate_NotPreviouslyRegistered() {
  return "";
}
