<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Songs Model
 *
 * @property \App\Model\Table\AuthorsTable|\Cake\ORM\Association\BelongsTo $Authors
 * @property \App\Model\Table\PublishersTable|\Cake\ORM\Association\BelongsTo $Publishers
 *
 * @method \App\Model\Entity\Song get($primaryKey, $options = [])
 * @method \App\Model\Entity\Song newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Song[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Song|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Song[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Song findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SongsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('songs');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
        $this->belongsTo('categories',[
            'foreignKey' => 'category_id'
        ]);

        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo'=>[
                'nameCallback' => function($data, $settings){
                    $photoName= uniqid().'_'.str_replace(" ", "_", $data['name']);
                    return $photoName;
                },
                'fields' => [
                    'dir' => 'dir_photo'
                ],
            ],
            'song'=>[
                'nameCallback' => function($data, $settings){
                    $songName= uniqid().'_'.str_replace(" ", "_", $data['name']);
                    return $songName;
                }
                ,
                'fields' => [
                    'dir' => 'dir_song'
                ],
            ],
        ]);
        $this->belongsTo('Authors', [
            'foreignKey' => 'author_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Publishers', [
            'foreignKey' => 'publisher_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 200)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        // $validator
        //     ->scalar('photo')
        //     ->maxLength('photo', 300)
        //     ->requirePresence('photo', 'create')
        //     ->notEmpty('photo');

        // $validator
        //     ->scalar('song')
        //     ->maxLength('song', 300)
        //     ->requirePresence('song', 'create')
        //     ->notEmpty('song');

        // $validator
        //     ->scalar('dir_photo')
        //     ->maxLength('dir_photo', 300)
        //     ->requirePresence('dir_photo', 'create')
        //     ->notEmpty('dir_photo');

        // $validator
        //     ->scalar('dir_song')
        //     ->maxLength('dir_song', 300)
        //     ->requirePresence('dir_song', 'create')
        //     ->notEmpty('dir_song');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['author_id'], 'Authors'));
        $rules->add($rules->existsIn(['publisher_id'], 'Publishers'));

        return $rules;
    }
}
