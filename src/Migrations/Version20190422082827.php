<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422082827 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE preregistration ADD name_id INT NOT NULL, DROP name');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA62671179CD6 FOREIGN KEY (name_id) REFERENCES app_user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D02FA62671179CD6 ON preregistration (name_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE preregistration DROP FOREIGN KEY FK_D02FA62671179CD6');
        $this->addSql('DROP INDEX UNIQ_D02FA62671179CD6 ON preregistration');
        $this->addSql('ALTER TABLE preregistration ADD name VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, DROP name_id');
    }
}
