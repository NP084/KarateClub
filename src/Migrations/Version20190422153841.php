<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422153841 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE preregistration ADD city_id INT NOT NULL, ADD country_id INT NOT NULL');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA6268BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA626F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_D02FA6268BAC62AF ON preregistration (city_id)');
        $this->addSql('CREATE INDEX IDX_D02FA626F92F3E70 ON preregistration (country_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE preregistration DROP FOREIGN KEY FK_D02FA6268BAC62AF');
        $this->addSql('ALTER TABLE preregistration DROP FOREIGN KEY FK_D02FA626F92F3E70');
        $this->addSql('DROP INDEX IDX_D02FA6268BAC62AF ON preregistration');
        $this->addSql('DROP INDEX IDX_D02FA626F92F3E70 ON preregistration');
        $this->addSql('ALTER TABLE preregistration DROP city_id, DROP country_id');
    }
}
