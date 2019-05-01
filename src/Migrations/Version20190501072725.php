<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190501072725 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A729957FF4');
        $this->addSql('DROP TABLE price_list');
        $this->addSql('ALTER TABLE vika_event ADD easy_inscription TINYINT(1) DEFAULT NULL');
        $this->addSql('DROP INDEX UNIQ_62A8A7A729957FF4 ON registration');
        $this->addSql('ALTER TABLE registration DROP profil_tarif_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE price_list (id INT AUTO_INCREMENT NOT NULL, number_adult DOUBLE PRECISION NOT NULL, number_children DOUBLE PRECISION NOT NULL, number_student DOUBLE PRECISION NOT NULL, number_baby DOUBLE PRECISION NOT NULL, price_federation DOUBLE PRECISION NOT NULL, price_club DOUBLE PRECISION NOT NULL, percentage DOUBLE PRECISION NOT NULL, price_total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE registration ADD profil_tarif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A729957FF4 FOREIGN KEY (profil_tarif_id) REFERENCES price_list (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62A8A7A729957FF4 ON registration (profil_tarif_id)');
        $this->addSql('ALTER TABLE vika_event DROP easy_inscription');
    }
}
