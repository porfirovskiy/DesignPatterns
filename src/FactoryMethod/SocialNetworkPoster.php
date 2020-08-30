<?php

namespace DesignPatterns\FactoryMethod;

/**
 * Description of SocialNetworkPoster
 *
 * @author porfirovskiy
 */
abstract class SocialNetworkPoster 
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;
     
    public function post(string $content): void
    {
        // Вызываем фабричный метод для создания объекта Продукта...
        $network = $this->getSocialNetwork();
        // ...а затем используем его по своему усмотрению.
        $network->logIn();
        $network->createPost($content);
    }
}
