# php-string-tools

String tools for php, special chars cleaner and string comparison ... [WIP]

## Installation :
`$ composer require julkwel/stringtools`

## Usage :

- String special chars cleaner

Usage :
```
$textToClean = "ÉÉÊÊÎÎÎî ëŷ we are with spécïal charactêrs and w'ill clean";
\Julkwel\StringTools\StrCleaner::cleanString($textToClean)

Output: "eeeeiiii ey we are with special characters and will clean"
```

- String Comparison :

1. Simple use : 
```
echo \Julkwel\StringTools\StrCompare::isStringIsEquals("test", "test");

Output: true
```

2. Special char removal use : 
```
echo \Julkwel\StringTools\StrCompare::isStringIsEquals("têst", "test");

Output: true
```

Feel free to reach out to me and say hi !.
