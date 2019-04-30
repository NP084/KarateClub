<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190430214307 extends AbstractMigration
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
        $this->addSql('CREATE TABLE modality (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, modality_id INT NOT NULL, registration_id INT NOT NULL, amount DOUBLE PRECISION NOT NULL, INDEX IDX_B1DC7A1E2D6D889B (modality_id), INDEX IDX_B1DC7A1E833D8F43 (registration_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E2D6D889B FOREIGN KEY (modality_id) REFERENCES modality (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE price_list');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP INDEX IDX_B010289A6BF700BD ON attached_file');
        $this->addSql('ALTER TABLE attached_file CHANGE status_id registration_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('CREATE INDEX IDX_B010289A833D8F43 ON attached_file (registration_id)');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7C903FE1D');
        $this->addSql('DROP INDEX UNIQ_62A8A7A729957FF4 ON registration');
        $this->addSql('DROP INDEX UNIQ_62A8A7A7C903FE1D ON registration');
        $this->addSql('ALTER TABLE registration ADD total_amount DOUBLE PRECISION DEFAULT NULL, ADD validate_registration_date DATETIME DEFAULT NULL, DROP userconnected_id_id, DROP gdpr, DROP tarif_profil, CHANGE profil_tarif_id medical_certificate INT DEFAULT NULL');
        $this->addSql('ALTER TABLE userconnected ADD gdpr TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE vika_event ADD inscription TINYINT(1) DEFAULT NULL, ADD easy_inscription TINYINT(1) DEFAULT NULL, CHANGE end_date end_date DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E2D6D889B');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, user_id INT NOT NULL, content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME NOT NULL, INDEX IDX_9474526CA76ED395 (user_id), INDEX IDX_9474526C7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE price_list (id INT AUTO_INCREMENT NOT NULL, number_adult DOUBLE PRECISION NOT NULL, number_children DOUBLE PRECISION NOT NULL, number_student DOUBLE PRECISION NOT NULL, number_baby DOUBLE PRECISION NOT NULL, price_federation DOUBLE PRECISION NOT NULL, price_club DOUBLE PRECISION NOT NULL, percentage DOUBLE PRECISION NOT NULL, price_total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, registration_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, in_order TINYINT(1) NOT NULL, receipt_date DATETIME DEFAULT NULL, validation_date DATETIME DEFAULT NULL, statut INT NOT NULL, remark LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_7B00651C833D8F43 (registration_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE status ADD CONSTRAINT FK_7B00651C833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('DROP TABLE modality');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A833D8F43');
        $this->addSql('DROP INDEX IDX_B010289A833D8F43 ON attached_file');
        $this->addSql('ALTER TABLE attached_file CHANGE registration_id status_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('CREATE INDEX IDX_B010289A6BF700BD ON attached_file (status_id)');
        $this->addSql('ALTER TABLE registration ADD userconnected_id_id INT NOT NULL, ADD gdpr TINYINT(1) DEFAULT NULL, ADD tarif_profil INT NOT NULL, DROP total_amount, DROP validate_registration_date, CHANGE medical_certificate profil_tarif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A729957FF4 FOREIGN KEY (profil_tarif_id) REFERENCES price_list (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7C903FE1D FOREIGN KEY (userconnected_id_id) REFERENCES userconnected (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62A8A7A729957FF4 ON registration (profil_tarif_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62A8A7A7C903FE1D ON registration (userconnected_id_id)');
        $this->addSql('ALTER TABLE userConnected DROP gdpr');
        $this->addSql('ALTER TABLE vika_event DROP inscription, DROP easy_inscription, CHANGE end_date end_date DATETIME DEFAULT NULL');
    }
}
