<?php
/**
 * PHP version 7.2
 * src/list_one_user.php
 *
 * @category Scripts
 * @author   Jose Lorenzo Moreno <jolorenzom@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es ETS de Ingeniería de Sistemas Informáticos
 */


use MiW\Results\Entity\User;
use MiW\Results\Utils;

require __DIR__ . '/../../vendor/autoload.php';

// Carga las variables de entorno
$dotenv = new \Dotenv\Dotenv(
    __DIR__ . '/../..',
    Utils::getEnvFileName(__DIR__ . '/../..')
);
$dotenv->load();

$entityManager = Utils::getEntityManager();

if ($argc < 2 || $argc > 6) {
    $fich = basename(__FILE__);
    echo <<< MARCA_FIN

    Usage: $fich <UserId> [<Username>] [<Email>] [<Password>] [<IsEnabled>]
    

MARCA_FIN;
    exit(0);
}

$userId = (int) $argv[1];
$username = (string) $argv[2];
$email = (string) $argv[3];
$password = (string) $argv[4];
$enabled = (string) $argv[5];

echo "userId: ".$userId.PHP_EOL;

$userRepository = $entityManager->getRepository(User::class);
$user = $entityManager
    ->getRepository(User::class)
    ->findOneBy(['id' => $userId]);

if (null === $user) {
    echo PHP_EOL."Usuario $userId no encontrado".PHP_EOL.PHP_EOL;
    exit(0);
}

if ($username !== ''){
    $user->setUsername($username);
}

if ($email !== ''){
    $user->setEmail($email);
}

if ($password !== ''){
    $user->setPassword($password);
}

if ($enabled === 'true' || $enabled === 'false'){
    $enabled = ($enabled === 'true') ? true : false;
    $user->setEnabled($enabled);
}

if ($enabled === 'false'){
    $user->setEnabled($enabled);
}

try {
    $entityManager->persist($user);
    $entityManager->flush();
    echo 'Created User with ID #' . $user->getId() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}