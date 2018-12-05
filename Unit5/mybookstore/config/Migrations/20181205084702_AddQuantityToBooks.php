<?php
use Migrations\AbstractMigration;

class AddQuantityToBooks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('books');
        $table->addColumn('quantity', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
