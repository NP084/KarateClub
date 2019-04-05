<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190405164745 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE gallery (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE encadrement CHANGE imagename imagename VARCHAR(255) DEFAULT NULL, CHANGE datecreat datecreat DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE media ADD gallery_id INT DEFAULT NULL, ADD updated_image DATETIME DEFAULT NULL, DROP title, DROP pathway, DROP created_ev, CHANGE description image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C4E7AF8F FOREIGN KEY (gallery_id) REFERENCES gallery (id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10C4E7AF8F ON media (gallery_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C4E7AF8F');
        $this->addSql('DROP TABLE gallery');
        $this->addSql('ALTER TABLE encadrement CHANGE datecreat datecreat DATETIME NOT NULL, CHANGE imagename imagename VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('DROP INDEX IDX_6A2CA10C4E7AF8F ON media');
        $this->addSql('ALTER TABLE media ADD title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD pathway VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD created_ev DATETIME NOT NULL, DROP gallery_id, DROP updated_image, CHANGE image_name description VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}