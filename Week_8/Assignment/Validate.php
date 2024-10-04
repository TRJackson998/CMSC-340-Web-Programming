<?php


function validate_NoMoreThan9CreditHours($avail_Reg_Courses)
{
  $total = 0;
  foreach ($avail_Reg_Courses as $i) {
    if ($i->getRegistered()) {
      $total += $i->getCreditHours();
    }
  }
  if ($total >= 9) {
    return "You cannot register for more than 9 credit hours per term.<br>";
  }
  return "";
}


function validate_NotPreviouslyRegistered($avail_Reg_Courses, $selectCourseElementName)
{
  foreach ($avail_Reg_Courses as $i) {
    if ($i->getRegistered() && $i->getCode() == $selectCourseElementName) {
      return "You are already registered for the $selectCourseElementName.<br>";
    }
  }
  return "";
}
