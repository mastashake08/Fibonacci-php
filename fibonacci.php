<?php

$input = '';
$running = true;
while($running){
try{
getInput($input);
echo calculateFib($input) . "\n";
}
catch(Exception $e){
echo "Message: {$e->getMessage()}";
}
}

function getInput(&$input){
$input = readline("Please input your number or q to quit: ");
};

function calculateFib($input){
if(intval($input) < 0){
throw new Exception("Input must be greater than zero! \n");
}
elseif($input === 'q' || $input === 'Q'){
exit();
}
if(intval($input) === 0 || intval($input) === 1){
return 1;
}
else{
return calculateFib($input-1) + calculateFib($input - 2);
}
};
?>

