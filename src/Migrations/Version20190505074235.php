<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190505074235 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E2D6D889B');
        $this->addSql('DROP TABLE modality');
        $this->addSql('DROP INDEX IDX_B1DC7A1E2D6D889B ON paiement');
        $this->addSql('ALTER TABLE paiement CHANGE modality_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_B1DC7A1E12469DE2 ON paiement (category_id)');
        $this->addSql('ALTER TABLE registration ADD is_validated TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE modality (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E12469DE2');
        $this->addSql('DROP INDEX IDX_B1DC7A1E12469DE2 ON paiement');
        $this->addSql('ALTER TABLE paiement CHANGE category_id modality_id INT NOT NULL');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E2D6D889B FOREIGN KEY (modality_id) REFERENCES modality (id)');
        $this->addSql('CREATE INDEX IDX_B1DC7A1E2D6D889B ON paiement (modality_id)');
        $this->addSql('ALTER TABLE registration DROP is_validated');
    }
}
