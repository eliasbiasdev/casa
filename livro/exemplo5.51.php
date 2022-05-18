<?php

function page_header($title,$color,$user ='Elias'){
    print '<html><head><title>' .$title . '</title></head>';
    print '<body bgcolor="#'.$color.'">';
    print 'Seja bem vindo,'.$user.'';

}

page_header('Meu site','4F4F4F',' Elias Bias Angelo Junior');
print '</body></html>';