<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190408075423 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vika_event_time_period (vika_event_id INT NOT NULL, time_period_id INT NOT NULL, INDEX IDX_D59E78F054707435 (vika_event_id), INDEX IDX_D59E78F07EFD7106 (time_period_id), PRIMARY KEY(vika_event_id, time_period_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vika_event_time_period ADD CONSTRAINT FK_D59E78F054707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vika_event_time_period ADD CONSTRAINT FK_D59E78F07EFD7106 FOREIGN KEY (time_period_id) REFERENCES time_period (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vika_event ADD category_id INT NOT NULL, ADD image_name VARCHAR(255) DEFAULT NULL, ADD updated_image DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE vika_event ADD CONSTRAINT FK_4809167212469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_4809167212469DE2 ON vika_event (category_id)');
        $this->addSql('ALTER TABLE registration ADD vika_event_id INT NOT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A754707435 FOREIGN KEY (vika_event_id) REFERENCES vika_event (id)');
        $this->addSql('CREATE INDEX IDX_62A8A7A754707435 ON registration (vika_event_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE vika_event_time_period');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A754707435');
        $this->addSql('DROP INDEX IDX_62A8A7A754707435 ON registration');
        $this->addSql('ALTER TABLE registration DROP vika_event_id');
        $this->addSql('ALTER TABLE vika_event DROP FOREIGN KEY FK_4809167212469DE2');
        $this->addSql('DROP INDEX IDX_4809167212469DE2 ON vika_event');
        $this->addSql('ALTER TABLE vika_event DROP category_id, DROP image_name, DROP updated_image');
    }
}
