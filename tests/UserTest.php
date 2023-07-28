<?php

use PHPUnit\Framework\TestCase;

// El namespace
use App\User; 

class UserTest extends TestCase {
  public function testGetName() {
    $user = new User("John Doe", "john@example.com", "password123");
    $this->assertEquals("John Doe", $user->getName());
  }

  // Otros tests para getEmail, getPassword, setName, setEmail, setPassword, etc.
}


