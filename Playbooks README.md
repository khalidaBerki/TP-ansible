# Lancer les Playbooks 

# Guide de Déploiement

## Prérequis
- Ansible installé sur votre machine locale.
- Accès SSH aux hôtes de destination (définis dans `hosts.ini`).

## Lancer les playbooks

1. Clonez ce dépôt Git :
   ```bash
   git clone https://github.com/votre-organisation/my-ansible-project.git
   cd my-ansible-project
2. Modifiez le fichier ansible/hosts.ini pour correspondre à votre configuration d'hôtes.

3. Exécutez le playbook pour déployer l'application :
    ```bash
    ansible-playbook -i ansible/hosts.ini ansible/deploy_app.yml
