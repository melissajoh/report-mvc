<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230523103440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE rooms ADD COLUMN image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE "BINARY", value INTEGER NOT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__rooms AS SELECT room_id, room_name, description, north, east, south, west FROM rooms');
        $this->addSql('DROP TABLE rooms');
        $this->addSql('CREATE TABLE rooms (room_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_name VARCHAR(255) NOT NULL, description CLOB NOT NULL, north INTEGER DEFAULT NULL, east INTEGER DEFAULT NULL, south INTEGER DEFAULT NULL, west INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO rooms (room_id, room_name, description, north, east, south, west) SELECT room_id, room_name, description, north, east, south, west FROM __temp__rooms');
        $this->addSql('DROP TABLE __temp__rooms');
    }
}
