<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190303225215 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, registration_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, in_order TINYINT(1) NOT NULL, receipt_date DATETIME DEFAULT NULL, validation_date DATETIME DEFAULT NULL, INDEX IDX_7B00651C833D8F43 (registration_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE status ADD CONSTRAINT FK_7B00651C833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('ALTER TABLE attached_file ADD status_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('CREATE INDEX IDX_B010289A6BF700BD ON attached_file (status_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A6BF700BD');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP INDEX IDX_B010289A6BF700BD ON attached_file');
        $this->addSql('ALTER TABLE attached_file DROP status_id');
    }
}
