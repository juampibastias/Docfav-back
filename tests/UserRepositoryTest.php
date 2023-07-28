<?php
use PHPUnit\Framework\TestCase;
use App\User;
use App\UserRepository;

class UserRepositoryTest extends TestCase {
  public function testSaveUser() {
    $user = new User("John Doe", "john@example.com", "password123");
    $userRepository = new UserRepository();
    $userRepository->save($user);

    // Asegurarse de que el usuario se haya guardado correctamente en el repositorio.
    // Verificar que el repositorio no esté vacío después de guardar un usuario.
    $this->assertCount(1, $userRepository->findAll());
  }

  // Otros tests para update, delete, etc.
}
