<?php
/**
 * PHP version 7.2
 * src/delete_users.php
 *
 * @category Scripts
 * @author   Jose Lorenzo Moreno <jolorenzom@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es ETS de Ingeniería de Sistemas Informáticos
 */


use MiW\Results\Entity\User;
use MiW\Results\Utils;

require __DIR__ . '/../../../vendor/autoload.php';

// Carga las variables de entorno
$dotenv = new \Dotenv\Dotenv(
    __DIR__ . '/../../..',
    Utils::getEnvFileName(__DIR__ . '/../../..')
);
$dotenv->load();

$entityManager = Utils::getEntityManager();


$userRepository = $entityManager->getRepository(User::class);
$users = $userRepository->findAll();

if (empty($users)) {
    header('Location: ../public/users.php');
} else {
    foreach ($users as $user) {
        $entityManager->remove($user);
        $entityManager->flush();
    }
    header('Location: ../public/users.php');
}

