<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190408074440 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vika_event (id INT AUTO_INCREMENT NOT NULL, owner VARCHAR(255) DEFAULT NULL, title VARCHAR(255) NOT NULL, capacity INT DEFAULT NULL, created_ev DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A771F7E88B');
        $this->addSql('DROP INDEX IDX_62A8A7A771F7E88B ON registration');
        $this->addSql('ALTER TABLE registration DROP event_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE vika_event');
        $this->addSql('ALTER TABLE registration ADD event_id INT NOT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A771F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_62A8A7A771F7E88B ON registration (event_id)');
    }
}
