<?php
function page_header($color='red'){
    print'<html><head><title>Welcome to my site</title></head>';
    print'<body bgcolor='.$color.'>';
}
page_header('violet');
print "Welcome, Mario";
print "</body></html>";
