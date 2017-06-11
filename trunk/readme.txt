=== WP_Mail delay for Amazon SES ===
Contributors: rmast
Tags: wp_mail delay SES
Donate link: http://www.tekenbeetziekten.nl
Requires at least: 4.7.5
Tested up to: 4.7.5
Stable tag: trunk
License: This code is released under the GPL licence version 3 or later, available here
License URI: http://www.gnu.org/licenses/gpl.txt

Amazon SES provided me 14 outbound e-mails a second, while many mailers, like KNews, require to send about 50 mails quickly per 10 minutes. More than 14 mails a second would result in errors at SES. So if you just wait 1/14th of a second each mail you are guaranteed not to send more mails than 14 each second.

== Description ==
Amazon SES provides max. 14 outbound e-mails a second, while many mailers, like KNews, require 50 mails per 10 minutes. More than 14 mails a second would result in errors at SES. So if you wait 1/14th of a second each mail you are guaranteed not to send more mails than 14 each second.

If there are other mailproviders that require a maximum number of mails per second to be sent this plugin could be a base as well. It does not contain any Amazon SES-specific code, nor does it contain any configuration options. Please feel free to contribute this extra if necessary.

It differs from the Delayed Email plugin while that schedules single e-mails for the future while this one just delays and awaits the delay by making the thread asleep for the needed amount of time for Amazon SES to accept new e-mails, but still being able to report back logmessages to mailers like KNews.


== Installation ==
If it\'s not automatically plugged in you can just put the directory in your plugins-directory and activate it.

== Frequently Asked Questions ==
I can imagine someone would like the number to be flexible, as it\'s not guaranteed Amazon always provides 14 mails a second.

However it\'s just meant as a quick fix that will last during Wordpress-upgrades. Some contributor who would like to add some configuration is welcome.

== Screenshots ==
1. No screenshot necessary as there is no config, but this is all the coding needed.

== Changelog ==
Version 0.1, just the initial one.

== Upgrade Notice ==
I couldn\'t think of a reason to upgrade.
