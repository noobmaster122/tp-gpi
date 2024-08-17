<?php

declare(strict_types=1);

namespace GPI;

class SessionModel
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function remove($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public function clear()
    {
        $_SESSION = [];
    }



    public function destroy()
    {
        $this->clear();

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }

        session_destroy();
    }

     public function pushToArray($key, $value)
     {
         $array = $this->get($key);
 
         if (!is_array($array)) {
             $array = [];
         }
 
         $array[] = $value;
 
         $this->set($key, $array);
     }

     public function removeFromArray($key, $valueToRemove)
     {
         $array = $this->get($key);
 
         if (is_array($array)) {
             $array = array_filter($array, function($item) use ($valueToRemove) {
                 return $item !== $valueToRemove;
             });
 
             $array = array_values($array);
 
             $this->set($key, $array);
         }
     }

     public function updateProductQuantity(string $productId, int $quantity):array
     {
         $basket = $this->get('basket');
 
         if (!is_array($basket)) {
             $basket = [];
         }
 
         $basket = array_filter($basket, function($item) use ($productId) {
             return $item !== $productId;
         });
 
         for ($i = 0; $i < $quantity; $i++) {
             $basket[] = $productId;
         }
 
         $this->set('basket', array_values($basket));

         return $this->get('basket');
     }
}

?>
