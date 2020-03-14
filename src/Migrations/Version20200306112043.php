<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306112043 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nation ADD leader_id INT NOT NULL');
        $this->addSql('ALTER TABLE nation ADD CONSTRAINT FK_CC5A6D2773154ED4 FOREIGN KEY (leader_id) REFERENCES leader (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CC5A6D2773154ED4 ON nation (leader_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nation DROP FOREIGN KEY FK_CC5A6D2773154ED4');
        $this->addSql('DROP INDEX UNIQ_CC5A6D2773154ED4 ON nation');
        $this->addSql('ALTER TABLE nation DROP leader_id');
    }
}
