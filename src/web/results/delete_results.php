<?php
/**
 * PHP version 7.2
 * src/delete_results.php
 *
 * @category Scripts
 * @author   Jose Lorenzo Moreno <jolorenzom@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.etsisi.upm.es ETS de Ingeniería de Sistemas Informáticos
 */


use MiW\Results\Entity\Result;
use MiW\Results\Utils;

require __DIR__ . '/../../../vendor/autoload.php';

// Carga las variables de entorno
$dotenv = new \Dotenv\Dotenv(
    __DIR__ . '/../../..',
    Utils::getEnvFileName(__DIR__ . '/../../..')
);
$dotenv->load();

$entityManager = Utils::getEntityManager();


$resultRepository = $entityManager->getRepository(Result::class);
$results = $resultRepository->findAll();

if (empty($results)) {
    header('Location: ../public/results.php');
} else {
    foreach ($results as $result) {
        $entityManager->remove($result);
        $entityManager->flush();
    }
    header('Location: ../public/results.php');
}

