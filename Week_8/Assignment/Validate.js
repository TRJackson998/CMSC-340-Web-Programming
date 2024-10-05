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
  // Get the text from the select element to find the selected course
  select = document.getElementById("selectCourseElementID");
  selectIndex = select.selectedIndex; // find the index of the selected element
  selectedCourse = select.options.item(selectIndex).text; // pull out the text

  // Get the text from the td element listing registered courses and turn it into an array
  selectedCourses = document.getElementById("currentCoursesElementID");
  selectedCoursesText = selectedCourses.innerHTML; // get the HTML text of the element
  selectedCoursesText = selectedCoursesText.replace(/<*td>/, ""); // remove outer td tags
  selectedCoursesArray = selectedCoursesText.split("<br>"); // split elements on br tags

  // Loop over the array to find out whether already registered
  for (i = 0; i < selectedCoursesArray.length; i++) {
    loopCourse = selectedCoursesArray[i];
    if (selectedCourse == loopCourse) {
      return "You are already registered for the " + selectedCourse;
    }
  }
  return "";
}
