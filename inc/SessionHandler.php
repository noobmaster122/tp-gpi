<?php

declare(strict_types=1);

namespace GPI;

class SessionHandler
{
    // Constructor to start the session
    public function __construct()
    {
        session_start();
    }

    // Method to set a session variable
    public function set(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    // Method to get a session variable
    public function get(string $key)
    {
        return $_SESSION[$key] ?? null;
    }

    // Method to check if a session variable is set
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    // Method to remove a session variable
    public function remove(string $key): void
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    // Method to destroy the session
    public function destroy(): void
    {
        session_unset();   // Remove all session variables
        session_destroy(); // Destroy the session
    }
}
