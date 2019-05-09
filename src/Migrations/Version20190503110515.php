<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190503110515 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE app_user CHANGE name name VARCHAR(255) NOT NULL, CHANGE first_name first_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE registration DROP medical_certificate, DROP condition_registration_document');
        $this->addSql('ALTER TABLE attached_file CHANGE description description LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE app_user CHANGE first_name first_name VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE name name VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE attached_file CHANGE description description LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE registration ADD medical_certificate INT DEFAULT NULL, ADD condition_registration_document INT DEFAULT NULL');
    }
}
