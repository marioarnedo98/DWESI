<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Song Entity
 *
 * @property int $id
 * @property string $title
 * @property int $author_id
 * @property int $publisher_id
 * @property string $photo
 * @property string $song
 * @property string $dir_photo
 * @property string $dir_song
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\Publisher $publisher
 */
class Song extends Entity
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
        'title' => true,
        'author_id' => true,
        'publisher_id' => true,
        // 'photo' => true,
        // 'song' => true,
        'dir_photo' => true,
        'dir_song' => true,
        'created' => true,
        'modified' => true,
        'author' => true,
        'publisher' => true
    ];
}
