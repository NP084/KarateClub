<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190424170939 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE preregistration_phone DROP FOREIGN KEY FK_953D7D0490DD984');
        $this->addSql('CREATE TABLE price_grid (id INT AUTO_INCREMENT NOT NULL, vika_event_id INT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, public VARCHAR(255) NOT NULL, info LONGTEXT DEFAULT NULL, label VARCHAR(255) NOT NULL, INDEX IDX_53722B8D54707435 (vika_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE price_grid ADD CONSTRAINT FK_53722B8D54707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id)');
        $this->addSql('DROP TABLE preregistration');
        $this->addSql('DROP TABLE preregistration_phone');
        $this->addSql('ALTER TABLE app_user ADD is_trial TINYINT(1) DEFAULT NULL, ADD bars INT DEFAULT NULL');
        $this->addSql('ALTER TABLE userconnected DROP name, DROP username, DROP firstname, DROP birthday, DROP created_user');
        $this->addSql('ALTER TABLE vika_event ADD info LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE preregistration (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, adress_id INT DEFAULT NULL, city_id INT NOT NULL, country_id INT NOT NULL, UNIQUE INDEX UNIQ_D02FA6268486F9AC (adress_id), INDEX IDX_D02FA626F92F3E70 (country_id), UNIQUE INDEX UNIQ_D02FA626A76ED395 (user_id), INDEX IDX_D02FA6268BAC62AF (city_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE preregistration_phone (preregistration_id INT NOT NULL, phone_id INT NOT NULL, INDEX IDX_953D7D0490DD984 (preregistration_id), INDEX IDX_953D7D043B7323CB (phone_id), PRIMARY KEY(preregistration_id, phone_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA6268486F9AC FOREIGN KEY (adress_id) REFERENCES adress (id)');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA6268BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA626A76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA626F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE preregistration_phone ADD CONSTRAINT FK_953D7D043B7323CB FOREIGN KEY (phone_id) REFERENCES phone (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE preregistration_phone ADD CONSTRAINT FK_953D7D0490DD984 FOREIGN KEY (preregistration_id) REFERENCES preregistration (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE price_grid');
        $this->addSql('ALTER TABLE app_user DROP is_trial, DROP bars');
        $this->addSql('ALTER TABLE userConnected ADD name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD username VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD firstname VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD birthday DATE NOT NULL, ADD created_user DATETIME NOT NULL');
        $this->addSql('ALTER TABLE vika_event DROP info');
    }
}
