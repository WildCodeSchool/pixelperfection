<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240117183727 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, supermarket DOUBLE PRECISION NOT NULL, beauty_salon DOUBLE PRECISION NOT NULL, pharmacy DOUBLE PRECISION NOT NULL, perfumery DOUBLE PRECISION NOT NULL, online DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country_product (country_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_1A065CC0F92F3E70 (country_id), INDEX IDX_1A065CC04584665A (product_id), PRIMARY KEY(country_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, brand VARCHAR(255) NOT NULL, product_name VARCHAR(255) NOT NULL, product_category VARCHAR(255) NOT NULL, product_base_price DOUBLE PRECISION NOT NULL, product_quantity INT NOT NULL, product_total_price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quality (id INT AUTO_INCREMENT NOT NULL, parfume INT NOT NULL, texture INT NOT NULL, application INT NOT NULL, packaging_attractive INT NOT NULL, packaging_convenient INT NOT NULL, efficiency INT NOT NULL, allergy TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quality_product (quality_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_B29E3FB1BCFC6D57 (quality_id), INDEX IDX_B29E3FB14584665A (product_id), PRIMARY KEY(quality_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE country_product ADD CONSTRAINT FK_1A065CC0F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE country_product ADD CONSTRAINT FK_1A065CC04584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quality_product ADD CONSTRAINT FK_B29E3FB1BCFC6D57 FOREIGN KEY (quality_id) REFERENCES quality (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quality_product ADD CONSTRAINT FK_B29E3FB14584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE country_product DROP FOREIGN KEY FK_1A065CC0F92F3E70');
        $this->addSql('ALTER TABLE country_product DROP FOREIGN KEY FK_1A065CC04584665A');
        $this->addSql('ALTER TABLE quality_product DROP FOREIGN KEY FK_B29E3FB1BCFC6D57');
        $this->addSql('ALTER TABLE quality_product DROP FOREIGN KEY FK_B29E3FB14584665A');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE country_product');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE quality');
        $this->addSql('DROP TABLE quality_product');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
