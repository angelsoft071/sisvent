<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210120010811 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, identification VARCHAR(255) NOT NULL, position VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transaction ADD employee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D18C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id)');
        $this->addSql('CREATE INDEX IDX_723705D18C03F15C ON transaction (employee_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D18C03F15C');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP INDEX IDX_723705D18C03F15C ON transaction');
        $this->addSql('ALTER TABLE transaction DROP employee_id');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
