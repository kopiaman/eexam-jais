# How to Make Code Changes in eexam system

- Download PHP Runner at https://xlinesoft.com/phprunner
- Open the file .phpr

# change DB connection 
- edit file output/connections/ConnectionManager.php
- change at line 254 to 258:

`
    $host="localhost";
    $user="db_user";
    $pwd="db_pass";
    $port="";
    $sys_dbname="db_name";
`
- then change db user, password and dbname in output/x_config_server.php as well



# Min Server Requirement
- PHP 5.3.3
- MySQL version: 5.5.6
- Apache/2.2.3




