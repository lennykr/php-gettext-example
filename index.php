<?php

// Set language to Dutch (Flemish)
putenv('LC_ALL=nl_BE');
setlocale(LC_ALL, 'nl_BE'); 

// Specify location of translation tables
bindtextdomain("myPHPApp", "./locale");

// Choose domain 
textdomain("myPHPApp");

// Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now

// Print a test message
echo gettext("Welcome to My PHP Application") . "\n";

// Or use the alias _() for gettext()
echo _("Have a nice day"); 