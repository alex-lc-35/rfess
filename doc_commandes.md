- Lancer le serveur :
  ```bash
  symfony serve 

- Migration step 1 :
  ```bash
  symfony console make:migration

- Migration step 2 :
  ```bash
  symfony console doctrine:migrations:migrate

- Mis à jour des entités
  ```bash
  symfony console make:entity --regenerate
