<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190425160904 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE userConnected DROP name, DROP username, DROP firstname, DROP birthday, DROP created_user');
        $this->addSql('ALTER TABLE app_user ADD is_trial TINYINT(1) DEFAULT NULL, ADD bars INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE app_user DROP is_trial, DROP bars');
        $this->addSql('ALTER TABLE userConnected ADD name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD username VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD firstname VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD birthday DATE NOT NULL, ADD created_user DATETIME NOT NULL');
    }
}
