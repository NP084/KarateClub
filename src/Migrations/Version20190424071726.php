<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190424071726 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE price_grid ADD vika_event_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE price_grid ADD CONSTRAINT FK_53722B8D54707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id)');
        $this->addSql('CREATE INDEX IDX_53722B8D54707435 ON price_grid (vika_event_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE price_grid DROP FOREIGN KEY FK_53722B8D54707435');
        $this->addSql('DROP INDEX IDX_53722B8D54707435 ON price_grid');
        $this->addSql('ALTER TABLE price_grid DROP vika_event_id');
    }
}
