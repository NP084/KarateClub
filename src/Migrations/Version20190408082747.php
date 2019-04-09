<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190408082747 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE gallery ADD avatar_name VARCHAR(255) DEFAULT NULL, ADD date_creat DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE history ADD category_id INT DEFAULT NULL, DROP comment, CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE history ADD CONSTRAINT FK_27BA704B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_27BA704B12469DE2 ON history (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE gallery DROP avatar_name, DROP date_creat');
        $this->addSql('ALTER TABLE history DROP FOREIGN KEY FK_27BA704B12469DE2');
        $this->addSql('DROP INDEX IDX_27BA704B12469DE2 ON history');
        $this->addSql('ALTER TABLE history ADD comment LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, DROP category_id, CHANGE description description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
