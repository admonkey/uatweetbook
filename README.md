# WebSite
blank template

## Purpose
This is built to take the tedium out of creating the following:  

- apache virtual host configuration  
- self-signed SSL certificate  
- common php/html/css and site includes for use with MySQL  
  - jquery-ui
  - bootstrap
  - tablesorter
  - chartist
  - active directory login session via php LDAP
- checkout new git branch and commit to private remote

## Requirements
Might work elsewhere, but designed and tested on:  
- Ubuntu 14.04  
  - GNU bash, version 4.3.11(1)  
- Apache 2.4.7  
  - host directory must AllowOverride using .htaccess
    - Apache mod rewrite required to block certain folders (`sudo a2enmod rewrite`)
    - files use both `require all denied` and `deny from all` for backwards compatibility with Apache 2.2
    - these dependencies are automatically configured when using the `/_resources/_setup/install.bash` script
- PHP 5.5.9  
- OpenSSL 1.0.1f  
- Git 2.6.2
- MySQL  Ver 14.14 Distrib 5.5.46, for debian-linux-gnu (x86_64) using readline 6.3

## Issues
- Currently using the deprecated mysql functions. Need to upgrade to mysqli ASAP
- Server alias path can't have a folder with the same name as one in server root path to files. [details](#bug_alias)

## Notes
- In the `/_resources/header.php` file, you should notice definitions for `$path_real_relative_root`  
  and `$path_web_relative_root`. These variables allow the template to run flexibly in different  
  configurations without breaking links to reference files.
  - At the root of a web server host. (www.example.com)
    - Private resources, such as SSL keys, SQL DDL, and credentials files  
      are secured using .htaccess files dependent on Apache's mod_rewrite.  
      An alternative is to place these resources outside the web server directories,  
      but you will have to change the references to the files in the code manually.
  - As a sub-node of the root of a web server host. (www.example.com/path/to/folder/WebSite)
  - As an alias to a folder on a web server host. (www.example.com/~username/path/to/folder/WebSite)
    - <a name="bug_alias"></a>There is a bug with the way this is currently setup. No two folders can have the same name between  
      the alias path from host root to site root, and the server root to WebSite root.  
      For example, the following configuration breaks because `web` is the name of a folder in both paths:  
      - Host document root files are located at `/var/www/folder3/html` visible at (www.example.com)
      - WebSite files are located at the server root path `/var/www/folder1/web/folder2/WebSite`
      - Alias `/web` points to WebSite files visible at (www.example.com/web)

## Getting Started
run `./_resources/_setup/install.bash`  
follow prompts
