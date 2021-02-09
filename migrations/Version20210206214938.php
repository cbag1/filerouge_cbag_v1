<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210206214938 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competences (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, periode VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grpecompetences (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, archive TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grpecompetences_competences (grpecompetences_id INT NOT NULL, competences_id INT NOT NULL, INDEX IDX_17152CD872D323 (grpecompetences_id), INDEX IDX_17152CDA660B158 (competences_id), PRIMARY KEY(grpecompetences_id, competences_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grptags (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, competences_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, critere_evaluation VARCHAR(255) NOT NULL, INDEX IDX_4BDFF36BA660B158 (competences_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, grptags_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, descriptif VARCHAR(255) DEFAULT NULL, INDEX IDX_6FBC9426B2A39D76 (grptags_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE grpecompetences_competences ADD CONSTRAINT FK_17152CD872D323 FOREIGN KEY (grpecompetences_id) REFERENCES grpecompetences (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE grpecompetences_competences ADD CONSTRAINT FK_17152CDA660B158 FOREIGN KEY (competences_id) REFERENCES competences (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36BA660B158 FOREIGN KEY (competences_id) REFERENCES competences (id)');
        $this->addSql('ALTER TABLE tags ADD CONSTRAINT FK_6FBC9426B2A39D76 FOREIGN KEY (grptags_id) REFERENCES grptags (id)');
        $this->addSql('ALTER TABLE admin CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE admin ADD CONSTRAINT FK_880E0D76BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE apprenant ADD groupe_id INT DEFAULT NULL, ADD niveau VARCHAR(255) NOT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD statut VARCHAR(255) NOT NULL, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462E7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_C4EB462E7A45358C ON apprenant (groupe_id)');
        $this->addSql('ALTER TABLE cm CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE cm ADD CONSTRAINT FK_3C0A377EBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE formateur ADD CONSTRAINT FK_ED767E4FBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD profil_id INT DEFAULT NULL, ADD archive TINYINT(1) NOT NULL, ADD avatar LONGBLOB DEFAULT NULL, ADD type VARCHAR(255) NOT NULL, CHANGE username username VARCHAR(180) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE mdp password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
        $this->addSql('CREATE INDEX IDX_8D93D649275ED078 ON user (profil_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE grpecompetences_competences DROP FOREIGN KEY FK_17152CDA660B158');
        $this->addSql('ALTER TABLE niveau DROP FOREIGN KEY FK_4BDFF36BA660B158');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462E7A45358C');
        $this->addSql('ALTER TABLE grpecompetences_competences DROP FOREIGN KEY FK_17152CD872D323');
        $this->addSql('ALTER TABLE tags DROP FOREIGN KEY FK_6FBC9426B2A39D76');
        $this->addSql('DROP TABLE competences');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE grpecompetences');
        $this->addSql('DROP TABLE grpecompetences_competences');
        $this->addSql('DROP TABLE grptags');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE tags');
        $this->addSql('ALTER TABLE admin DROP FOREIGN KEY FK_880E0D76BF396750');
        $this->addSql('ALTER TABLE admin CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462EBF396750');
        $this->addSql('DROP INDEX IDX_C4EB462E7A45358C ON apprenant');
        $this->addSql('ALTER TABLE apprenant DROP groupe_id, DROP niveau, DROP adresse, DROP statut, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cm DROP FOREIGN KEY FK_3C0A377EBF396750');
        $this->addSql('ALTER TABLE cm CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE formateur DROP FOREIGN KEY FK_ED767E4FBF396750');
        $this->addSql('ALTER TABLE formateur CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649275ED078');
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('DROP INDEX IDX_8D93D649275ED078 ON user');
        $this->addSql('ALTER TABLE user ADD mdp VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP profil_id, DROP password, DROP archive, DROP avatar, DROP type, CHANGE username username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
