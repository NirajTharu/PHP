<?php
// switch = replacement for the many elseif statements more efficient and less code to write.
$grade = "Fail";

switch ($grade) {
    case "A":
        echo "Your grade is A.";
        break;
    case "B":
        echo "Your grade is B";
        break;
    case "C":
        echo "Your grade is C.";
        break;
    case "D":
        echo "Your grade is D.";
        break;
    case "E":
        echo "Your grade is F.";
        break;
    case "F":
        echo "Your grade is F.";
        break;
    default:
        echo "{$grade} Is not valid.";
}
