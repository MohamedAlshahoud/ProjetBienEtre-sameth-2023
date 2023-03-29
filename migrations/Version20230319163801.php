<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230319163801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE internaute DROP FOREIGN KEY FK_6C8E97CC3DA5256D');
        $this->addSql('ALTER TABLE prestataire DROP FOREIGN KEY FK_60A264803DA5256D');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP INDEX UNIQ_6C8E97CC3DA5256D ON internaute');
        $this->addSql('ALTER TABLE internaute ADD image LONGTEXT DEFAULT NULL, DROP image_id');
        $this->addSql('DROP INDEX UNIQ_60A264803DA5256D ON prestataire');
        $this->addSql('ALTER TABLE prestataire ADD image LONGTEXT DEFAULT NULL, DROP image_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, image LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE internaute ADD image_id INT DEFAULT NULL, DROP image');
        $this->addSql('ALTER TABLE internaute ADD CONSTRAINT FK_6C8E97CC3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6C8E97CC3DA5256D ON internaute (image_id)');
        $this->addSql('ALTER TABLE prestataire ADD image_id INT DEFAULT NULL, DROP image');
        $this->addSql('ALTER TABLE prestataire ADD CONSTRAINT FK_60A264803DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_60A264803DA5256D ON prestataire (image_id)');
    }
}
