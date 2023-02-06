<?php
  // Définition de la classe Utilisateur
  class Utilisateur {
    // Propriétés pour stocker le nom et l'adresse email de l'utilisateur
    public $nom;
    public $email;

    // Constructeur pour initialiser les propriétés nom et email
    public function __construct($nom, $email) {
      $this->nom = $nom;
      $this->email = $email;
    }

    // Méthode pour dire bonjour à l'utilisateur
    public function hello() {
      return "Bonjour " . $this->nom . "!\n";
    }

    // Méthode pour enregistrer l'utilisateur
    public function register() {
      return "L'utilisateur " . $this->nom . " a été enregistré avec l'adresse email " . $this->email . "\n";
    }

    // Méthode pour envoyer un mail à l'utilisateur
    public function mail() {
      return "Un mail a été envoyé à " . $this->email . "\n";
    }

    public function test() {
        return "Le prénom de l'utilisateur est " . $this->nom. "\n";
      }
  }

  $user1 = new Utilisateur("Jane", "Doe");
  echo $user1->test();

  // Création de l'objet utilisateur
  $utilisateur = new Utilisateur("Jane", "janedoe@example.com");

  // Chaînage des méthodes et des propriétés de l'objet utilisateur
  echo $utilisateur->hello()
       . $utilisateur->register()
       . $utilisateur->mail();
