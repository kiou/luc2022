<?php

    namespace App\Entity;
    use Symfony\Component\Validator\Constraints as Assert;

    class Contact{

        /**
         * @Assert\NotBlank(message="Compléter le champ nom")
         */
        protected $nom;

        /**
         * @Assert\NotBlank(message="Compléter le champ téléphone")
         */
        protected $tel;

        /**
         * @Assert\NotBlank(message="Compléter le champ email")
         * @Assert\Email(message = "L'email '{{ value }}' n'est pas valide.")
         */
        protected $email;

         /**
         * @Assert\NotBlank(message="Compléter le champ message")
         */
        protected $message;

        public function getNom()
        {
            return $this->nom;
        }

        public function getTel()
        {
            return $this->tel;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getMessage()
        {
            return $this->message;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function setTel($tel)
        {
            $this->tel = $tel;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setMessage($message)
        {
            $this->message = $message;
        }

    }

?>