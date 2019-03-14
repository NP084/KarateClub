<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190311130837 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_person_of_contact');
        $this->addSql('ALTER TABLE person_of_contact DROP info');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_person_of_contact (user_id INT NOT NULL, person_of_contact_id INT NOT NULL, INDEX IDX_7FB3CFB7A76ED395 (user_id), INDEX IDX_7FB3CFB767BD712 (person_of_contact_id), PRIMARY KEY(user_id, person_of_contact_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user_person_of_contact ADD CONSTRAINT FK_7FB3CFB767BD712 FOREIGN KEY (person_of_contact_id) REFERENCES person_of_contact (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_person_of_contact ADD CONSTRAINT FK_7FB3CFB7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_of_contact ADD info VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
