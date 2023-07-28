<?php

namespace App;

// UserRepository.php
class UserRepository {
    private $users = [];
  
    public function save(User $user) {
      // Guardo el usuario en la base de datos o en memoria.
      $this->users[] = $user;
    }
  
    public function update(User $user) {
      // Actualizar el usuario en la base de datos o en memoria.
    }
  
    public function delete(User $user) {
      // Eliminar el usuario de la base de datos o en memoria.
    }

    public function findAll() {
      // Devolver todos los usuarios almacenados en el repositorio.
      return $this->users;
    }
}

  
