/*
Codeland Username Validation
Have the function CodelandUsernameValidation(str) take the str parameter being passed and determine if the string is a valid username according to the following rules:

1. The username is between 4 and 25 characters.
2. It must start with a letter.
3. It can only contain letters, numbers, and the underscore character.
4. It cannot end with an underscore character.

If the username is valid then your program should return the string true, otherwise return the string false.



Examples

Input: "aa_"
Output: false

Input: "u__hello_world123"
Output: true

*/



<?php 

function CodelandUsernameValidation($str) {


  // 1. The username is between 4 and 25 characters.
  if (strlen($str) < 4 && strlen($str) > 25)
    return "false";

  // 2. It must start with a letter.
  if (!in_array($str[0], range('a', 'z')))
    return "false";

  // 3. It cannot end with an underscore character.
  if (substr($str, -1) == "_")
    return "false";

  // 4. It can only contain letters, numbers, and the underscore character.
  if (!preg_match('/^[\w]+$/', $str)) 
    return "false";

  return "true";

}
   
// keep this function call here  
echo CodelandUsernameValidation("aa_");  

?>