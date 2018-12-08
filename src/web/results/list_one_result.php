<?php
/**
 * PHP version 7.2
 * src/list__one_result.php
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

$op = ($_GET['op']==='read') ? 'readonly' : '';
$resultId = (int) $_GET['id'];

$resultRepository = $entityManager->getRepository(Result::class);
$result = $entityManager
    ->getRepository(Result::class)
    ->findOneBy(['id' => $resultId]);

if (null === $result) {
    echo "Resultado $resultId no encontrado" . PHP_EOL;
}