<?php
/*
_1_Lire un fichier entier :
$content = file_get_contents('path/to/file.txt');
echo $content;

_2_Lire un fichier ligne par ligne :
$file = fopen('path/to/file.txt', 'r');
while (($line = fgets($file)) !== false) {
    echo $line;
}
fclose($file);

_3_Lire un fichier en morceaux :
$file = fopen('path/to/file.txt', 'r');
while (!feof($file)) {
    $chunk = fread($file, 8192);  // Lire 8KB à la fois
    echo $chunk;
}
fclose($file);
=========================================================

1_Écrire du contenu dans un fichier :
$content = "Hello, World!";
file_put_contents('path/to/file.txt', $content);


2_Ajouter du contenu à un fichier existant :
$content = "Hello again!";
file_put_contents('path/to/file.txt', $content, FILE_APPEND);

3_Écrire ligne par ligne dans un fichier :
$file = fopen('path/to/file.txt', 'a');
fwrite($file, "First line\n");
fwrite($file, "Second line\n");
fclose($file);
=========================================================

1_Lister les fichiers dans un répertoire :
$files = scandir('path/to/directory');
foreach ($files as $file) {
    echo $file . "\n";
}
2_
mkdir('path/to/new_directory', 0777, true);
rmdir('path/to/directory');
=========================================================
if (file_exists('path/to/file_or_directory')) {
    echo "File or directory exists";
}
#####Obtenir la taille d'un fichier :
$size = filesize('path/to/file.txt');
echo "File size: $size bytes";

#####Obtenir les permissions d'un fichier :
$perms = fileperms('path/to/file.txt');
echo substr(sprintf('%o', $perms), -4);  // Afficher les permissions en octal

=========================================================
1_Supprimer un fichier :
unlink('path/to/file.txt');

2_Renommer un fichier :
rename('path/to/old_file.txt', 'path/to/new_file.txt');
3_copy('path/to/source.txt', 'path/to/destination.txt');
4_ rename('path/to/old_location/file.txt', 'path/to/new_location/file.txt');
deplacer la meme nom de file

=========================================================
1_Créer un fichier journal (log) :
$logMessage = date('Y-m-d H:i:s') . " - Log message\n";
file_put_contents('path/to/log.txt', $logMessage, FILE_APPEND);
 
2_Liste des fichiers d'un répertoire et suppression de certains fichiers :
$directory = 'path/to/directory';
$files = scandir($directory);
foreach ($files as $file) {
    if (is_file("$directory/$file") && strpos($file, '.log') !== false) {
        unlink("$directory/$file");
    }
}


 */


 /*
 PHP Files Functions:
fopen() : Ouvre un fichier ou une URL.
fclose() : Ferme un fichier ouvert.
fread() : Lit un fichier ouvert.
fwrite() : Écrit dans un fichier ouvert.
file_get_contents() : Lit le contenu d'un fichier dans une chaîne.
file_put_contents() : Écrit une chaîne dans un fichier.
unlink() : Supprime un fichier.
rename() : Renomme ou déplace un fichier.
copy() : Copie un fichier.
filesize() : Retourne la taille d'un fichier.
file_exists() : Vérifie si un fichier ou un répertoire existe.
__
'r' : Lecture seule. Commence au début du fichier.
'w' : Écriture seule. Tronque le fichier à zéro ou le crée s'il n'existe pas.
'a' : Écriture seule. Place le pointeur de fichier à la fin du fichier.
'r+' : Lecture et écriture. Commence au début du fichier.
'w+' : Lecture et écriture. Tronque le fichier à zéro ou le crée s'il n'existe pas.
'a+' : Lecture et écriture. Place le pointeur de fichier à la fin du fichier___________________________________________________________

$file = fopen('path/to/file.txt', 'r'); // Ouvre le fichier en mode lecture
if ($file) {
    // Le fichier est ouvert avec succès
    fclose($file);
}
2_
$handle = fopen('example.txt', 'w');
if ($handle) {
    fwrite($handle, "Hello, World!");
    fclose($handle);
} else {
    echo "Impossible d'ouvrir le fichier.";
}
chown('example.txt', 'username'); // Définit le propriétaire du fichier
chgrp('example.txt', 'groupname'); // Définit le groupe du fichier

=====================================================
$source = $_FILES['uploaded_file']['tmp_name'];
$destination = 'uploads/' . $_FILES['uploaded_file']['name'];

if (move_uploaded_file($source, $destination)) {
    echo "Le fichier a été téléchargé avec succès.";
} else {
    echo "Erreur lors du téléchargement du fichier.";
}

7_ PHP fopen Context
$options = [
    'http' => [
        'method' => 'GET',
        'header' => 'Content-type: application/x-www-form-urlencoded',
    ]
];
$context = stream_context_create($options);

$handle = fopen('http://www.example.com/', 'r', false, $context);



 
  */


?>