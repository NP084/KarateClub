<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190408081234 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE vika_event_time_period');
        $this->addSql('ALTER TABLE vika_event ADD start_date DATETIME NOT NULL, ADD end_date DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vika_event_time_period (vika_event_id INT NOT NULL, time_period_id INT NOT NULL, INDEX IDX_D59E78F07EFD7106 (time_period_id), INDEX IDX_D59E78F054707435 (vika_event_id), PRIMARY KEY(vika_event_id, time_period_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE vika_event_time_period ADD CONSTRAINT FK_D59E78F054707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vika_event_time_period ADD CONSTRAINT FK_D59E78F07EFD7106 FOREIGN KEY (time_period_id) REFERENCES time_period (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vika_event DROP start_date, DROP end_date');
    }
}
