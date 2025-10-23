<?php
    class User{
        private $nombre;
        private $password;

        public function __construct(string $nombre, string $password) {
            $this->nombre = $nombre;
            $this->password = $password;
        }

        public function obtenerNombre(): string {
            return $this->nombre;
        }

        public function obtenerPassword(): string {
            return $this->password;
        }

    }


