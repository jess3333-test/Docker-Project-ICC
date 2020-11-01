# Docker-Project-ICC
Web project combining Php , mySql and phpMyAdmin


Pour exécuter ce docker , veuillez vous rendre à la racine de ce dossier , éxécutez la commande docker-compose up , veuillez attendre que le message "MySQL init process done. Ready for start up " apparaisse ( cela peut prendre 2-4 minutes).
Ensuite vous pourrez accéder à la page web sous localhost:8001 où vous pourrez voir les éléments présents dans la base de données et vous pourrez ajouter des éléments ou en supprimer en remplissant
les différents formulaires.
Ou vous pouvez accéder à l'interface phpmyadmin sous localhost:8002 avec l'utilisateur "userdb" et le mot de passe "userdb" , dans dockerProjet vous trouverez la table Personne qui contient les données qui ont été pré-insérées lors de l'installation du docker ou d'autres données qui ont été rajoutées via la page web.





Pour arrêter le docker , ouvrez un autre terminal et tapez docker-compose down

Si vous relancez le docker par la suite, vous verrez que la base de données contient toujours les changements que vous avez fait. Car dans le docker-compose un volume qu'on qualifiera de "persistent" stocke les ajouts et suppressions de la base de données. Vu qu'on devait créer un environnement de production je me disais qu'il serait nécessaire de pouvoir garder les modifications faites sur la base.

