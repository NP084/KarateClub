<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190328173853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE event_time_period (event_id INT NOT NULL, time_period_id INT NOT NULL, INDEX IDX_37C782B871F7E88B (event_id), INDEX IDX_37C782B87EFD7106 (time_period_id), PRIMARY KEY(event_id, time_period_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event_time_period ADD CONSTRAINT FK_37C782B871F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_time_period ADD CONSTRAINT FK_37C782B87EFD7106 FOREIGN KEY (time_period_id) REFERENCES time_period (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE media_article');
        $this->addSql('DROP TABLE media_equipment');
        $this->addSql('DROP TABLE media_event');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA77EFD7106');
        $this->addSql('DROP INDEX IDX_3BAE0AA77EFD7106 ON event');
        $this->addSql('ALTER TABLE event DROP time_period_id');
        $this->addSql('ALTER TABLE app_user DROP email, DROP username, DROP password, DROP name, DROP firstname, DROP birthday, DROP created_user');
        $this->addSql('ALTER TABLE content_page ADD path VARCHAR(255) NOT NULL, CHANGE name title VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE media_article (media_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_63ED882FEA9FDD75 (media_id), INDEX IDX_63ED882F7294869C (article_id), PRIMARY KEY(media_id, article_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE media_equipment (media_id INT NOT NULL, equipment_id INT NOT NULL, INDEX IDX_F658660DEA9FDD75 (media_id), INDEX IDX_F658660D517FE9FE (equipment_id), PRIMARY KEY(media_id, equipment_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE media_event (media_id INT NOT NULL, event_id INT NOT NULL, INDEX IDX_24B7CE16EA9FDD75 (media_id), INDEX IDX_24B7CE1671F7E88B (event_id), PRIMARY KEY(media_id, event_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE media_article ADD CONSTRAINT FK_63ED882F7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_article ADD CONSTRAINT FK_63ED882FEA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_equipment ADD CONSTRAINT FK_F658660D517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_equipment ADD CONSTRAINT FK_F658660DEA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_event ADD CONSTRAINT FK_24B7CE1671F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_event ADD CONSTRAINT FK_24B7CE16EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE event_time_period');
        $this->addSql('ALTER TABLE app_user ADD email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD username VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD name VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD firstname VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD birthday DATE DEFAULT NULL, ADD created_user DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE content_page ADD name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP title, DROP path');
        $this->addSql('ALTER TABLE event ADD time_period_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA77EFD7106 FOREIGN KEY (time_period_id) REFERENCES time_period (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA77EFD7106 ON event (time_period_id)');
    }
}
