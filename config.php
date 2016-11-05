<?php

/*----------------------------------------------------------GENERAL CONFIG-----------------------------------------------------------*/
// The name of your server goes here.
$servertitle = "Jade Gaming RP";

// *REQUIRED* Replace below with your server IP, if you're hosting the loading screen alongside your gameserver on the same server instead of a web host, keep it as is! 
$serverip = "74.91.125.121";

// *REQUIRED* Set the port of your server here, this is typically 27015!
$serverport = "27015";

// *REQUIRED* You can obtain a Steam API Key at http://steamcommunity.com/dev/apikey
$SteamAPIKey = "8C51DA174801A73103B2BA37CBACBCE2";

// Sets the stripe color on your boxes, leave blank to have no stripe.
// Please use hex codes, and don't forget the #. You can find hex codes at http://colorpicker.com/
$color = "#FF8800"; 

// There is a slight dark tint over the backgrounds, true = on, false = off.
$bgtint = true; 

// If you have tint enabled, here you can edit how dark the tint is, highest = 1 (solid), lowest = 0 (transparent)
$bgtintlevel = "0.2";

// Toggle whether OGG files in the music folder should play or not, true = on, false = off.
$musicenabled = true;

// If music is enabled, set what volume you want it to be here, highest = 1 (100%), lowest = 0 (0%).
$musicvolume = 0.2;

/*-------------------------------------------------------------HEADER BOX------------------------------------------------------------*/
// The header box will use the server name above as the text unless you have headerlogo set to true.

// The box behind the server title/logo. true = on, false = off. (The logo/text will still show if you turn this off)
$headerbox = true;

// Use an image instead of plain text? true = on, false = off.
// The loading screen will use logo.png, logo.jpg or logo.jpeg in the main directory by default. LOGOS SHOULD BE NO BIGGER THAN 875x145 PIXELS!
$headerlogo = false;


/*----------------------------------------------------------DESCRIPTION BOX----------------------------------------------------------*/
// Text that shows at the top of the description box (If your mode includes the box).
$descriptionheading = "About Us"; 

// Do you want the text to align to the right, left, center or to justify over the whole width?
// Options: left || right || justify || center
$descalign = "justify";

// Text that you put here will be displayed in your description box (If your mode includes the box).
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$description = "Welcome to Jade Gaming Servers. We are a new community looking for active players and staff. Enjoy your stay with us today and please leave us some advice. -Dusty.";


/*-------------------------------------------------------------RULES BOX-------------------------------------------------------------*/
// Text that shows at the top of the rules box (If your mode includes the box).
$rulesheading = "Core Rules";

// Rules - The maximum is 8 but less may be shown depending on your mode.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$rule1 = "No Random Death Match.";
$rule2 = "Follow the new life rule.";
$rule3 = "Do not abuse props.";
$rule4 = "Follow all admin rules and orders.";
$rule5 = "Respect other players.";
$rule6 = "Racism will not be tolerated.";
$rule7 = "Make sure to role play when possible. Makes it fun for everyone.";
$rule8 = "Have fun and enjoy.";


/*--------------------------------------------------------------USER BOX-------------------------------------------------------------*/
// Show the user's full name as shown on Steam. true = on, false = off.
$showname = true;

// Show the user's country code as shown on Steam. true = on, false = off.
$showlocation = true;

// Show the user's current IP address. true = on, false = off.
$showip = true;

/*-------------------------------------------------------------SERVER BOX------------------------------------------------------------*/
// Text that shows at the top of the server info box (If your mode includes the box).
$serverheading = "Server Info";

// If your server is lacking in players and you want to influence people to join, turning off online players being shown may be useful.
// true = on, false = off.
$showplaying = false;

/*-------------------------------------------------------------QUOTE BOX-------------------------------------------------------------*/
// Text that shows at the top of the quote box (If your mode includes the box).
$quoteheading = "Pro Tips";

// To add more messages, just follow the syntax. The messages are displayed in the order you have them in.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$quotes = array(
	'quote1' => "Showing Quote 1",
    'quote2' => "Showing Quote 2",
    'quote3' => "Showing Quote 3",
	'quote4' => "Thanks for buying Mallard LoadScreen",
);
?>