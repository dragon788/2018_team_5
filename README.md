# README

## dsmHack 2018

### Team 5

# Everybody Wins Iowa!

#### Local Dev Setup
1. Clone repo
1. Install [vagrant](www.vagrantup.com) and [virtualbox](www.virtualbox.org)
  1. [Vccw](http://vccw.cc/) recommends `vagrant plugin install vagrant-hostsupdater` or add `vccw.test 192.168.33.10` yourself for proper image display and link opening
  1. `cd vccw `
  1. `vagrant up`

1. Visit http://vccw.test/ or http://192.168.33.10/
    * See the http://vccw.cc/ site for default credentials.

1. Install the All-in-One WP Migration plugin and restore the backup, this will wipe EVERYTHING.
    * If the default and client credentials don't let you in, reset the password using WP CLI.

1. You now have a full local copy of the site, have fun with plugins/etc since you can always restore from the backup.

#### WP CLI
WP CLI is a command line tool for managing your WordPress installation.

1. Move into the /wordpress directory and type

$ wp user list
to see all users. Find the ID of the user you'd like to update.

2. Then, update the user

$ wp user update 1 --user_pass=$UP3RstrongP4$$w0rd
replacing "1" with the id of the user you want to update.

---

* everybodywinsiowa.org
* Domain : GoDaddy
* Host: Wordpress.org ?

---
