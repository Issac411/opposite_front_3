<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200409114321 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE trait_element_effet');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE trait_element_effet (trait_element_id INT NOT NULL, effet_id INT NOT NULL, INDEX IDX_2B874D71E11DB024 (trait_element_id), INDEX IDX_2B874D71E76D37FA (effet_id), PRIMARY KEY(trait_element_id, effet_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE trait_element_effet ADD CONSTRAINT FK_2B874D71E11DB024 FOREIGN KEY (trait_element_id) REFERENCES trait_element (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trait_element_effet ADD CONSTRAINT FK_2B874D71E76D37FA FOREIGN KEY (effet_id) REFERENCES effet (id) ON DELETE CASCADE');
    }
}
