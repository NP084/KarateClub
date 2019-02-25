<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190216221145 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE adress');
        $this->addSql('DROP TABLE city_user');
        $this->addSql('DROP TABLE phone');
        $this->addSql('ALTER TABLE user DROP name, DROP first_name, DROP birthday, DROP registration_date, DROP member, DROP since_member');
        $this->addSql('ALTER TABLE comment DROP user_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE adress (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, num VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, post_box VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, street VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE city_user (id INT AUTO_INCREMENT NOT NULL, zip SMALLINT NOT NULL, city VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, country VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, num VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comment ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD first_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD birthday DATE DEFAULT NULL, ADD registration_date DATE DEFAULT NULL, ADD member TINYINT(1) NOT NULL, ADD since_member DATE DEFAULT NULL');
    }
}
