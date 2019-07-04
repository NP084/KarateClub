<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190704203909 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, datecreat DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_list (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, person_of_contact_id INT NOT NULL, relation VARCHAR(255) NOT NULL, info LONGTEXT DEFAULT NULL, INDEX IDX_6C377AE7A76ED395 (user_id), INDEX IDX_6C377AE767BD712 (person_of_contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, avatar_name VARCHAR(255) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, created_gal DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userConnected (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, reset_token VARCHAR(255) DEFAULT NULL, gdpr TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_560B3B76A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, country_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, zip VARCHAR(255) NOT NULL, city_name VARCHAR(255) NOT NULL, INDEX IDX_2D5B0234F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, registration_id INT NOT NULL, category_id INT NOT NULL, amount DOUBLE PRECISION NOT NULL, is_paid TINYINT(1) DEFAULT NULL, INDEX IDX_B1DC7A1E833D8F43 (registration_id), INDEX IDX_B1DC7A1E12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE app_user (id INT AUTO_INCREMENT NOT NULL, user_connected_id INT DEFAULT NULL, belt VARCHAR(255) DEFAULT NULL, receipt_date DATE DEFAULT NULL, sex VARCHAR(10) DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_image DATETIME DEFAULT NULL, is_active TINYINT(1) NOT NULL, created_us DATETIME NOT NULL, first_name VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, birthdate DATE DEFAULT NULL, fed_num VARCHAR(255) DEFAULT NULL, is_trial TINYINT(1) DEFAULT NULL, bars INT DEFAULT NULL, INDEX IDX_88BDF3E9F2063BA5 (user_connected_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_adress (user_id INT NOT NULL, adress_id INT NOT NULL, INDEX IDX_39BEDC83A76ED395 (user_id), INDEX IDX_39BEDC838486F9AC (adress_id), PRIMARY KEY(user_id, adress_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adress (id INT AUTO_INCREMENT NOT NULL, city_id INT NOT NULL, type VARCHAR(255) NOT NULL, num VARCHAR(255) NOT NULL, post_box VARCHAR(255) DEFAULT NULL, street_name VARCHAR(255) NOT NULL, INDEX IDX_5CECC7BE8BAC62AF (city_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE content_page (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, path VARCHAR(255) NOT NULL, subtitle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_club (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, num VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE encadrement (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, datecreat DATETIME DEFAULT NULL, imagename VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE history (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, category_id INT DEFAULT NULL, ref_date DATETIME DEFAULT NULL, description LONGTEXT NOT NULL, INDEX IDX_27BA704BA76ED395 (user_id), INDEX IDX_27BA704B12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attached_file (id INT AUTO_INCREMENT NOT NULL, member_id INT DEFAULT NULL, registration_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, datecreat DATETIME DEFAULT NULL, docname VARCHAR(255) DEFAULT NULL, INDEX IDX_B010289A7597D3FE (member_id), INDEX IDX_B010289A833D8F43 (registration_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person_of_contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, num1 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vika_event (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, owner VARCHAR(255) DEFAULT NULL, title VARCHAR(255) NOT NULL, capacity INT DEFAULT NULL, created_ev DATETIME NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_image DATETIME DEFAULT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, info LONGTEXT DEFAULT NULL, published TINYINT(1) DEFAULT NULL, inscription TINYINT(1) DEFAULT NULL, easy_inscription TINYINT(1) DEFAULT NULL, INDEX IDX_4809167212469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phone (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, num VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phone_user (phone_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_6E97845B3B7323CB (phone_id), INDEX IDX_6E97845BA76ED395 (user_id), PRIMARY KEY(phone_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE price_grid (id INT AUTO_INCREMENT NOT NULL, vika_event_id INT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, public VARCHAR(255) NOT NULL, info LONGTEXT DEFAULT NULL, label VARCHAR(255) NOT NULL, INDEX IDX_53722B8D54707435 (vika_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, gallery_id INT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_image DATETIME DEFAULT NULL, INDEX IDX_6A2CA10C4E7AF8F (gallery_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, notif_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification_user (notification_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_35AF9D73EF1A9D84 (notification_id), INDEX IDX_35AF9D73A76ED395 (user_id), PRIMARY KEY(notification_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_image DATETIME DEFAULT NULL, INDEX IDX_23A0E6612469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE registration (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, vika_event_id INT NOT NULL, registration_date DATETIME NOT NULL, remark LONGTEXT DEFAULT NULL, minor TINYINT(1) DEFAULT NULL, medical_care TINYINT(1) DEFAULT NULL, image_diffusion TINYINT(1) DEFAULT NULL, condition_registration TINYINT(1) DEFAULT NULL, total_amount DOUBLE PRECISION DEFAULT NULL, validate_registration_date DATETIME DEFAULT NULL, is_validated TINYINT(1) DEFAULT NULL, INDEX IDX_62A8A7A7A76ED395 (user_id), INDEX IDX_62A8A7A754707435 (vika_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact_list ADD CONSTRAINT FK_6C377AE7A76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE contact_list ADD CONSTRAINT FK_6C377AE767BD712 FOREIGN KEY (person_of_contact_id) REFERENCES person_of_contact (id)');
        $this->addSql('ALTER TABLE userConnected ADD CONSTRAINT FK_560B3B76A76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE app_user ADD CONSTRAINT FK_88BDF3E9F2063BA5 FOREIGN KEY (user_connected_id) REFERENCES userConnected (id)');
        $this->addSql('ALTER TABLE user_adress ADD CONSTRAINT FK_39BEDC83A76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_adress ADD CONSTRAINT FK_39BEDC838486F9AC FOREIGN KEY (adress_id) REFERENCES adress (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adress ADD CONSTRAINT FK_5CECC7BE8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE history ADD CONSTRAINT FK_27BA704BA76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE history ADD CONSTRAINT FK_27BA704B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A7597D3FE FOREIGN KEY (member_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A833D8F43 FOREIGN KEY (registration_id) REFERENCES registration (id)');
        $this->addSql('ALTER TABLE vika_event ADD CONSTRAINT FK_4809167212469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE phone_user ADD CONSTRAINT FK_6E97845B3B7323CB FOREIGN KEY (phone_id) REFERENCES phone (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE phone_user ADD CONSTRAINT FK_6E97845BA76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE price_grid ADD CONSTRAINT FK_53722B8D54707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C4E7AF8F FOREIGN KEY (gallery_id) REFERENCES gallery (id)');
        $this->addSql('ALTER TABLE notification_user ADD CONSTRAINT FK_35AF9D73EF1A9D84 FOREIGN KEY (notification_id) REFERENCES notification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notification_user ADD CONSTRAINT FK_35AF9D73A76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7A76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A754707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E12469DE2');
        $this->addSql('ALTER TABLE history DROP FOREIGN KEY FK_27BA704B12469DE2');
        $this->addSql('ALTER TABLE vika_event DROP FOREIGN KEY FK_4809167212469DE2');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6612469DE2');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C4E7AF8F');
        $this->addSql('ALTER TABLE app_user DROP FOREIGN KEY FK_88BDF3E9F2063BA5');
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234F92F3E70');
        $this->addSql('ALTER TABLE adress DROP FOREIGN KEY FK_5CECC7BE8BAC62AF');
        $this->addSql('ALTER TABLE contact_list DROP FOREIGN KEY FK_6C377AE7A76ED395');
        $this->addSql('ALTER TABLE userConnected DROP FOREIGN KEY FK_560B3B76A76ED395');
        $this->addSql('ALTER TABLE user_adress DROP FOREIGN KEY FK_39BEDC83A76ED395');
        $this->addSql('ALTER TABLE history DROP FOREIGN KEY FK_27BA704BA76ED395');
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A7597D3FE');
        $this->addSql('ALTER TABLE phone_user DROP FOREIGN KEY FK_6E97845BA76ED395');
        $this->addSql('ALTER TABLE notification_user DROP FOREIGN KEY FK_35AF9D73A76ED395');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7A76ED395');
        $this->addSql('ALTER TABLE user_adress DROP FOREIGN KEY FK_39BEDC838486F9AC');
        $this->addSql('ALTER TABLE contact_list DROP FOREIGN KEY FK_6C377AE767BD712');
        $this->addSql('ALTER TABLE price_grid DROP FOREIGN KEY FK_53722B8D54707435');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A754707435');
        $this->addSql('ALTER TABLE phone_user DROP FOREIGN KEY FK_6E97845B3B7323CB');
        $this->addSql('ALTER TABLE notification_user DROP FOREIGN KEY FK_35AF9D73EF1A9D84');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E833D8F43');
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A833D8F43');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE contact_list');
        $this->addSql('DROP TABLE gallery');
        $this->addSql('DROP TABLE userConnected');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE app_user');
        $this->addSql('DROP TABLE user_adress');
        $this->addSql('DROP TABLE adress');
        $this->addSql('DROP TABLE content_page');
        $this->addSql('DROP TABLE contact_club');
        $this->addSql('DROP TABLE encadrement');
        $this->addSql('DROP TABLE history');
        $this->addSql('DROP TABLE attached_file');
        $this->addSql('DROP TABLE person_of_contact');
        $this->addSql('DROP TABLE vika_event');
        $this->addSql('DROP TABLE phone');
        $this->addSql('DROP TABLE phone_user');
        $this->addSql('DROP TABLE price_grid');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE notification_user');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE registration');
    }
}
