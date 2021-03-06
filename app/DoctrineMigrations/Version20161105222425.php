<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161105222425 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tbl_blog_post ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_faq_question ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_find ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_howto_article ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_howto ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_knowledge2_provider ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_knowledge2_wood ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_wonder_creation ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_wonder_plan ADD is_locked TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_wonder_workshop ADD is_locked TINYINT(1) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tbl_blog_post DROP is_locked');
        $this->addSql('ALTER TABLE tbl_faq_question DROP is_locked');
        $this->addSql('ALTER TABLE tbl_find DROP is_locked');
        $this->addSql('ALTER TABLE tbl_howto DROP is_locked');
        $this->addSql('ALTER TABLE tbl_howto_article DROP is_locked');
        $this->addSql('ALTER TABLE tbl_knowledge2_provider DROP is_locked');
        $this->addSql('ALTER TABLE tbl_knowledge2_wood DROP is_locked');
        $this->addSql('ALTER TABLE tbl_wonder_creation DROP is_locked');
        $this->addSql('ALTER TABLE tbl_wonder_plan DROP is_locked');
        $this->addSql('ALTER TABLE tbl_wonder_workshop DROP is_locked');
    }
}
