<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190424201043 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE rental DROP FOREIGN KEY FK_1619C27D517FE9FE');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE rental');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, label VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, size VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, info LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ref_intern VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_D338D58312469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rental (id INT AUTO_INCREMENT NOT NULL, member_id INT NOT NULL, equipment_id INT NOT NULL, rental_date DATETIME NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, remark LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_1619C27D7597D3FE (member_id), INDEX IDX_1619C27D517FE9FE (equipment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D58312469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE rental ADD CONSTRAINT FK_1619C27D517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE rental ADD CONSTRAINT FK_1619C27D7597D3FE FOREIGN KEY (member_id) REFERENCES app_user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
