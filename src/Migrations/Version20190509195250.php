<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190509195250 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE paiement ADD is_paid TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE registration CHANGE condition_registration condition_registration TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor ADD datecreat DATETIME DEFAULT NULL, DROP link');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE paiement DROP is_paid');
        $this->addSql('ALTER TABLE registration CHANGE condition_registration condition_registration TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE sponsor ADD link VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, DROP datecreat');
    }
}
