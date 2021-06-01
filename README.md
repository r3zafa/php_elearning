# htdocs
 php elearning




STARTPLATZ:

Startplatz Website
=============

Website startplatz.de

DEV Umgebung
------------

Setup env
---------
1. Install VirtualBox: https://www.virtualbox.org/wiki/Downloads

2. Install Vagrant: https://www.vagrantup.com/downloads 

3. install yarn: 
``` 
sudo npm install --global yarn 
```

4. Install NFS:
 - <b>On Ubuntu System:</b> 
 
 ```
 sudo apt-get install nfs-kernel-server
 ```
 
 - <b>On windows install NFS: </b> 

 ```
 vagrant plugin install vagrant-winnfsd
 ```

5. Vagrant hangs at "SSH auth method: Private key?  

```
https://stackoverflow.com/questions/38463579/vagrant-hangs-at-ssh-auth-method-private-key
```

6. RUN: 

```
vagrant up
```

7. After VM is Up:
 - on windows System:
   - open Vitualbox
   - Click: show VM and give username and password : vagrant
   - Go to section : "Datenbank holen" 
 - on linux System: 
 
 ```
 vagrant ssh 
 ``` 
and go to "Datenbank holen"

```
vagrant reload
```
```
phing 
```

8. Datenbank holen: 
```
phing database-update-wordpress
```

9. Files holen:

```
phing rsync-uploads
```
password: W5EBgHwDGXvwkzNr

10. holt das aktuelle Jahr.

```
phing rsync-uploads -Dyear=2016
```
holt die anderen

### Zugriff

damit der lokale Zugriff bequem über eine URL geht muss ein Plugin von vagrant installiert werden:
`vagrant plugin install vagrant-hostsupdater`

#### Links

* Website: http://dev.startplatz.de
* Mailchatcher: http://dev.startplatz.de:1080
* PhpMyAdmin: http://dev.startplatz.de:8080
  * database name: "app"

### Blog Files
Theme ist startplatz
Einzelne Blogbeiträge werden durch single.php dargestellt

### deploy on server
git clone https://github.com/startplatz/startplatz.git startplatz.de_20200606145700
cd startplatz.de_20200606145700


dann phing
und
phing activate


#### Sidebar für Seiten per shortcode
[4sp_show_sidebar page=sidebar-crowdfunding]


