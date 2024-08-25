<?php

interface IUser {
  // Method for login
  public function login();

  // Method for account creation
  public function createAccount();

  public static function getUserInfo();

}