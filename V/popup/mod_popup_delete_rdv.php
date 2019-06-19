<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>text</title>
    <link rel="stylesheet" href="./style/popup.css">
    <script type="text/javascript" src="index.php?page=modif_rdv"></script>
</head>
<body>
<div class="popup"> <a href="index.php?page=modif_rdv" class="close"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    x="0px" y="0px" width="10px" height="10px" viewBox="215.186 215.671 80.802 80.8"
    enable-background="new 215.186 215.671 80.802 80.8" xml:space="preserve">
        <polygon fill="#FFFFFF" points="280.486,296.466 255.586,271.566 230.686,296.471 215.19,280.964 240.086,256.066 215.186,231.17 
	230.69,215.674 255.586,240.566 280.475,215.671 295.985,231.169 271.089,256.064 295.987,280.96 " />
       </svg></a>

    <div class="valid">
        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" width="15px" height="15px" viewBox="222.744 227.408 67.744 58.526"
        enable-background="new 222.744 227.408 67.744 58.526" xml:space="preserve">
            <path fill="#39BA6F" d="M250.062,285.934c-9.435-11.111-15.731-18.195-27.318-28.935l5.793-5.357
	c6.778,3.28,11.076,5.774,18.693,11.204c14.32-16.25,23.783-24.495,41.372-35.438l1.886,4.335
	C275.983,244.402,265.359,258.502,250.062,285.934z" />
        </svg>
    </div>
     <h1>Do you want to cancel your rdv?</h1>

    <p></p>
    <input type="hidden" name="id_rdv" value="<?php echo $_SESSION['id_rdv']?>"><br>
    <div class="bottom-popup"><a class="start" href="index.php?page=delete_rdv">Yes</a>
    </div>
</div>
</body>
</html>