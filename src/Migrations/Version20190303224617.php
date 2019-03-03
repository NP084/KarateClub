<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190303224617 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE registration (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, registration_date DATETIME NOT NULL, remark LONGTEXT DEFAULT NULL, INDEX IDX_62A8A7A771F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A771F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE attached_file ADD member_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attached_file ADD CONSTRAINT FK_B010289A7597D3FE FOREIGN KEY (member_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B010289A7597D3FE ON attached_file (member_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE registration');
        $this->addSql('ALTER TABLE attached_file DROP FOREIGN KEY FK_B010289A7597D3FE');
        $this->addSql('DROP INDEX IDX_B010289A7597D3FE ON attached_file');
        $this->addSql('ALTER TABLE attached_file DROP member_id');
    }
}
