<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('agents', ['id' => false, 'primary_key' => ['id']]);
        $table
            ->addColumn('id', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('phonetic', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('role', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('delete_flg', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('create', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('update', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'email',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'password',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'phonetic',
                ],
                ['unique' => true]
            )
            ->create();

        $table = $this->table('clients');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('phonetic', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('agent_id', 'integer', [
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('create', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('update', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('enginners');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('phonetic', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('skill', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('entering_date', 'timestamp', [
                'comment' => '入社日',
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('project_id', 'integer', [
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('create', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('update', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->create();

        $table = $this->table('projects');
        $table
            ->addColumn('name', 'integer', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('agent_id', 'integer', [
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('client_id', 'integer', [
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('skill_id', 'integer', [
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('staffs_ number', 'integer', [
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('from_date', 'timestamp', [
                'default' => '0000-00-00 00:00:00.000000',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('to_date', 'timestamp', [
                'default' => '0000-00-00 00:00:00.000000',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('memo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('create', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('update', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('skills');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('create', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('update', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP(6)',
                'limit' => null,
                'null' => false,
            ])
            ->create();

    }

    public function down()
    {
        $this->dropTable('agents');
        $this->dropTable('clients');
        $this->dropTable('enginners');
        $this->dropTable('projects');
        $this->dropTable('skills');
    }
}
