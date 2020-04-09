<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200409094743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE effet (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, icone VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE esprit_national (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(120) NOT NULL, logo VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ethnie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE leader (id INT AUTO_INCREMENT NOT NULL, ethnie_id INT DEFAULT NULL, parti_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, age INT NOT NULL, photo LONGTEXT DEFAULT NULL, INDEX IDX_F5E3EAD7539A2DA8 (ethnie_id), INDEX IDX_F5E3EAD7712547C6 (parti_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nation (id INT AUTO_INCREMENT NOT NULL, ethnie_id INT NOT NULL, leader_id INT NOT NULL, libelle VARCHAR(100) NOT NULL, drapeau LONGTEXT DEFAULT NULL, INDEX IDX_CC5A6D27539A2DA8 (ethnie_id), INDEX IDX_CC5A6D2773154ED4 (leader_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nation_parti (id INT AUTO_INCREMENT NOT NULL, relation_id INT NOT NULL, parti_id INT DEFAULT NULL, popularite DOUBLE PRECISION NOT NULL, INDEX IDX_5914B4883256915B (relation_id), INDEX IDX_5914B488712547C6 (parti_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parti (id INT AUTO_INCREMENT NOT NULL, politique_id INT DEFAULT NULL, nation_parti_id INT DEFAULT NULL, libelle VARCHAR(100) NOT NULL, logo LONGTEXT DEFAULT NULL, INDEX IDX_94225E84F528CAF0 (politique_id), INDEX IDX_94225E8413143090 (nation_parti_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parti_nation (parti_id INT NOT NULL, nation_id INT NOT NULL, INDEX IDX_F6972755712547C6 (parti_id), INDEX IDX_F6972755AE3899 (nation_id), PRIMARY KEY(parti_id, nation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE politique (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, logo LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trait_element (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, couleur VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trait_element_effet (trait_element_id INT NOT NULL, effet_id INT NOT NULL, INDEX IDX_2B874D71E11DB024 (trait_element_id), INDEX IDX_2B874D71E76D37FA (effet_id), PRIMARY KEY(trait_element_id, effet_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE leader ADD CONSTRAINT FK_F5E3EAD7539A2DA8 FOREIGN KEY (ethnie_id) REFERENCES ethnie (id)');
        $this->addSql('ALTER TABLE leader ADD CONSTRAINT FK_F5E3EAD7712547C6 FOREIGN KEY (parti_id) REFERENCES parti (id)');
        $this->addSql('ALTER TABLE nation ADD CONSTRAINT FK_CC5A6D27539A2DA8 FOREIGN KEY (ethnie_id) REFERENCES ethnie (id)');
        $this->addSql('ALTER TABLE nation ADD CONSTRAINT FK_CC5A6D2773154ED4 FOREIGN KEY (leader_id) REFERENCES leader (id)');
        $this->addSql('ALTER TABLE nation_parti ADD CONSTRAINT FK_5914B4883256915B FOREIGN KEY (relation_id) REFERENCES nation (id)');
        $this->addSql('ALTER TABLE nation_parti ADD CONSTRAINT FK_5914B488712547C6 FOREIGN KEY (parti_id) REFERENCES parti (id)');
        $this->addSql('ALTER TABLE parti ADD CONSTRAINT FK_94225E84F528CAF0 FOREIGN KEY (politique_id) REFERENCES politique (id)');
        $this->addSql('ALTER TABLE parti ADD CONSTRAINT FK_94225E8413143090 FOREIGN KEY (nation_parti_id) REFERENCES nation_parti (id)');
        $this->addSql('ALTER TABLE parti_nation ADD CONSTRAINT FK_F6972755712547C6 FOREIGN KEY (parti_id) REFERENCES parti (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parti_nation ADD CONSTRAINT FK_F6972755AE3899 FOREIGN KEY (nation_id) REFERENCES nation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trait_element_effet ADD CONSTRAINT FK_2B874D71E11DB024 FOREIGN KEY (trait_element_id) REFERENCES trait_element (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trait_element_effet ADD CONSTRAINT FK_2B874D71E76D37FA FOREIGN KEY (effet_id) REFERENCES effet (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE trait_element_effet DROP FOREIGN KEY FK_2B874D71E76D37FA');
        $this->addSql('ALTER TABLE leader DROP FOREIGN KEY FK_F5E3EAD7539A2DA8');
        $this->addSql('ALTER TABLE nation DROP FOREIGN KEY FK_CC5A6D27539A2DA8');
        $this->addSql('ALTER TABLE nation DROP FOREIGN KEY FK_CC5A6D2773154ED4');
        $this->addSql('ALTER TABLE nation_parti DROP FOREIGN KEY FK_5914B4883256915B');
        $this->addSql('ALTER TABLE parti_nation DROP FOREIGN KEY FK_F6972755AE3899');
        $this->addSql('ALTER TABLE parti DROP FOREIGN KEY FK_94225E8413143090');
        $this->addSql('ALTER TABLE leader DROP FOREIGN KEY FK_F5E3EAD7712547C6');
        $this->addSql('ALTER TABLE nation_parti DROP FOREIGN KEY FK_5914B488712547C6');
        $this->addSql('ALTER TABLE parti_nation DROP FOREIGN KEY FK_F6972755712547C6');
        $this->addSql('ALTER TABLE parti DROP FOREIGN KEY FK_94225E84F528CAF0');
        $this->addSql('ALTER TABLE trait_element_effet DROP FOREIGN KEY FK_2B874D71E11DB024');
        $this->addSql('DROP TABLE effet');
        $this->addSql('DROP TABLE esprit_national');
        $this->addSql('DROP TABLE ethnie');
        $this->addSql('DROP TABLE leader');
        $this->addSql('DROP TABLE nation');
        $this->addSql('DROP TABLE nation_parti');
        $this->addSql('DROP TABLE parti');
        $this->addSql('DROP TABLE parti_nation');
        $this->addSql('DROP TABLE politique');
        $this->addSql('DROP TABLE trait_element');
        $this->addSql('DROP TABLE trait_element_effet');
    }
}
