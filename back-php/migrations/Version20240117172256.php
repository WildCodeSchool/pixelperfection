<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240117172256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE market_share DROP FOREIGN KEY FK_2428222FF92F3E70');
        $this->addSql('DROP TABLE market_share');
        $this->addSql('ALTER TABLE country ADD supermarket DOUBLE PRECISION NOT NULL, ADD beauty_salon DOUBLE PRECISION NOT NULL, ADD pharmacy DOUBLE PRECISION NOT NULL, ADD perfumery DOUBLE PRECISION NOT NULL, ADD online DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE market_share (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, supermarket DOUBLE PRECISION NOT NULL, beauty_salon DOUBLE PRECISION NOT NULL, pharmacy DOUBLE PRECISION NOT NULL, online DOUBLE PRECISION NOT NULL, perfumery DOUBLE PRECISION NOT NULL, INDEX IDX_2428222FF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE market_share ADD CONSTRAINT FK_2428222FF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE country DROP supermarket, DROP beauty_salon, DROP pharmacy, DROP perfumery, DROP online');
    }
}
