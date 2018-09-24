<?php
function countdown($top)
{
    while($top<0){
        print "$top...";
        $top--;
    }
    print "Boom\n";
}
$counter=5;
countdown($counter);
print("The counter is now $counter");