<?php
echo "Independent National Electoral Commission (INEC)";
echo "<br>";
echo "<br>";
echo "Validation Portal";
echo "<br>";
echo "<br>";
$sufferageAge ="18";
$pvc ="true";
$ward ="020";
if ($sufferageAge >= "18") {
    echo "voter is eligible to vote";
}
 else {
    echo "voter is not up to sufferage age";
};
echo "<br>";
echo "<br>";
if ($pvc== "true") {
    echo "Registered";
} else {
    echo "not registered";
};
echo "<br>";
echo "<br>";
if ($ward== "020") {
    echo "valid ward";
} else {
    echo "invalid ward";
};
echo "<br>";
echo "<br>";
if ($sufferageAge >= "18" && $pvc == "true" && $ward =="020") {
    echo "it is valid";
}
 else {
    echo "age doesn't match";
};
?>
