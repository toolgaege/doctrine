<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("Entity");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'doctrinedemo2',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

include_once "Entity/User.php";
//kullanıcı oluşturma
/* $user = new User();
$user->setUsername("tolga20");
$user->setEmail("asd");
$user->setPassword("asd");

$entityManager->persist($user);
$entityManager->flush();

echo "Olusturulan Kullanici id'si = " . $user->getId() . "\n"; */ 

//hepsini listeleme
/* $userRepository = $entityManager->getRepository('User');
$users = $userRepository->findAll();

foreach ($users as $user) {
    echo "<br />" . $user->getUsername();
} */

//id ye göre çekmek
/* $id = 5;
$user = $entityManager->find('User', $id);

if ($user === null) {
    echo "kullanici yok.\n";
    exit(1);
}

echo "<br />" . $user->getUsername(); */

//kullanıcı adı güncelleme
$id = 4;
$newName = "tuuuuh";

$user = $entityManager->find('User', $id);

if ($user=== null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$user->setUsername($newName);

$entityManager->flush();