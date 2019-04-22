<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422151022 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE preregistration_phone (preregistration_id INT NOT NULL, phone_id INT NOT NULL, INDEX IDX_953D7D0490DD984 (preregistration_id), INDEX IDX_953D7D043B7323CB (phone_id), PRIMARY KEY(preregistration_id, phone_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE preregistration_phone ADD CONSTRAINT FK_953D7D0490DD984 FOREIGN KEY (preregistration_id) REFERENCES preregistration (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE preregistration_phone ADD CONSTRAINT FK_953D7D043B7323CB FOREIGN KEY (phone_id) REFERENCES phone (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE preregistration DROP FOREIGN KEY FK_D02FA62671179CD6');
        $this->addSql('DROP INDEX UNIQ_D02FA62671179CD6 ON preregistration');
        $this->addSql('ALTER TABLE preregistration ADD user_id INT DEFAULT NULL, ADD adress_id INT DEFAULT NULL, DROP name_id');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA626A76ED395 FOREIGN KEY (user_id) REFERENCES app_user (id)');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA6268486F9AC FOREIGN KEY (adress_id) REFERENCES adress (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D02FA626A76ED395 ON preregistration (user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D02FA6268486F9AC ON preregistration (adress_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE preregistration_phone');
        $this->addSql('ALTER TABLE preregistration DROP FOREIGN KEY FK_D02FA626A76ED395');
        $this->addSql('ALTER TABLE preregistration DROP FOREIGN KEY FK_D02FA6268486F9AC');
        $this->addSql('DROP INDEX UNIQ_D02FA626A76ED395 ON preregistration');
        $this->addSql('DROP INDEX UNIQ_D02FA6268486F9AC ON preregistration');
        $this->addSql('ALTER TABLE preregistration ADD name_id INT NOT NULL, DROP user_id, DROP adress_id');
        $this->addSql('ALTER TABLE preregistration ADD CONSTRAINT FK_D02FA62671179CD6 FOREIGN KEY (name_id) REFERENCES app_user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D02FA62671179CD6 ON preregistration (name_id)');
    }
}
