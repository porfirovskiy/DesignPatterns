<?php

namespace DesignPatterns\FactoryMethod;

/**
 * Description of FacebookConnector
 *
 * @author porfirovskiy
 */
class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}
