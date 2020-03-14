<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306111645 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nation ADD ethnie_id INT NOT NULL');
        $this->addSql('ALTER TABLE nation ADD CONSTRAINT FK_CC5A6D27539A2DA8 FOREIGN KEY (ethnie_id) REFERENCES ethnie (id)');
        $this->addSql('CREATE INDEX IDX_CC5A6D27539A2DA8 ON nation (ethnie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nation DROP FOREIGN KEY FK_CC5A6D27539A2DA8');
        $this->addSql('DROP INDEX IDX_CC5A6D27539A2DA8 ON nation');
        $this->addSql('ALTER TABLE nation DROP ethnie_id');
    }
}
