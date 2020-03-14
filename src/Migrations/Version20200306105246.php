<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306105246 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE nation (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nation_parti (id INT AUTO_INCREMENT NOT NULL, relation_id INT NOT NULL, parti_id INT NOT NULL, popularite DOUBLE PRECISION NOT NULL, INDEX IDX_5914B4883256915B (relation_id), UNIQUE INDEX UNIQ_5914B488712547C6 (parti_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nation_parti ADD CONSTRAINT FK_5914B4883256915B FOREIGN KEY (relation_id) REFERENCES nation (id)');
        $this->addSql('ALTER TABLE nation_parti ADD CONSTRAINT FK_5914B488712547C6 FOREIGN KEY (parti_id) REFERENCES parti (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nation_parti DROP FOREIGN KEY FK_5914B4883256915B');
        $this->addSql('DROP TABLE nation');
        $this->addSql('DROP TABLE nation_parti');
    }
}
