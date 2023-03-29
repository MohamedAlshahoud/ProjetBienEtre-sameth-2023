<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230323200549 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE auth_log');
        $this->addSql('ALTER TABLE utilisateur ADD nb_essais_infructueux INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE auth_log (id INT AUTO_INCREMENT NOT NULL, auth_attempt_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', user_ip VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, email_entered VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_successful_auth TINYINT(1) NOT NULL, startof_black_listing DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', end_of_black_listing DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_remember_me_auth TINYINT(1) NOT NULL, deauthenticated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE utilisateur DROP nb_essais_infructueux');
    }
}
