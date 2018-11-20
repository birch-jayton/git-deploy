<?php
define("IS_WINDOWS", true);                                            // defaults to LINUX.
define("TOKEN", "secret-token");                                       // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", "git@github.com:username/repository.git"); // The SSH URL to your repository
define("DIR", "/var/www/vhosts/repository/");                          // The path to your repository; this must begin with a forward slash (/)
define("BRANCH", "refs/heads/master");                                 // The branch route
define("LOGFILE", "deploy.log");                                       // The name of the file you want to log to.
define("GIT", "/usr/bin/git");                                         // The path to the git executable. If git is global just add "git"
define("AFTER_PULL", "");                                              // A command to execute after successfully pulling