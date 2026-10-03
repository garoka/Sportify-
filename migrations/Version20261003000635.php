<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261003000635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE Rating (id INT AUTO_INCREMENT NOT NULL, objectif_id INT NOT NULL, score INT NOT NULL, INDEX IDX_DF252314157D1AD4 (objectif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE jour (id INT AUTO_INCREMENT NOT NULL, objectif_id INT NOT NULL, nom VARCHAR(20) NOT NULL, INDEX IDX_DA17D9C5157D1AD4 (objectif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE objectif (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, niveau INT DEFAULT NULL, semaine INT DEFAULT NULL, lien VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE plan (id INT AUTO_INCREMENT NOT NULL, id_obj_id INT NOT NULL, jour VARCHAR(255) NOT NULL, nutration VARCHAR(255) NOT NULL, muscle VARCHAR(255) NOT NULL, course DOUBLE PRECISION NOT NULL, INDEX IDX_DD5A5B7D403E86A9 (id_obj_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Rating ADD CONSTRAINT FK_DF252314157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE jour ADD CONSTRAINT FK_DA17D9C5157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE plan ADD CONSTRAINT FK_DD5A5B7D403E86A9 FOREIGN KEY (id_obj_id) REFERENCES objectif (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE Rating DROP FOREIGN KEY FK_DF252314157D1AD4
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE jour DROP FOREIGN KEY FK_DA17D9C5157D1AD4
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE plan DROP FOREIGN KEY FK_DD5A5B7D403E86A9
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE Rating
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE jour
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE objectif
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE plan
        SQL);
    }
}
