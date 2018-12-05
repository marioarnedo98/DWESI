<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string $isbn
 * @property string $title
 * @property string $description
 * @property int $author_id
 * @property int $publisher_id
 * @property string $photo
 * @property string $dir
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\Publisher $publisher
 */
class Book extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'isbn' => true,
        'title' => true,
        'description' => true,
        'author_id' => true,
        'publisher_id' => true,
        'photo' => true,
        'dir' => true,
        'created' => true,
        'modified' => true,
        'author' => true,
        'publisher' => true,
        'price' => true,
        'quantity' => true
    ];
}
