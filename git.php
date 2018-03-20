<?php
/**
 *  move git source to another
 *  you need create the project first on the dist git source
 *  after then just run php git.php
 */
// your git project'name of source git
// project name will be same
$from_projects = [
    "pro1",
    "pro2"
];
$from_git_base = "git@git.coding.net:hbapps/";
$to_git_base = "https://e.coding.net/kdk/";

foreach ($from_projects as $key => $value) {
    $git_name = "{$value}.git";
    $from_git = $from_git_base . $git_name;
    $to_git = $to_git_base . $git_name;
    system("git clone --bare $from_git");
    system("cd $git_name && git push --mirror $to_git");
}

echo "game over";

