<?php
/*
Plugin Name: Bob Marley Quotes
Plugin URI: http://www.trendyink.net/blog/bob-marley-quote-wp-plugin/
Description: This is a plug-in based on the Hello Dolly plug-in that comes as a default with Wordpress. I liked the idea of that so much, I figured that the inspiring words of Bob Marley would be a cool alternative. When activated you will randomly see a lyric from Bob Marley's archive in the upper right of your admin screen on every page.
Author: zOnk.oNe based on original by Matt Mullenweg
Version: 1.1
Author URI: http://www.trendyink.net/blog
*/

// These are various lyrics from Bob Marley
$lyrics = "And we know we shall win as we are confident in the victory
Only your friend know your secrets
Who the cap fit, let them wear it!
Some will hate you, pretend they love you now
But who Jah bless, no one curse
Don't involve Rasta in your say say
Rasta don't work for no C.I.A
Collective security for surety, ye-ah!
Don't forget your history, know your destiny
In the abundance of water, the fool is thirsty
There's a natural mystic blowing through the air
One and all have to face reality now
Though I've tried to find the answer to all the questions they ask
These are the big fish, who always try to eat down the small fish
Woe to the downpressors
Movement of Jah people!
Are you satisfied with the life you're living?
Rise up this mornin', smiled with the risin' sun
Don't worry about a thing
Cause every little thing gonna be all right
Iyaman Iration, yeah! Irie ites!
Why not help one another on the way?
Say you just can't live that negative way
So much trouble in the world
Jah sun is on the rise once again
Every man gotta right to decide his own destiny
So arm in arms, with arms, we'll fight this little struggle
To divide and rule could only tear us apart
In everyman chest, mm - there beats a heart
So I Idren, I sistren, a-which way will we choose?
Feel it in the one drop
We, Jah people, can make it work
Come together and make it work, yeah!
Don't gain the world and lose your soul
Wisdom is better than silver and gold
The road of life is rocky and you may stumble too
You ain't gonna miss your water until your well runs dry
Emancipate yourselves from mental slavery
None but ourselves can free our minds
A Reggae Music, mek we chant down Babylon
Give thanks and praises to the Most-I
Guide and protect I'n'I, O Jah - Jah
Don't make my life a prison
In desolate places we'll find our bread
We free the people with music (sweet music)
They feel so strong to say we are weak
The lips of the righteous teach many
Trodding through creation in a irie meditation
So if you are the big tree, we are the small axe
One good thing about music, when it hits you (you feel no pain)
Why's this fussing and a-fighting?
Please don't you rock my boat
Brainwash education to make us the fools
Open your eyes, look within
Are you satisfied with the life you're living?
In this bright future you can't forget your past
Just can't live that negative way
You have to be someone
My future is righteousness
Don't forget your history nor your destiny
Love would never leave us alone
If puss and dog can get together, why cant we love one another?
The harder the battle the sweet of jah victory
When one door is closed, don't you know, another is open
Flee from hate, mischief and jealousy
We're leaving Babylon";

// Here we split it into lines
$lyrics = explode("\n", $lyrics);
// And then randomly choose a line
$chosen = wptexturize( $lyrics[ mt_rand(0, count($lyrics) - 1) ] );

// This just echoes the chosen line, we'll position it later
function bob_marley_quote() {
	global $chosen;
	echo "<p id='marley'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_footer', 'bob_marley_quote');

// We need some CSS to position the paragraph
function marley_css() {
	echo "
	<style type='text/css'>
	#marley {
		position: absolute;
		top: .7em;
                margin: 0;
                padding: 0;
		right: 395px;
		font-size: 16px;
		color: #d54e21;
	}
	</style>
	";
}

add_action('admin_head', 'marley_css');

/*  Copyright 2008  zOnk oNe  (email : zonk675@trendyink.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

?>
