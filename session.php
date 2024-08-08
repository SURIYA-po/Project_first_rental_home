<?php 
          session_start(); // Start a new session or resume the existing session

          $loggedIn = false; // Initialize $loggedIn to false
          
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
              $loggedIn = true;
          }
