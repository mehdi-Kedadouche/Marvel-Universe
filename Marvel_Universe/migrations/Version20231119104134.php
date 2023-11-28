<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231119104134 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE heros CHANGE description description LONGTEXT NOT NULL, CHANGE powers powers LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE movies CHANGE rating rating VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE heros CHANGE description description VARCHAR(255) NOT NULL, CHANGE powers powers VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE movies CHANGE rating rating VARCHAR(255) NOT NULL');
    }
}
