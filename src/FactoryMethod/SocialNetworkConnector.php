<?php

namespace DesignPatterns\FactoryMethod;

/**
 *
 * @author porfirovskiy
 */
interface SocialNetworkConnector 
{
    public function logIn(): void;

    public function createPost(string $content): void;
}
