<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200306104259 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE effet (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ethnie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE leader (id INT AUTO_INCREMENT NOT NULL, ethnie_id INT DEFAULT NULL, parti_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, age INT NOT NULL, INDEX IDX_F5E3EAD7539A2DA8 (ethnie_id), INDEX IDX_F5E3EAD7712547C6 (parti_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE leader_trait_element (leader_id INT NOT NULL, trait_element_id INT NOT NULL, INDEX IDX_C139968573154ED4 (leader_id), INDEX IDX_C1399685E11DB024 (trait_element_id), PRIMARY KEY(leader_id, trait_element_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trait_element (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trait_element_effet (trait_element_id INT NOT NULL, effet_id INT NOT NULL, INDEX IDX_2B874D71E11DB024 (trait_element_id), INDEX IDX_2B874D71E76D37FA (effet_id), PRIMARY KEY(trait_element_id, effet_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE leader ADD CONSTRAINT FK_F5E3EAD7539A2DA8 FOREIGN KEY (ethnie_id) REFERENCES ethnie (id)');
        $this->addSql('ALTER TABLE leader ADD CONSTRAINT FK_F5E3EAD7712547C6 FOREIGN KEY (parti_id) REFERENCES parti (id)');
        $this->addSql('ALTER TABLE leader_trait_element ADD CONSTRAINT FK_C139968573154ED4 FOREIGN KEY (leader_id) REFERENCES leader (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE leader_trait_element ADD CONSTRAINT FK_C1399685E11DB024 FOREIGN KEY (trait_element_id) REFERENCES trait_element (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trait_element_effet ADD CONSTRAINT FK_2B874D71E11DB024 FOREIGN KEY (trait_element_id) REFERENCES trait_element (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trait_element_effet ADD CONSTRAINT FK_2B874D71E76D37FA FOREIGN KEY (effet_id) REFERENCES effet (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE trait_element_effet DROP FOREIGN KEY FK_2B874D71E76D37FA');
        $this->addSql('ALTER TABLE leader DROP FOREIGN KEY FK_F5E3EAD7539A2DA8');
        $this->addSql('ALTER TABLE leader_trait_element DROP FOREIGN KEY FK_C139968573154ED4');
        $this->addSql('ALTER TABLE leader_trait_element DROP FOREIGN KEY FK_C1399685E11DB024');
        $this->addSql('ALTER TABLE trait_element_effet DROP FOREIGN KEY FK_2B874D71E11DB024');
        $this->addSql('DROP TABLE effet');
        $this->addSql('DROP TABLE ethnie');
        $this->addSql('DROP TABLE leader');
        $this->addSql('DROP TABLE leader_trait_element');
        $this->addSql('DROP TABLE trait_element');
        $this->addSql('DROP TABLE trait_element_effet');
    }
}
