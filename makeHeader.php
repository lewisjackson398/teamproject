<?php
function makeHeader()
{
    $header = <<<HEADER
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>MetroGym - Home</title>
       <link rel="shortcut icon" type="image/x-icon"
          href="https://static1.squarespace.com/static/54627257e4b0f587f5d3706c/t/54628d1ce4b073a05b571f08/favicon.ico" />
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link href="css/style.css" rel="stylesheet">
       
    </head>
HEADER;
    return $header;
}
