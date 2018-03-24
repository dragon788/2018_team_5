# README

## dsmHack 2018

### Team 5

# Everybody Wins Iowa!

#### Make a backup of the client site
1. Install All-In-One WP Migration from the plugins page
1. Export a "File" backup and put it somewhere safe (local for dev and Google Drive?)

#### Local Dev Setup
1. Clone repo (or download https://github.com/vccw-team/vccw/releases/download/3.18.0/vccw-3.18.0.zip and extract into a new folder)
1. Install [vagrant](https://www.vagrantup.com) and [virtualbox](https://www.virtualbox.org)
  1. [Vccw](http://vccw.cc/) recommends `vagrant plugin install vagrant-hostsupdater` or add `192.168.33.10 vccw.test` yourself for proper image display and link opening
  1. `cd vccw `
  1. `vagrant up`

1. Visit http://vccw.test/ or http://192.168.33.10/
    * See the http://vccw.cc/ site for default credentials.

1. Install the All-in-One WP Migration plugin and restore the backup, this will wipe EVERYTHING.
    * If the default and client credentials don't let you in, reset the password using WP CLI.

1. You now have a full local copy of the site, have fun with plugins/etc since you can always restore from the backup.

#### WP CLI
WP CLI is a command line tool for managing your WordPress installation.

1. `vagrant ssh`
1. `cd /vagrant/wordpress`
1. List all users. Find the ID of the user you'd like to update.
    * `wp user list`
1. Update the user replacing "1" with the id of the user you want to update.
    * `wp user update 1 --user_pass=$UP3RstrongP4$$w0rd`
1. Login with the new password and reset it to the one you expected
    * Click Generate password and then just replace the suggested password with the expected one

---

* everybodywinsiowa.org
* Domain : GoDaddy
* Host: Wordpress.org ?

---


Tools:
create clip paths: https://bennettfeely.com/clippy/
