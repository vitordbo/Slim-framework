# Slim-framework

(there is a simple example in the file index.php)
* Welcome

Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs. At its core, Slim is a dispatcher that receives an HTTP request, invokes an appropriate callback routine, and returns an HTTP response. That’s it.

* What’s the point?

Slim is an ideal tool to create APIs that consume, repurpose, or publish data. Slim is also a great tool for rapid prototyping. Heck, you can even build full-featured web applications with user interfaces. More importantly, Slim is super fast and has very little code.

* At its core, Slim is a dispatcher that receives an HTTP request, invokes an appropriate callback routine, and returns an HTTP response. That’s it.

Slim provides only a minimal set of tools that do what you need and nothing else.

* How does it work?

First, you need a web server like Nginx or Apache. You should configure your web server so that it sends all appropriate requests to one “front-controller” PHP file. You instantiate and run your Slim app in this PHP file.

A Slim app contains routes that respond to specific HTTP requests. Each route invokes a callback and returns an HTTP response. To get started, you first instantiate and configure the Slim application. Next, you define your application routes. Finally, you run the Slim application. It’s that easy. Here’s an example application:

* System Requirements:

Web server with URL rewriting

PHP 7.4 or newer

* Installation:

* Step 1: 

Install Composer : https://getcomposer.org/download/

* Step 2: 

Install Slim
We recommend you install Slim with Composer. Navigate into your project’s root directory and execute the bash command shown below. This command downloads the Slim Framework and its third-party dependencies into your project’s vendor/ directory.

composer require slim/slim:"4.*"

* Step 3: 

Install a PSR-7 Implementation and ServerRequest Creator
Before you can get up and running with Slim you will need to choose a PSR-7 implementation that best fits your application. 

In order for auto-detection to work and enable you to use AppFactory::create() and App::run() without having to manually create a ServerRequest you need to install one of the following implementations:

* Slim PSR-7

composer require slim/psr7

* Nyholm PSR-7 and Nyholm PSR-7 Server


composer require nyholm/psr7 nyholm/psr7-server
* Guzzle PSR-7
For usage with Guzzle PSR-7 version 2:

composer require guzzlehttp/psr7 "^2"

* For usage with Guzzle PSR-7 version 1:


composer require guzzlehttp/psr7 "^1"

composer require sapphirecat/slim4-http-interop-adapter

* Laminas Diactoros

composer require laminas/laminas-diactoros

documentation: 

https://www.slimframework.com/

https://www.slimframework.com/docs/v4/