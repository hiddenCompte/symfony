<?php
// src/DBAL/Types/EnumType.php
namespace App\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\StringType;

class EnumType extends StringType
{
    const ENUM = 'enum'; // Identifiant de type personnalisé

    // Cette méthode convertit la valeur de la base de données en une valeur PHP
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        // Ici tu peux spécifier la logique nécessaire pour récupérer la valeur comme chaîne de caractères
        return (string) $value;
    }

    // Cette méthode convertit la valeur PHP en une valeur pour la base de données
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return (string) $value;
    }

    // Cette méthode définit la déclaration SQL du type ENUM dans ta base de données
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return "ENUM('value1', 'value2', 'value3')"; // Remplace par tes valeurs réelles
    }
}
