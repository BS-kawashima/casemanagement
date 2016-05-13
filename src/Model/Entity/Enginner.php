<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enginner Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $phonetic
 * @property string $email
 * @property int $skill
 * @property \Cake\I18n\Time $entering_date
 * @property int $status
 * @property int $project_id
 * @property \App\Model\Entity\Project $project
 * @property \Cake\I18n\Time $create
 * @property \Cake\I18n\Time $update
 */
class Enginner extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
