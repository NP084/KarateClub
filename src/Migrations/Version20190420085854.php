<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190420085854 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE price_list (id INT AUTO_INCREMENT NOT NULL, number_adult DOUBLE PRECISION NOT NULL, number_children DOUBLE PRECISION NOT NULL, number_student DOUBLE PRECISION NOT NULL, number_baby DOUBLE PRECISION NOT NULL, price_federation DOUBLE PRECISION NOT NULL, price_club DOUBLE PRECISION NOT NULL, percentage DOUBLE PRECISION NOT NULL, price_total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE app_user CHANGE birthdate birthdate DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE status ADD statut INT NOT NULL, ADD remark LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD profil_tarif_id INT DEFAULT NULL, ADD userconnected_id_id INT NOT NULL, ADD minor TINYINT(1) DEFAULT NULL, ADD medical_care TINYINT(1) DEFAULT NULL, ADD image_diffusion TINYINT(1) DEFAULT NULL, ADD gdpr TINYINT(1) DEFAULT NULL, ADD condition_registration TINYINT(1) NOT NULL, ADD tarif_profil INT NOT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A729957FF4 FOREIGN KEY (profil_tarif_id) REFERENCES price_list (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7C903FE1D FOREIGN KEY (userconnected_id_id) REFERENCES userConnected (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62A8A7A729957FF4 ON registration (profil_tarif_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62A8A7A7C903FE1D ON registration (userconnected_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A729957FF4');
        $this->addSql('DROP TABLE price_list');
        $this->addSql('ALTER TABLE app_user CHANGE birthdate birthdate DATE NOT NULL');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7C903FE1D');
        $this->addSql('DROP INDEX UNIQ_62A8A7A729957FF4 ON registration');
        $this->addSql('DROP INDEX UNIQ_62A8A7A7C903FE1D ON registration');
        $this->addSql('ALTER TABLE registration DROP profil_tarif_id, DROP userconnected_id_id, DROP minor, DROP medical_care, DROP image_diffusion, DROP gdpr, DROP condition_registration, DROP tarif_profil');
        $this->addSql('ALTER TABLE status DROP statut, DROP remark');
    }
}
