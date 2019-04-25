<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190423200459 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE price_grid (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, public VARCHAR(255) NOT NULL, info LONGTEXT DEFAULT NULL, INDEX IDX_53722B8D12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE price_grid_vika_event (price_grid_id INT NOT NULL, vika_event_id INT NOT NULL, INDEX IDX_257679C347D7A0C9 (price_grid_id), INDEX IDX_257679C354707435 (vika_event_id), PRIMARY KEY(price_grid_id, vika_event_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE price_grid ADD CONSTRAINT FK_53722B8D12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE price_grid_vika_event ADD CONSTRAINT FK_257679C347D7A0C9 FOREIGN KEY (price_grid_id) REFERENCES price_grid (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE price_grid_vika_event ADD CONSTRAINT FK_257679C354707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE price_grid_vika_event DROP FOREIGN KEY FK_257679C347D7A0C9');
        $this->addSql('DROP TABLE price_grid');
        $this->addSql('DROP TABLE price_grid_vika_event');
    }
}
