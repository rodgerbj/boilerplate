#!/bin/bash

ex="agadvent"
Ex="Agadvent"
EX="AGADVENT"

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


#Rename Files
find ./new_folder -type f -name '*foo*' | while read FILE ; do
    newfile="$(echo ${FILE} |sed -e 's/foo/agadvent/')" ;
    mv "${FILE}" "${newfile}" ;
done 
#find ./new_folder -name '*foo*' -exec bash -c ' mv $0 ${0/foo/agadvent}' {} \;

#Rename in File
