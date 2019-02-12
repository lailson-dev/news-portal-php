<?php

function clearStr($str)
{
	$string = strtr(utf8_decode($str),
        utf8_decode('ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
                 'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy');
 
	$string = str_replace(',', '', $string);
	$string = str_replace('.', '', $string);
	$string = str_replace(' ', '-', $string);

	return $string;
}