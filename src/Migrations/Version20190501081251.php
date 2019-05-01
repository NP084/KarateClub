<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190501081251 extends AbstractMigration
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
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A6BF700BD');
        $this->addSql('DROP TABLE price_list');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP INDEX IDX_B010289A6BF700BD ON attached_file');
        $this->addSql('ALTER TABLE attached_file CHANGE status_id registration_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('CREATE INDEX IDX_B010289A833D8F43 ON attached_file (registration_id)');
        $this->addSql('DROP INDEX UNIQ_62A8A7A729957FF4 ON registration');
        $this->addSql('ALTER TABLE registration ADD validate_registration_date DATETIME DEFAULT NULL, CHANGE profil_tarif_id medical_certificate INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vika_event ADD easy_inscription TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE price_list (id INT AUTO_INCREMENT NOT NULL, number_adult DOUBLE PRECISION NOT NULL, number_children DOUBLE PRECISION NOT NULL, number_student DOUBLE PRECISION NOT NULL, number_baby DOUBLE PRECISION NOT NULL, price_federation DOUBLE PRECISION NOT NULL, price_club DOUBLE PRECISION NOT NULL, percentage DOUBLE PRECISION NOT NULL, price_total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, registration_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, in_order TINYINT(1) NOT NULL, receipt_date DATETIME DEFAULT NULL, validation_date DATETIME DEFAULT NULL, statut INT NOT NULL, remark LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_7B00651C833D8F43 (registration_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE status ADD CONSTRAINT FK_7B00651C833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A833D8F43');
        $this->addSql('DROP INDEX IDX_B010289A833D8F43 ON attached_file');
        $this->addSql('ALTER TABLE attached_file CHANGE registration_id status_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('CREATE INDEX IDX_B010289A6BF700BD ON attached_file (status_id)');
        $this->addSql('ALTER TABLE registration DROP validate_registration_date, CHANGE medical_certificate profil_tarif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A729957FF4 FOREIGN KEY (profil_tarif_id) REFERENCES price_list (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62A8A7A729957FF4 ON registration (profil_tarif_id)');
        $this->addSql('ALTER TABLE vika_event DROP easy_inscription');
    }
}
