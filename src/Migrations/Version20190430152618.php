<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190430152618 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE attached_file ADD registration_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('CREATE INDEX IDX_B010289A833D8F43 ON attached_file (registration_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A833D8F43');
        $this->addSql('DROP INDEX IDX_B010289A833D8F43 ON attached_file');
        $this->addSql('ALTER TABLE attached_file DROP registration_id');
    }
}
