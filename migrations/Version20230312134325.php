<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230312134325 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, en_avant TINYINT(1) NOT NULL, valide TINYINT(1) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE code_postal (id INT AUTO_INCREMENT NOT NULL, code_postal INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, commune VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_slider (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, is_displayed TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE internaute (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, newsletter TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localite (id INT AUTO_INCREMENT NOT NULL, localite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestataire (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, site_internet VARCHAR(255) DEFAULT NULL, num_tel VARCHAR(255) DEFAULT NULL, num_tva VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestataire_categorie (prestataire_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_80B50294BE3DB2B7 (prestataire_id), INDEX IDX_80B50294BCF5E72D (categorie_id), PRIMARY KEY(prestataire_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, prestataire_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, document_pdf VARCHAR(255) DEFAULT NULL, debut DATE DEFAULT NULL, fin DATE DEFAULT NULL, affichage_de DATE DEFAULT NULL, affichage_jusque DATE DEFAULT NULL, INDEX IDX_C11D7DD1BE3DB2B7 (prestataire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, prestataire_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, tarif VARCHAR(255) DEFAULT NULL, info_complementaire VARCHAR(255) DEFAULT NULL, debut DATE DEFAULT NULL, fin DATE DEFAULT NULL, affichage_de DATE DEFAULT NULL, affichage_jusque DATE DEFAULT NULL, INDEX IDX_C27C9369BE3DB2B7 (prestataire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, internaute_id INT DEFAULT NULL, prestataire_id INT DEFAULT NULL, code_postal_id INT DEFAULT NULL, commune_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, adresse_n VARCHAR(255) DEFAULT NULL, adresse_rue VARCHAR(255) DEFAULT NULL, inscription DATE DEFAULT NULL, type_utilisateur VARCHAR(255) DEFAULT NULL, banni TINYINT(1) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), UNIQUE INDEX UNIQ_1D1C63B3CAF41882 (internaute_id), UNIQUE INDEX UNIQ_1D1C63B3BE3DB2B7 (prestataire_id), INDEX IDX_1D1C63B3B2B59251 (code_postal_id), INDEX IDX_1D1C63B3131A4F72 (commune_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prestataire_categorie ADD CONSTRAINT FK_80B50294BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestataire_categorie ADD CONSTRAINT FK_80B50294BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3CAF41882 FOREIGN KEY (internaute_id) REFERENCES internaute (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3B2B59251 FOREIGN KEY (code_postal_id) REFERENCES code_postal (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3131A4F72 FOREIGN KEY (commune_id) REFERENCES commune (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestataire_categorie DROP FOREIGN KEY FK_80B50294BE3DB2B7');
        $this->addSql('ALTER TABLE prestataire_categorie DROP FOREIGN KEY FK_80B50294BCF5E72D');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1BE3DB2B7');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369BE3DB2B7');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3CAF41882');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3BE3DB2B7');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3B2B59251');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3131A4F72');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE code_postal');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE home_slider');
        $this->addSql('DROP TABLE internaute');
        $this->addSql('DROP TABLE localite');
        $this->addSql('DROP TABLE prestataire');
        $this->addSql('DROP TABLE prestataire_categorie');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
