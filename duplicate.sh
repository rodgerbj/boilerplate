#!/bin/bash

ex="agosm"
Ex="Agosm"
EX="AGOSM"

mkdir "new_folder"


cp changelog.xml ./new_folder/
cp composer.json ./new_folder/
cp foo_update.xml ./new_folder/
cp jorobo.ini ./new_folder/
cp LICENSE ./new_folder/
cp -R package ./new_folder/
cp -R src ./new_folder/
cp README.md ./new_folder/
cp RoboFile.php ./new_folder/


# Footer rename for sik
find ./new_folder -type d -print0 | xargs -0 rename s/Footer/Fzzter/g
find ./new_folder -type f -print0 | xargs -0 rename s/Footer/Fzzter/g
find ./new_folder \( -type d -name .git -prune \) -o -type f -print0 | xargs -0 sed -i s/Footer/Fzzter/g

#Rename Files and Folders
find ./new_folder -type d -print0 | xargs -0 rename s/foo/$ex/g
find ./new_folder -type f -print0 | xargs -0 rename s/foo/$ex/g
find ./new_folder -type d -print0 | xargs -0 rename s/Foo/$Ex/g
find ./new_folder -type f -print0 | xargs -0 rename s/Foo/$Ex/g
# hack?
find ./new_folder -type d -print0 | xargs -0 rename s/foo/$ex/g
find ./new_folder -type f -print0 | xargs -0 rename s/foo/$ex/g
find ./new_folder -type d -print0 | xargs -0 rename s/Foo/$Ex/g
find ./new_folder -type f -print0 | xargs -0 rename s/Foo/$Ex/g

#Rename in Files https://stackoverflow.com/questions/1583219/how-to-do-a-recursive-find-replace-of-a-string-with-awk-or-sed
find ./new_folder \( -type d -name .git -prune \) -o -type f -print0 | xargs -0 sed -i s/foo/$ex/g
find ./new_folder \( -type d -name .git -prune \) -o -type f -print0 | xargs -0 sed -i s/Foo/$Ex/g
find ./new_folder \( -type d -name .git -prune \) -o -type f -print0 | xargs -0 sed -i s/FOO/$EX/g

# Footer rename again
find ./new_folder -type d -print0 | xargs -0 rename s/Fzzter/Footer/g
find ./new_folder -type f -print0 | xargs -0 rename s/Fzzter/Footer/g
find ./new_folder \( -type d -name .git -prune \) -o -type f -print0 | xargs -0 sed -i s/Fzzter/Footer/g


#Build zip docker-lamp server need to be active
#docker exec -it --user 1000 -w /home/astrid/git/joomla-development/btutorial/t43_umbennen/new_folder docker-lamp_php73 composer install
#docker exec -it --user 1000 -w /home/astrid/git/joomla-development/btutorial/t43_umbennen/new_folder docker-lamp_php73 ./vendor/bin/robo build


