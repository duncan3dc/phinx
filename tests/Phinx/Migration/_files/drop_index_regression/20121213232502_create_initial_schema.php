<?php

use Phinx\Migration\AbstractMigration;

class CreateInitialSchema extends AbstractMigration
{
    /**
     * Change.
     */
    public function change()
    {
        $this->table('my_table')
            ->addColumn('name', 'string')
            ->addColumn('entity_id', 'integer')
            ->create();

        $this->table('my_other_table')
            ->addColumn('name', 'string')
            ->create();
    }

    /**
     * Migrate Up.
     */
    public function up()
    {
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
    }
}
