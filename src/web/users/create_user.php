<?php
/**
 * PHP version 7.2
 * src\create_user.php
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

$newUsername = $_POST['username'];
$newUserEmail = $_POST['email'];
$newUserPassword = $_POST['password'];
$newUserEnabled = ($_POST['enabled']==='1') ? true: false;

$user = new User();
$user->setUsername($newUsername);
$user->setEmail($newUserEmail);
$user->setPassword($newUserPassword);
$user->setEnabled($newUserEnabled);
$user->setIsAdmin(false);

try {
    $entityManager->persist($user);
    $entityManager->flush();
    header('Location: ../public/users.php');
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
